<?php
define('TITLE', 'Members');
define('PAGE', 'members');
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
  <p class=" bg-dark text-white p-2">Gym Members</p>
  <?php
    $sql = "SELECT * FROM memberlogin_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table table-bordered table-hover">
  <thead>
   <tr class="active bg-secondary">
    <th scope="col">Gym Member ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Edit/Delete</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["m_login_id"].'</th>';
    echo '<td>'. $row["m_name"].'</td>';
    echo '<td>'.$row["m_email"].'</td>';
    echo '<td><form action="editmeb.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["m_login_id"] .'><button type="submit" class="btn btn-success mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form>  
    <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["m_login_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
   </tr>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM memberlogin_tb WHERE m_login_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>
</div>
</div>
<div><a class="btn btn-success box" href="insertmeb.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php
include('includes/footer.php'); 
?>