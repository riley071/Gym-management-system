<?php
define('TITLE', 'member Profile');
define('PAGE', 'memberProfile');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $mEmail = $_SESSION['mEmail'];
 } else {
  echo "<script> location.href='memberLogin.php'; </script>";
 }

 $sql = "SELECT * FROM memberlogin_tb WHERE m_email='$mEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $mName = $row["m_name"]; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['mName'] == "")){
   
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $mName = $_REQUEST["mName"];
   $sql = "UPDATE memberlogin_tb SET m_name = '$mName' WHERE m_email = '$mEmail'";
   if($conn->query($sql) == TRUE){
   // below msg display on form submit success
   $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   } else {
   // below msg display on form submit failed
   $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
?>
<!--  start Profile form -->
<div class="col-sm-6 mt-5  mx-3 jumbotron">
<h3 class="text-center">Update Profile Info</h3>
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control text-dark" id="inputEmail" value=" <?php echo $mEmail ?>" readonly>
      <small class="form-text text-dark">Note: User can not change email </small>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $mName ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="nameupdate">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
  </form>
</div>
</div>   
</div>

<!-- profile form end here -->
</div>
<?php
include('includes/footer.php'); 
?>