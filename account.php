<?php
require("init.php");
new users(); 
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
                            <legend class="text-bold">Accounts </legend>

                            <!-- Bootstrap alert notification -->
                        
                            <!-- /Bootstrap alert notification -->


                            <div class="panel-body">
                                <form action="forms/addpayment.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>



                                        <div class="form-group">
                                            <label>Fullname:</label>
                                            <input class="form-control" name='fullname' placeholder="Fullname" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Due:</label>
                                            <input class="form-control" name='amountdue' placeholder="Amount Due" value="" type="text">


                                        </div>

                                     

                                        <div class="form-group">
                                            <label>Received By:</label>
                                            <input class="form-control" name='recievedby' placeholder="Received By" value="" type="text">
                                        </div>
                                    



                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Serial Number:</label>
                                            <input class="form-control" name="serialnumber" placeholder="Serial Number" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Paid:</label>
                                            <input class="form-control" name="amountpaid" placeholder="Amount Paid" value="" type="text">
                                        </div>


                                        <div class="form-group">
                                            <label>Payment Date:</label>
                                            <input class="form-control" name="paymentdate" placeholder="Payment Date" value="" type="text">
                                        </div>




                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="addpayment" class="btn btn-primary">Process Payment <i class="icon-add position-right"></i></button>
                                           
                                        </div>


                                    </fieldset>
                                </div>

                            </div>
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
        
        </script>
        

    </body>

</html>