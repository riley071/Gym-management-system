<?php
define('TITLE', 'Contact us');
define('PAGE', 'contact');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>

<div class="container col-sm-6 mt-5 mx-3 jumbotron">
<legend class="text-center">Contact Gym Member</legend>
	<div class="row">
      <div class="container col-sm-9 col-md-10 mt-5">

        <div class="well well-sm">
          <form class="form-horizontal" action="" method="POST">
          <fieldset>
           
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="Name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="Email" type="email" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Enter Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="Message" name="Message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" name="Login" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');

require('PHPMailer/SMTP.php');

require('PHPMailer/PHPMailer.php');


if(isset($_POST['Login'])) 
{
 $name=$_POST['Name'];
 $email=$_POST['Email'];
 $message=$_POST['Message'];

 $mail = new PHPMailer(true);

 
try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rileyemzo@gmail.com';                     //SMTP username
    $mail->Password   = 'emzoriley20';                               //SMTP password
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rileyemzo@gmail.com', 'Profitness');
    $mail->addAddress('rileyemzo@gmail.com');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Profitness Gym ';
    $mail->Body    = "Name: $name <br> Email: $email <br> Message: $message";
    
    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
  } catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
  }
}
?>

<?php
include('includes/footer.php'); 
?>