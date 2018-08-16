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
                                    <h4 class="page-title">Add Institution</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>

                        <div class="panel panel-flat">
                        <div class="panel-heading">
                            <legend class="text-bold">Institution</legend>

                            <!-- Bootstrap alert notification -->
                        
                            <!-- /Bootstrap alert notification -->


                            <div class="panel-body">
                                <form action="forms/saveinstitution.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>



                                        <div class="form-group">
                                            <label>Institution name:</label>
                                            <input class="form-control" name='institutionname' placeholder="Institution name" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Type of Institution:</label>
                                            <select name="schooltype" class="form-control select" >
                                                <option>Please select</option>
                                                <option>Schooltype</option>
                                            </select>

                                        </div>

                                     

                                        <div class="form-group">
                                            <label>Adresse:</label>
                                            <input class="form-control" name='address' placeholder="Adresse" value="" type="text">
                                        </div>
                                    



                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Location:</label>
                                            <input class="form-control" name="location" placeholder="Location" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Date Registered:</label>
                                            <input class="form-control dates" name="dateregistered" placeholder="Date Established" value="" type="text">
                                        </div>


                                        <div class="form-group">
                                            <label>Homepage:</label>
                                            <input class="form-control" name="homepage" placeholder="Homepage" value="" type="text">
                                        </div>




                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="createinstitution" class="btn btn-primary">Save Data <i class="icon-add position-right"></i></button>
                                            <a href="institutionlist.php"><button type="button" class="btn-secondary btn">Back to list</button></a>
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