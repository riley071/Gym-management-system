
<?php
define('TITLE', 'Email');
define('PAGE', 'email');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $mEmail = $_SESSION['mEmail'];
 } else {
  echo "<script> location.href='memberLogin.php'; </script>";
 }?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
<div class="container">

<h3 class="text-center">Contact us</h3><br />

<div class="row">
  <div class="col-md-8">
      <form action="/post" method="post">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4">
    <b>Customer service:</b> <br />
    Phone: +265 0882889689<br />
    E-mail: <a href="#">rileyemzo@gmail.com</a><br />
    <br /><br />
    Profitness Gym<br />
    Blantyre <br />
    Chichiri <br />
    Phone: +265 0889789232<br />
    <a href="#">riley@gmail.com</a><br />

<!-- 
    <br /><br />
    <b>Hong kong:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    Wan Chai District, Hong Kong<br />
    Phone: +852 129 209 291<br />
    <a href="#">hk@mysite.com</a><br /> -->


  </div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>