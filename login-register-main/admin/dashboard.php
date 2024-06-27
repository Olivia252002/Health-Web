<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php'); 
include('../database.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 $sql = "SELECT max(id) FROM coviddata";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitrequest = $row[0];

 $sql = "SELECT max(id) FROM app";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitappointment = $row[0];

?>
<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Vaccine slot booking Requests Received</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submitrequest; ?>
          </h4>
          <a class="btn text-white" href="request.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Doctor Appoitment Request</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submitappointment; ?>
          </h4>
          <a class="btn text-white" href="request1.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Contact Request</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submitappointment; ?>
          </h4>
          <a class="btn text-white" href="request2.php">View</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="mx-5 mt-5 text-center">
    <!--Table-->
    <p class=" bg-dark text-white p-2">List of Vaccine Requesters</p>
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["id"].'</th>';
    echo '<td>'. $row["full_name"].'</td>';
    echo '<td>'.$row["email"].'</td>';
  }
 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
  </div>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>