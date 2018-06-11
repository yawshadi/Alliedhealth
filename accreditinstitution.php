<?php
require("init.php");
new users(); 
require("include/header.php")

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
                                    <h4 class="page-title">Accredit Institution</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
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

<!-- Mirrored from coderthemes.com/zircos/material-design/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 18:30:04 GMT -->
</html>