<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="memberProfile.php">Profitness Gym</a>
 </nav>

 <!-- Side Bar -->
 

 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'memberProfile') { echo 'active'; } ?>" href="memberProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" <?php if(PAGE == 'Payment') { echo 'active'; } ?>" href="Payment.php">
        <i class="fab fa-paypal"></i>
        Subscription
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link"  <?php if(PAGE == 'SubmitBooking') { echo 'active'; } ?>" href="SubmitBooking.php">
        <i class="fas fa fa-calendar"></i>
        Make Booking
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link"  <?php if(PAGE == 'MyBooking') { echo 'active'; } ?>" href="mybooking.php">
        <i class="fas fa-exchange-alt"></i>
        My Booking
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link"<?php if(PAGE == 'viewschedule') { echo 'active'; } ?>" href="viewschedule.php">
        <i class="far fa-calendar-alt"></i>
        View Schedule
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link"<?php if(PAGE == 'help') { echo 'active'; } ?>" href="help.php">
        <i class="far fa-question-circle"></i>
        Help and Support
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link"<?php if(PAGE == 'email') { echo 'active'; } ?>" href="email.php">
        <i class="fas fa-envelope"></i>
        Contact Us
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'memberchangepass') { echo 'active'; } ?>" href="memberchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
   <!-- End side bar -->