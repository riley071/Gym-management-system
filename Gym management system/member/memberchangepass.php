<?php
define('TITLE', 'Change Password');
define('PAGE', 'memberchangepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $mEmail = $_SESSION['mEmail'];
} else {
 echo "<script> location.href='memberLogin.php'; </script>";
}
 $mEmail = $_SESSION['mEmail'];
 if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['mPassword'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    $sql = "SELECT * FROM memberlogin_tb WHERE m_email='$mEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $mPass = $_REQUEST['mPassword'];
     $sql = "UPDATE memberlogin_tb SET m_password = '$mPass' WHERE m_email = '$mEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}

?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
<h3 class="text-center">Change Password </h3>
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $mEmail ?>" readonly>
          <small class="form-text text-dark">Note: User can not change email </small>
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="mPassword">
        </div>
        <button type="submit" class="btn btn-primary mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>

    </div>

  </div>
</div>

<?php
include('includes/footer.php'); 
?>