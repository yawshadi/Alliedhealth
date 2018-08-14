<?php
require "init.php";
new users();
require "include/header.php";

?>

            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <?php require "include/left_sidebar.php"?>
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
                                    <h4 class="page-title">Add Profession</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>

                        <div class="panel panel-flat">
                        <div class="panel-heading">
                            <legend class="text-bold">Profession  </legend>

                            <!-- Bootstrap alert notification -->

                            <!-- /Bootstrap alert notification -->


                            <div class="panel-body">
                                <form action="forms/saveprofession.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Profession name:</label>
                                            <input class="form-control" name='professionname' placeholder="Profession Name" value="" type="text">
                                        </div>
                                        <span style='color:red'><?= Printisset::printing();?></span>

                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Profession Code:</label>
                                            <input class="form-control" name="professioncode" placeholder="Profession Code" value="" type="text">
                                        </div>



                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="creatprofession" class="btn btn-primary">Save Data <i class="icon-add position-right"></i></button>
                                        </div>


                                    </fieldset>
                                </div>

                            </div>
                            </form>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>List of Current Professions</b></h4>
                                    <p class="text-muted font-13 m-b-30">

                                    </p>

                                    <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Profession Name</th>
                                            <th>Profession Code</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                    $professionlist = profession::listAll();
                                    $count = 1;
                                    foreach ($professionlist as $professions):
                                    ?>
                                        <tr>
                                            <td><?= $count?></td>
                                            <td><?= $professions->professionname; ?></td>
                                            <td><?= $professions->professioncode; ?></td>
                                           <!-- <td><a href='#' class='editprofession' pid="<?=$professions->professionid ?>">Edit</a></td>-->
                                            <td><a  href='#' class='deleteprofession' pid="<?=$professions->professionid ?>">Delete</a></td>

                                        </tr>
                                        <?php
                                    $count++;
                                    endforeach;
                                    ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   <?=FOOTER;?>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
         <?php require "include/footer.php"?>

       <script>
            $(document).ready(function () {

            TableManageButtons.init();

                $(".deleteprofession").click(function (e) { 
                    
                    var professionid=$(this).attr('pid');
                    if (window.confirm("Are you sure you want to delete?")) {
                    var postdata = { professionid: professionid }
                    var ajaxurl =  "forms/deleteprofession.php";
                    AjaxPostRequest(ajaxurl, postdata);
                    window.location.reload();
                    return false;

                    }
                });


                })
        </script>


    </body>

</html>