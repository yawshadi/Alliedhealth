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
                                <form action="forms/addpayment.php" method="post">
                                <div class="col-lg-6">
                                    <fieldset>


                                        <div class="form-group">
                                            <label>Fullname:</label>
                                            <input class="form-control" required name='fullname' placeholder="Fullname" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Due (GHC):</label>
                                            <input class="form-control" required id='amountdue' name='amountdue' readonly value="200" type="text">
                                           
                                            <input class="form-control"  name='location'  value="account" type="hidden">
                                            <input class="form-control"  name='accounttype'  value="newpayment" type="hidden">



                                        </div>

                                        <div class="form-group">
                                            <label>Telephone Number:</label>
                                            <input class="form-control" required name="telephonenumber" placeholder="Telephone Number" value="" type="tel">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Email Address:</label>
                                            <input class="form-control" required name='emailaddress' placeholder="Email Address" value="" type="email">
                                            <input class="form-control"  name='uniqueuploadid'  id='uniqueuploadid'value="<?php echo time();?>" type="hidden">
                                        </div>


                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>

                                        
                                        <div class="form-group">
                                            <label>Profession :</label>
                                            <select required name="professionid" id='profession' class="form-control select" >
                                            <option value="">Please Select</option>
                                            <?php
                                            $professionlist = profession::listAll(); 
                                            foreach($professionlist as $profession):
                                            ?>
                                            <option value="<?=$profession->professionid ?>"><?= $profession->professionname ?></option>
                                            <?php endforeach;?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Paid:</label>
                                            <input class="form-control" required name="amountpaid" placeholder="Amount Paid" value="" type="text">
                                        </div>


                                        <div class="form-group">
                                            <label>Payment Date:</label>
                                            <input class="form-control dates" required id='paymentdate' name="paymentdate" placeholder="Payment Date" value="" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label>Upload Banker's Draft:</label>
                                            <input class="form-control dates"  id='imageupload'   type="file">
                                        </div>


                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" name="addpayment" class="btn btn-primary">Submit Payment <i class="icon-add position-right"></i></button>
                                           
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
        $(document).ready(function () {
           
            $('#imageupload').uploadifive({
            'buttonText': 'click here to upload',
            'auto': true,
            'method': 'post',
            'multi': true,
            'width': 460,
            'formData': {
                'uniqueuploadid': $("#uniqueuploadid").val()
            },
            'onUploadComplete': function(file, data) {
                console.log("filedata", data);
                console.log("file", file);
            },

            'uploadScript': urlroot + '/forms/fileupload.php',
        });
            /* $("#profession").change(function (e) { 
            var professionid=$(this).val();
             ajaxurl="forms/getamount.php";
             textboxid="amountdue";
             getdata={professionid:professionid};
            AjaxGetRequestWithTextbox(ajaxurl,getdata,textboxid);
            
        });*/
        });
        </script>
        

    </body>

</html>