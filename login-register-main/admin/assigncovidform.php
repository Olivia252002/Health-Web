<?php    
if(session_id() == '') {
  session_start();
}
if(isset($_SESSION['is_adminlogin'])){
 $aEmail = $_SESSION['aEmail'];
} else {
 echo "<script> location.href='login.php'; </script>";
}
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM coviddata WHERE id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }

 //  Assign work Order Request Data going to submit and save on db assignwork_tb table
 if(isset($_REQUEST['assign'])){
  // Checking for Empty Fields
  if(($_REQUEST['id'] == "") || ($_REQUEST['name'] == "") || ($_REQUEST['fname'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['idCard'] == "") || ($_REQUEST['address'] == "") || ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $fname = $_REQUEST['fname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $idCard = $_REQUEST['idCard'];
    $address = $_REQUEST['address'];
    $assigntech = $_REQUEST['assigntech'];
    $date = $_REQUEST['inputdate'];
    $sql = "INSERT INTO assignwork_tb (id, name, fname, email, phone, gender, idCard, address, assign_tech, assign_date) VALUES ('$id', '$name','$fname', '$email', '$phone', '$gender', '$idCard', '$address', '$assigntech', '$date')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
    }
  }
  }
 // Assign work Order Request Data going to submit and save on db assignwork_tb table [END]
 ?>
<div class="col-sm-5 mt-5 jumbotron">
  <!-- Main Content area Start Last -->
  <form action="" method="POST">
    <h5 class="text-center">Vaccine slot booking Request</h5>
    <div class="form-group">
      <label for="id">Request ID</label>
      <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['request_id'])) {echo $row['request_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="name">Full name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($row['request_info'])) {echo $row['request_info']; }?>">
    </div>
    <div class="form-group">
      <label for="fname">Guardian's name</label>
      <input type="text" class="form-control" id="fname" name="fname" value="<?php if(isset($row['request_desc'])) { echo $row['request_desc']; } ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($row['requester_name'])) { echo $row['requester_name']; } ?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phone">Phone No</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($row['requester_add1'])) { echo $row['requester_add1']; } ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" value="<?php if(isset($row['requester_add2'])) {echo $row['requester_add2']; }?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="idCard">Idcard No</label>
        <input type="text" class="form-control" id="idCard" name="idCard" value="<?php if(isset($row['requester_city'])) {echo $row['requester_city']; }?>">
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="assigntech">Message</label>
        <input type="text" class="form-control" id="assigntech" name="assigntech">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="inputdate">
      </div>
    </div>
    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign">Assign</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
  <!-- below msg display if required fill missing or form submitted success or failed -->
  <?php if(isset($msg)) {echo $msg; } ?>
</div> <!-- Main Content area End Last -->
</div> <!-- End Row -->
</div> <!-- End Container -->
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>