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
                                    <h4 class="page-title">list of Institutions</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
                        </div>
                      
                          

                       <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>List of Institutions</b></h4>
                                    <p class="text-muted font-13 m-b-30">

                                    </p>

                                    <table id="datatable" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Institution Name</th>
                                            <th>Address</th>
                                            <th>Location</th>
                                            <th>Date Registered</th>
                                            <th>Status</th>
                                            <th>view</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                    $institutionlist = institution::listAll();
                                    $count = 1;
                                    foreach ($institutionlist as $institutions):
                                    ?>
                                        <tr>
                                            <td><?= $count?></td>
                                            <td><?= $institutions->nameofinstitution; ?></td>
                                            <td><?= $institutions->address; ?></td>
                                            <td><?= $institutions->location; ?></td>
                                            <td><?= $institutions->dateregistered; ?></td>
                                            <td><?= ($institutions->status==1)?"<button type='button' name='creatprofession' class='btn btn-primary'>Accredited<i class='icon-add position-right'></i></button>
":"<button type='button' name='creatprofession' class='btn btn-danger'>Not Accredited<i class='icon-add position-right'></i></button>" ?></td>
                                           <td><a href='viewinstitution.php?institutionid=<?=$institutions->institutionid ?>' class='editinstitution' institutionid="<?=$institutions->institutionid ?>">View</a></td>
                                            <td><a  href='#' class='deleteinstitution' institutionid="<?=$institutions->institutionid ?>">Delete</a></td>

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
                   <?= FOOTER; ?>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
         <?php require("include/footer.php") ?>

        <script>
                    $("#datatable").DataTable();
                    $(".deleteinstitution").click(function (e) { 
                    
                    var institutionid=$(this).attr('institutionid');
                    if (window.confirm("Are you sure you want to delete?")) {
                    var postdata = { institutionid: institutionid }
                    var ajaxurl =  "forms/deleteinstitution.php";
                    AjaxPostRequest(ajaxurl, postdata);
                    window.location.reload();
                    return false;

                    }
                });
        </script>
        

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 18:30:04 GMT -->
</html>