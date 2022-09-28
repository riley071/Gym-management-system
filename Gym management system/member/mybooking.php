<?php
define('TITLE', 'My Booking');
define('PAGE', 'MyBooking');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $mEmail = $_SESSION['mEmail'];
} else {
 echo "<script> location.href='memberLogin.php'; </script>";
}
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">My Booking</p>

<?php
    $sql = "SELECT * FROM submitbookingt_tb WHERE member_email ='$mEmail'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table table-bordered table-hover">
  <thead>
   <tr class="active bg-secondary">
    <th scope="col">Booking id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Booking type</th>
    <th scope="col">Address</th>
    <th scope="col">Mobile</th>
    <th scope="col">Date</th>
    <th scope="col">Cancel</th>

   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
    echo '<tr>';
     echo '<th scope="row">'.$row["Booking_id"].'</th>';
     echo '<td>'. $row["member_name"].'</td>';
     echo '<td>'.$row["member_email"].'</td>';
     echo '<td>'.$row["member_add1"].'</td>';
     echo '<td>'.$row["booking_type"].'</td>';
     echo '<td>'.$row["member_mobile"].'</td>';
     echo '<td>'.$row["member_date"].'</td>';
     echo '<td>  
     <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["Booking_id"] .'><button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
    </tr>';  }
  echo '</tbody>
  </table>';
 } else {
   echo "0 Result";
 }
 if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM submitbookingt_tb WHERE Booking_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
 ?>
 <?php
include('includes/footer.php'); 
?>