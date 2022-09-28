
<?php
define('TITLE', 'help');
define('PAGE', 'help');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $mEmail = $_SESSION['mEmail'];
 } else {
  echo "<script> location.href='memberLogin.php'; </script>";
 }?>
 <div class="col-sm-9 col-md-10 mt-5 text-center">
 <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h3 class="display-5 fw-normal"><u>Help and Support Centre</u></h3>
    <p class="fs-6 text-dark">Having trouble with youre account?<br> For more help vist contact us page for admin support </p>
  </div>
 <div class="container py-2">
 <p class="fs-6 text-dark"><u>Bookings</u></p>
    <div class="row">
     <div class="col-10 mx-auto">
      <div class="accordion" id="faqExample">
      <div class="card">
      <div class="card-header p-2" id="headingOne">
       <h5 class="mb-0 text-left">
<button class="btn btn-link  " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      1: How to Make A Booking?
                  </button>
                   </h5>
  </div>
   <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
             <div class="card-body">
        <b>Answer:</b> <br>Firstly click on make booking on youre dashboard, then fill in booking form.<br> When Youre done filling booking form click on submit button to submit booking form
                      </div>
                   </div>
               </div>
   <div class="card">
          <div class="card-header p-2" id="headingTwo">
              <h5 class="mb-0 text-left">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   2: How to Cancel A Booking?
             </button>
           </h5>
            </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
         <div class="card-body">
         <b>Answer:</b> <br> Click on My Booking on youre dashboard navigation and click on the red delete button to cancel youre bookings. 
               </div>
       </div>
          </div>
               <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              3: How to Edit Booking Details?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                        <b>Answer:</b> <br>Click on My Booking on youre dashboard navigation and click on green edit button to edit booking details.
                        </div>
                    </div>
                </div>
               <Br>
                <p class="fs-6 text-dark">Payments</p>
                <div class="card">
                    <div class="card-header p-2" id="headingfour">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                              1: How To Make A Payment?
                            </button>
                          </h5>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faqExample">
                        <div class="card-body">
                            Select Subscription on you dashboard then click on Subscription button, Once redirected to pay pal login or create an account to make payment
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingfive">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                              2: How to cancel Subscription?
                            </button>
                          </h5>
                    </div>
                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#faqExample">
                        <div class="card-body">
                            Once logged in you Pay pal account before confrimation message press cancel to return to gym profile account.
                        </div>
                    </div>
                </div>
                <Br>
                <p class="fs-6 text-dark">Schedules</p>
                <div class="card">
                    <div class="card-header p-2" id="headingsix">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                              1. How to view Gym Schedules?
                            </button>
                          </h5>
                    </div>
                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#faqExample">
                        <div class="card-body">
                            On you user dashboard navigation click on view schedules to check weeky gym schedules.
                        </div>
                    </div>
                </div>
                <Br>
                <p class="fs-6 text-dark"><u>My Account</u> </p>
                <div class="card">
                    <div class="card-header p-2" id="headingseven">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseThree">
                              1. How to Change Your Password?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#faqExample">
                        <div class="card-body">
                            On user dashboard navigation bar click on change password. Note: Please dont share you password with anyone.
                        </div>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingten">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseThree">
                              2: How to Change Youre User Name?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#faqExample">
                        <div class="card-body">
                            On user dashboard click on Profile To Change user name. Note: user can note change email address.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingnine">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapseThree">
                              3: How to contact admin for more support?
                            </button>
                          </h5>
                    </div>
                    <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#faqExample">
                        <div class="card-body">
                            on user dashboard click on Contact us to send email to admin for more assitance.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container--></div>
<?php
include('includes/footer.php'); 
?>
