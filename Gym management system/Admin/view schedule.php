<?php
define('TITLE', 'view schedule');
define('PAGE', 'schedule');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">Gym schedule</p>
  <?php
    $sql = "SELECT * FROM tbl_events";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table table-bordered table-hover">
  <thead>
   <tr class="active bg-secondary">
    <th scope="col">ID</th>
    <th scope="col">Class</th>
    <th scope="col">Start: Date/Time</th>
    <th scope="col">End: Date/Time</th>
    <th scope="col">Add/Delete</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
    echo '<tr>';
     echo '<th scope="row">'.$row["id"].'</th>';
     echo '<td>'. $row["title"].'</td>';
     echo '<td>'.$row["start"].'</td>';
     echo '<td>'.$row["end"].'</td>';
     echo '<td> <form action="updateevent.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["id"] .'><button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form> 
    <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["id"] .'><button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
   </tr>';
     
   }
  echo '</tbody>
  </table>';
 } else {
   echo "0 Result";
 }
 if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM tbl_events WHERE id = {$_REQUEST['id']}";
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