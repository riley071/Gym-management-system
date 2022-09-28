<?php
define('TITLE', 'Add New Member');
define('PAGE', 'members');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
if(isset($_REQUEST['mebsubmit'])){ 
 // Checking for Empty Fields
 if(($_REQUEST['m_name'] == "") || ($_REQUEST['m_email'] == "") || ($_REQUEST['m_password'] == "")){ die($conn->error);
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $mname = $_REQUEST['m_name'];
   $mEmail = $_REQUEST['m_email'];
   $mPassword = $_REQUEST['m_password'];
   $sql = "INSERT INTO memberlogin_tb (m_name, m_email, m_password) VALUES ('$mname', '$mEmail', '$mPassword')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else { 
    //  alret message display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<!-- admin panel add new member -->
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Gym member</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="m_name">Name</label>
      <input type="text" class="form-control" id="m_name" name="m_name">
    </div>
    <div class="form-group">
      <label for="m_email">Email</label>
      <input type="email" class="form-control" id="m_email" name="m_email">
    </div>
    <div class="form-group">
      <label for="m_password">Password</label>
      <input type="password" class="form-control" id="r_password" name="m_password">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary" id="mebsubmit" name="mebsubmit">Submit</button>
      <a href="member.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- admin panel add new member end -->

<!-- footer start -->
<?php
include('includes/footer.php'); 
?>
<!-- footer end -->