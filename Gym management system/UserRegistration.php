<?php
  include('dbConnection.php');
//Register starts here
  if(isset($_REQUEST['mSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['mName'] == "") || ($_REQUEST['mEmail'] == "") || ($_REQUEST['mPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT m_email FROM memberlogin_tb WHERE m_email='".$_REQUEST['mEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $mName = $_REQUEST['mName'];
        $mEmail = $_REQUEST['mEmail'];
        $mPassword = $_REQUEST['mPassword'];
        $sql = "INSERT INTO memberlogin_tb(m_name, m_email, m_password) VALUES ('$mName','$mEmail', '$mPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          die($conn->error);
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>
 <!-- end register here// -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
    <!-- these are Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/all.min.css">

<!-- these are Google Font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<!-- my style css -->
<link rel="stylesheet" href="css/custom.css">
</head>
<body class="bg-light">
<div class="mb-3 text-center mt-5 text-dark" style="font-size: 30px;">
    <i class=""></i>
    <span><u><b>PROFITNESS GYM</b></U></span>
  </div>
  <p class="text-center text-dark" style="font-size: 20px;"> <i class="text-danger"></i> <span><U>    MEMBER AREA</u></span>
  </p>
<div class="container pt-1" id="registration">
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
    <?php if(isset($regmsg)) {echo $regmsg; } ?>
      <form action="" class="shadow-lg p-4 bg-white" method="POST">
      <h3 class="text-center text-dark">Create an Account</h3>
        <div class="form-group">
          <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">User Name</label><input type="text"
            class="form-control" placeholder="User Name" name="mName">
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="mEmail">
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
            Password</label><input type="password" class="form-control" placeholder="Password" name="mPassword">
        </div>
        <button type="submit" class="btn btn-success mt-5 btn-block shadow-sm font-weight-bold" name="mSignup">Sign Up</button>
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <div class="text-center"><a class="btn btn-info mt-4 btn-block shadow-sm font-weight-bold" href="./member/memberLogin.php">Login</a>
        <small class="form-text">Please login here after sign up</small></div>
      </form>
      
      </div>
    </div>
  </div>
</div>
 <!-- Boostrap JavaScript -->
 <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>
</html>