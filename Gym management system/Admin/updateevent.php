<?php    
define('TITLE', 'Update Event');
define('PAGE', 'Event');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['eventupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['id'] == "") || ($_REQUEST['title'] == "") || ($_REQUEST['start'] == "") || ($_REQUEST['end'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $start = $_REQUEST['start'];
    $end = $_REQUEST['end'];

  $sql = "UPDATE tbl_events SET id = '$id', title = '$title', start = '$start' WHERE id = '$id'";
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
  <h3 class="text-center">Update schedule </h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM tbl_events WHERE id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])) {echo $row['id']; }?>">
    </div>
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($row['title'])) {echo $row['title']; }?>">
    </div>
    <div class="form-group">
      <label for="start">start</label>
      <input type="text" class="form-control" id="start" name="start" value="<?php if(isset($row['start'])) {echo $row['start']; }?>">
    </div>
    <div class="form-group">
      <label for="end">End</label>
      <input type="text" class="form-control" id="end" name="end" value="<?php if(isset($row['end'])) {echo $row['end']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-success" id="eventupdate" name="eventupdate">Update</button>
      <a href="view schedule.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

<?php
include('includes/footer.php'); 
?>