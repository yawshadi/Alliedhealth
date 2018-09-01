<?php
require("init.php");
new users(); 
$paymentid=$_GET['paymentid'];
$accountsdata= account::getaccountbyid($paymentid);
$bankersdraft=Documents::listdocuments('accounts',$accountsdata->randomnumber);
require("include/header.php");


?>

            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <?php require("include/left_sidebar.php") ?>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/> (+123) 123 456 789</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Accounts Collections</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>

                        <div class="panel panel-flat">
                        <div class="panel-heading">
                            <legend class="text-bold">Payment Verification </legend>

                            <!-- Bootstrap alert notification -->
                        
                            <!-- /Bootstrap alert notification -->
                                <?php  
                                $print=Printisset::printing();
                                if($print !=''){
                                ?>
                                             <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-check-all"></i>
                                                <strong>Well done!</strong> <?= Printisset::printing() ?>
                                            </div>
                                <?php } ?>
                                <div class='row'>
                                    <div class="col-md-12">
                                  
											<!-- START carousel-->
											<div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
												<ol class="carousel-indicators">
                                                    <?php 
                                                    $i=0;
                                                    foreach($bankersdraft as $doc):
                                                    ?>
													<li data-target="#carousel-example-captions" data-slide-to="<?= $i; ?>" class="<?=($i==0)?'active':'' ?>"></li>
				
                                                 <?php 
                                                 $i++;
                                                endforeach; ?>
												</ol>
												<div role="listbox" class="carousel-inner">
                                                    <?php 
                                                    foreach($bankersdraft as $doc):
                                                    ?>
													<div class="item active">
														<img src="uploads/<?= $doc->newname ?>"  alt="First slide image">
														<div class="carousel-caption">
															
														</div>
													</div>
                                                    <?php endforeach; ?>
													
												</div>
												<a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
												<a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
											</div>
											<!-- END carousel-->
                                       
                                        <div>
										</div>
                            <div class="panel-body">
                                <form action="forms/addpayment.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>


                                        <div class="form-group">
                                            <label>Fullname:</label>
                                            <input class="form-control" readonly name='fullname' placeholder="Fullname" value="<?= $accountsdata->fullname ?>" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Due (GHC):</label>
                                            <input class="form-control" readonly id='amountdue' name='amountdue' readonly value="<?= $accountsdata->amountdue ?>" type="text">
                                           
                                            <input class="form-control"  name='location'  value="account" type="hidden">
                                            <input class="form-control"  name='accounttype'  value="newpayment" type="hidden">



                                        </div>

                                        <div class="form-group">
                                            <label>Telephone Number:</label>
                                            <input class="form-control" readonly name="telephonenumber" placeholder="Telephone Number" value="<?= $accountsdata->telephonenumber ?>" type="tel">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Email Address:</label>
                                            <input class="form-control" readonly name='emailaddress' placeholder="Email Address" value="<?= $accountsdata->emailaddress ?>" type="email">
                                            <input class="form-control"  name='uniqueuploadid'  id='uniqueuploadid'value="<?php echo time();?>" type="hidden">
                                        </div>


                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        
                                        <div class="form-group">
                                            <label>Profession:</label>
                                            <input class="form-control" readonly name="amountpaid" placeholder="Profession name" value="<?= $accountsdata->professionname ?>" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Paid:</label>
                                            <input class="form-control" readonly name="amountpaid" placeholder="Amount Paid" value="<?= $accountsdata->amountpaid ?>" type="text">
                                        </div>


                                        <div class="form-group">
                                            <label>Payment Date:</label>
                                            <input class="form-control dates" readonly id='paymentdate' name="paymentdate" placeholder="Payment Date" value="<?= $accountsdata->paymentdate ?>" type="text">
                                        </div>

                                     

                                        <?php if($accountsdata->approved==0):?>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="button" id='approve' name="addpayment" class="btn btn-primary">Approve Payment <i class="icon-add position-right"></i></button>
                                           
                                        </div>
                                                    <?php endif; ?>

                                    </fieldset>
                                </div>
                                <?php if($accountsdata->approved==1):?>
                                <button type='button' class="btn btn-success">This payment was approved by <b><?php echo $accountsdata->approvedby?></b> on <b><?php echo $accountsdata->dateapproved ?></b></button>
                                                    <?php endif;?>
                                <!--<div class='col-lg-12'>
                                <img src="uploads/5b8ac6da5ddd6.jpg" alt=""width="500" height="400">

                                </div>-->
                               
                            
                            </form>
                            </div>
                    </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   <?= FOOTER; ?>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
         <?php require("include/footer.php") ?>

        <script>
        $(document).ready(function () {
           
           
             $("#approve").click(function (e) { 
                var accountid="<?php echo $paymentid ?>";
                var telephonenumber="<?php echo $accountsdata->telephonenumber ?>";
                var emailaddress="<?php echo $accountsdata->emailaddress ?>";
                if (window.confirm("Are you sure you want to approve?")) {

                var postdata = { accountid: accountid,telephonenumber:telephonenumber,emailaddress:emailaddress }
                var ajaxurl = "forms/approvepayment.php";
                AjaxPostRequest(ajaxurl, postdata);

                window.location.reload();
                return false;

            }
            
        });
        });
        </script>
        

    </body>

</html>