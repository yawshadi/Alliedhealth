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
                                    <h4 class="page-title">Configurations</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>

                        <div class="panel panel-flat">
                        <div class="panel-heading">
                            <legend class="text-bold">Bills configuration</legend>

                            <!-- Bootstrap alert notification -->

                            <!-- /Bootstrap alert notification -->


                            <div class="panel-body">
                                <form action="forms/addbill.php" method="post">
                                <div class="col-lg-4">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Profession :</label>
                                            <select required name="professionid" class="form-control select" >
                                            <option value="">Please Select</option>
                                            <?php
                                            $professionlist = profession::listAll(); 
                                            foreach($professionlist as $profession):
                                            ?>
                                            <option value="<?=$profession->professionid ?>"><?= $profession->professionname ?></option>
                                            <?php endforeach;?>
                                            </select>
                                        </div>
                                        <span style='color:red'><?= Printisset::printing();?></span>

                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Amount Due:</label>
                                            <input class="form-control" name="amountdue" placeholder="Amount Due" value="" type="text">
                                        </div>



                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Effective Date:</label>
                                            <input class="form-control dates" id='billdate' name="billdate" placeholder="Date" value="" type="text">
                                        </div>



                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="createbill" class="btn btn-primary">Save Data <i class="icon-add position-right"></i></button>
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
                                    <h4 class="m-t-0 header-title"><b>Billing List</b></h4>
                                    <p class="text-muted font-13 m-b-30">

                                    </p>

                                    <table id="datatable" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Profession Name</th>
                                            <th>Profession Code</th>
                                            <th>Amount Due</th>
                                            <th>Effective Date</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                    $professionlist = billing::billinglist();
                                    $count = 1;
                                    foreach ($professionlist as $professions):
                                    ?>
                                        <tr>
                                            <td><?= $count?></td>
                                            <td><?= $professions->professionname; ?></td>
                                            <td><?= $professions->professioncode; ?></td>
                                            <td><?= $professions->amount; ?></td>
                                            <td><?= $professions->billdate; ?></td>
                                           <!-- <td><a href='#' class='editprofession' pid="<?=$professions->professionid ?>">Edit</a></td>-->
                                            <td><a  href='#' class='deletebill' billid="<?=$professions->billid ?>">Delete</a></td>

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
            $("#datatable").DataTable();

                $(".deletebill").click(function (e) { 
                    
                    var billid=$(this).attr('billid');
                    if (window.confirm("Are you sure you want to delete?")) {
                    var postdata = { billid: billid }
                    var ajaxurl =  "forms/deletebill.php";
                    AjaxPostRequest(ajaxurl, postdata);
                    window.location.reload();
                    return false;

                    }
                });


                })
        </script>


    </body>

</html>