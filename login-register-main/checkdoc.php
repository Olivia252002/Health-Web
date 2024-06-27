<?php
define('TITLE', 'Status');
include('database.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='login.php'; </script>";
}
?>
<div class="col-sm-6 mt-5  mx-3">
  <form action="" class="mt-3 form-inline d-print-none">
    <div class="form-group mr-3">
      <label for="checkid">Enter Request ID: </label>
      <input type="text" class="form-control ml-3" id="checkid" name="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-danger">Search</button>
  </form>
  <?php
  if(isset($_REQUEST['checkid'])){
    $sql = "SELECT * FROM assigndoc_tb WHERE request_id = {$_REQUEST['checkid']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(($row['request_id']) == $_REQUEST['checkid']){ 
      ?>
  <h3 class="text-center mt-5">Assigned Doctor Details</h3>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Request ID</td>
        <td>
          <?php if(isset($row['id'])) {echo $row['request_id']; } ?>
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
          <?php if(isset($row['name'])) {echo $row['name']; } ?>
        </td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>
          <?php if(isset($row['email'])) {echo $row['email']; } ?>
        </td>
      </tr>
      <tr>
        <td>email</td>
        <td>
          <?php if(isset($row['phone'])) {echo $row['phone']; } ?>
        </td>
      </tr>
      <tr>
        <td>Assigned Date</td>
        <td>
          <?php if(isset($row['assign_date'])) {echo $row['assign_date']; } ?>
        </td>
      </tr>
      <tr>
        <td>Doctor Name</td>
        <td>Dr.Somnath</td>
      </tr>
      <tr>
        <td>Customer Sign</td>
        <td></td>
      </tr>
      <tr>
        <td>Doctor Sign</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="text-center">
    <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form>
    <form class="d-print-none d-inline" action="request1.php"><input class="btn btn-secondary" type="submit" value="Close"></form>
  </div>
  <?php } else {
      echo '<div class="alert alert-dark mt-4" role="alert">
      Your Request is Still Pending </div>';
    }
 }
 ?>

</div>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/all.min.css">

<!-- Custome CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
?>