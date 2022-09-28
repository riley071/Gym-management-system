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
 <nav class="navbar navbar-dark bg-primary fixed-top p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php"><b>Profitness Gym</b><small class="text-dark">     Admin area
  </small>

  </a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item ">
       <a class="nav-link text-dark <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Members') { echo 'active'; } ?>" href="member.php">
        <i class="fas fa-users"></i>
        Members
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Bookings') { echo 'active'; } ?>" href="bookings.php">
        <i class="fas fa-clipboard-list"></i>
        Bookings List
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="event.php">
        <i class="far fa-calendar-alt"></i>
        Schedule calendar
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'viewschedule') { echo 'active'; } ?> " href="view schedule.php">
        <i class="far fa-calendar"></i>
        View Schedules
       </a>
      </li>
      
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'contact') { echo 'active'; } ?> " href="contact us.php">
        <i class="fas fa-envelope-square"></i>
        Email Reminder
       </a>
      </li>
      <!-- <li class="nav-item">
       <a class="nav-link" href=".php">
        <i class="fa fa-folder"></i>
        User manual
       </a>
      </li> -->
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'help') { echo 'active'; } ?> " href="help.php">
        <i class="far fa-question-circle"></i>
        Help & Support
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-power-off"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>