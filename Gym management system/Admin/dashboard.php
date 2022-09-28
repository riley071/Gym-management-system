<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";}

  $sql = "SELECT * FROM memberLogin_tb";
  $result = $conn->query($sql);
  $totaltech = $result->num_rows;

  $sql = "SELECT * FROM tbl_events";
  $result = $conn->query($sql);
  $totalmeb = $result->num_rows;

  $sql = "SELECT * FROM submitbookingt_tb";
  $result = $conn->query($sql);
  $totalbok = $result->num_rows;
 

?>
<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Total schedules</div>
        <div class="card-body">
          <h4 class="card-title">
          <?php echo $totalmeb; ?>
          </h4>
          <a class="btn text-white" href="view schedule.php">More info</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Number of Members</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totaltech; ?>
          </h4>
          <a class="btn text-white" href="member.php">More info</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Bookings</div>
        <div class="card-body">
          <h4 class="card-title">
          <?php echo $totalbok; ?>
          </h4>
          <a class="btn text-white" href="bookings.php">More info</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-5 mt-5 text-center">
    <!--Table-->
    <p class=" bg-primary text-white p-2"><b>Resgistred members</b></p>
    <?php
    $sql = "SELECT * FROM memberlogin_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table  table-bordered table-hover">
  <thead>
   <tr class="table-secondary ">
    <th scope="col">Member ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["m_login_id"].'</th>';
    echo '<td>'. $row["m_name"].'</td>';
    echo '<td>'.$row["m_email"].'</td>';
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