<?php
require("init.php");
new users(); 
$institutionid=$_GET['institutionid'];
$institutiondata= institution::getinstitutionbyid($institutionid);

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
                                    <h4 class="page-title">Accredit Institution</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>

                        <div class="panel panel-flat">
                        <div class="panel-heading">
                            <legend class="text-bold">Institution</legend>

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
                            <div class="panel-body">
                                <form action="forms/saveinstitution.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>

                                    <input class="form-control" name='institutionid' placeholder="Institution name" value="<?= $institutiondata->institutionid ?>" type="hidden">
                                    <input class="form-control" name='status' placeholder="Institution name" value="1" type="hidden">


                                        <div class="form-group">
                                            <label>Institution name:</label>
                                            <input class="form-control" name='institutionname' placeholder="Institution name" value="<?= $institutiondata->nameofinstitution ?>" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Type of Institution:</label>
                                            <input class="form-control" name='schooltype' placeholder="Type of Institution" value="<?= $institutiondata->schooltype?>" type="text">


                                        </div>

                                     

                                        <div class="form-group">
                                            <label>Adresse:</label>
                                            <input class="form-control" name='address' placeholder="Adresse" value="<?= $institutiondata->address?>" type="text">
                                        </div>
                                    



                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Location:</label>
                                            <input class="form-control" name="location" placeholder="Location" value="<?= $institutiondata->location?>" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Date Registered:</label>
                                            <input class="form-control dates" name="dateregistered" placeholder="Date Established" value="<?= $institutiondata->dateregistered?>" type="text">
                                        </div>


                                        <div class="form-group">
                                            <label>Homepage:</label>
                                            <input class="form-control" name="homepage" placeholder="Homepage" value="<?= $institutiondata->homepage?>" type="text">
                                        </div>




                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="createinstitution" class="btn btn-warning">Accredit <i class="icon-add position-right"></i></button>
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