<?php
define('TITLE', 'Help');
define('PAGE', 'help');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>

 <div class="col-sm-9 col-md-10 mt-5 text-center">
 <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h3 class="display-5 fw-normal"><u>Help and Support Centre</u></h3>
    <p class="fs-6 text-dark">Having trouble with youre account? </p>
  </div>
 <div class="container py-2">
 <p class="fs-6 text-dark"><u>Members</u></p>
    <div class="row">
     <div class="col-10 mx-auto">
      <div class="accordion" id="faqExample">
      <div class="card">
      <div class="card-header p-2" id="headingOne">
       <h5 class="mb-0 text-left">
<button class="btn btn-link  " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      1: How to change member profile details?
                  </button>
                   </h5>
  </div>
   <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
             <div class="card-body">
        <b>Answer:</b> <br>click On members on your dasboard.<br> pick user and click green button to edit member profile details.
                      </div>
                   </div>
               </div>
   <div class="card">
          <div class="card-header p-2" id="headingTwo">
              <h5 class="mb-0 text-left">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   2: How to delete member?
             </button>
           </h5>
            </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
         <div class="card-body">
         <b>Answer:</b> <br> Click on members on youre dashboard navigation and pick member then click on the red button to delete. 
               </div>
       </div>
          </div>
               <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              3: How to Edit Member Password, User Name?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                        <b>Answer:</b> <br>Click on Members on youre dashboard navigation then pick member click on green edit button to edit member details.
                        </div>
                    </div>
                </div>
               <Br>
                <p class="fs-6 text-dark">Email</p>
                <div class="card">
                    <div class="card-header p-2" id="headingfour">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                              1: How To Contact Gym Member?
                            </button>
                          </h5>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faqExample">
                        <div class="card-body">
                            click on email on your dashbaord fill in form enter member email and press the send button to submit Email.
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
                            click on view schedule on your dashbaord to view schedule.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="heading2">
                        <h5 class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                              1. How to update Gym Schedules?
                            </button>
                          </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqExample">
                        <div class="card-body">
                            click on view schedule on your dashbaord to view schedule.
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
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
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
                            The answer to the question can go here.
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
                            The answer to the question can go here.
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