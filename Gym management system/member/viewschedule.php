<?php
define('TITLE', 'view schedule');
define('PAGE', 'viewschedule');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $mEmail = $_SESSION['mEmail'];
} else {
 echo "<script> location.href='viewschedule.php'; </script>";
}
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">CLASSES SCHEDULE</p>
  <?php
    $sql = "SELECT * FROM tbl_events";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table table-bordered table-hover">
  <thead>
   <tr class="active bg-secondary">
    <th scope="col">GYM CLASS</th>
    <th scope="col">START:DATE/TIME</th>
    <th scope="col">End:DATE/TIME</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
    echo '<tr>';
     echo '<th scope="row">'.$row["title"].'</th>';
     echo '<td>'. $row["start"].'</td>';
     echo '<td>'.$row["end"].'</td>';
  
   }
  echo '</tbody>
  </table>';
 } else {
   echo "0 Result";
 }
 ?> 

<?php
include('includes/footer.php'); 
?>