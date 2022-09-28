<?php    
define('TITLE', 'Update Member');
define('PAGE', 'Member');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['mebupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['m_login_id'] == "") || ($_REQUEST['m_name'] == "") || ($_REQUEST['m_email'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $mid = $_REQUEST['m_login_id'];
    $mname = $_REQUEST['m_name'];
    $memail = $_REQUEST['m_email'];

  $sql = "UPDATE memberlogin_tb SET m_login_id = '$mid', m_name = '$mname', m_email = '$memail' WHERE m_login_id = '$mid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Gym Member Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM memberlogin_tb WHERE m_login_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="m_login_id">Member ID</label>
      <input type="text" class="form-control" id="m_login_id" name="m_login_id" value="<?php if(isset($row['m_login_id'])) {echo $row['m_login_id']; }?>">
    </div>
    <div class="form-group">
      <label for="m_name">Name</label>
      <input type="text" class="form-control" id="m_name" name="m_name" value="<?php if(isset($row['m_name'])) {echo $row['m_name']; }?>">
    </div>
    <div class="form-group">
      <label for="m_email">Email</label>
      <input type="text" class="form-control" id="m_email" name="m_email" value="<?php if(isset($row['m_email'])) {echo $row['m_email']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-success" id="mebupdate" name="mebupdate">Update</button>
      <a href="member.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

<?php
include('includes/footer.php'); 
?>