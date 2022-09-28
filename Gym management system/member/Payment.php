<?php
define('TITLE', 'payment');
define('PAGE', 'memberpayment');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $mEmail = $_SESSION['mEmail'];
} else {
 echo "<script> location.href='payment.php'; </script>";
}
?>
   <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="#" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-1"> 
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal"><u>Membership Plan</u></h1>
    <p class="fs-5 text-muted">Get started today by getting youre gym membership subcripition plan</p>
  </div>

  <main class="container-fluid">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col-sm-6">
        <div class="card mb-5 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">1 Month</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$12.38<small class="text-muted fw-light">/USD</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 week free lessons</li>
              <li>Fast transactions</li>
              <li>Email support</li>
              <li>Help center access</li>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="YZCM6FHAW9UTL">
      <table>
      <tr><td><input type="hidden" name="on0" value="Prices">Prices</td></tr><tr><td><select name="os0">
        <option value="1 month">1 month : $12.38 USD - monthly</option>
        <option value="6 months">6 months : $37.14 USD - monthly</option>
        <option value="1 year">1 year : $99.04 USD - yearly</option>
      </select> </td></tr>
      </table>
      <input type="hidden" name="currency_code" value="USD">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
           
            </ul>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-1 rounded-2 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">6 Months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$37.14<small class="text-muted fw-light">/USD</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 Month free lessons</li>
              <li>Monthy </li>
              <li>Priority email support</li>
              <li>Help center access</li>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="YZCM6FHAW9UTL">
      <table>
      <tr><td><input type="hidden" name="on0" value="Prices">Prices</td></tr><tr><td><select name="os0">
      <option value="6 months">6 months : $37.14 USD - monthly</option>
        <option value="1 month">1 month : $12.38 USD - monthly</option>
        <option value="1 year">1 year : $99.04 USD - yearly</option>
      </select> </td></tr>
      </table>
      <input type="hidden" name="currency_code" value="USD">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="2" height="2">
            </ul>
          
              
      </form>

                </div>
        </div>
      </div>
      <div class="col-sm-6 mr-*-#">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">1 Year</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$99.04 <small class="text-muted fw-light">/USD</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>3 months free lessons</li>
              <li>Free brevages</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="YZCM6FHAW9UTL">
      <table>
      <tr><td><input type="hidden" name="on0" value="Prices">Prices</td></tr><tr><td><select name="os0">
      <option value="1 year">1 year : $99.04 USD - yearly</option>
      <option value="6 months">6 months : $37.14 USD - monthly</option>
      <option value="1 month">1 month : $12.38 USD - monthly</option>
        
      </select> </td></tr>
      </table>
      <input type="hidden" name="currency_code" value="USD">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      
            </ul>
          </form>

           
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-1 rounded-2 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Payment Process</h4>
          </div>
          <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
              <li>1: Create pay pal account or Login</li><BR>
              <li>2: Fill in form details</li><BR>
              <li>3: Pick Payment method</li><BR>
              <li>eg: Paypal,Creditcard or Debit card</li><BR>
              <li>5:Confrim Payment to Return to Website</li><BR>
             
            </ul>
          
              
      </form>

                </div>
        </div>
      </div>
      
    </div>
    </div>
    




<?php
include('includes/footer.php'); 
?>