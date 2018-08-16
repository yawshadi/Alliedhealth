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
                                    <h4 class="page-title">Accounts Renewals</h4>
                                    
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
                                <div class="form-group">
                                            <label>Search Name:</label>
                                            <input class="form-control" name='' id='search' placeholder="seach applicant name" value="" type="text">
                                        </div>
                                <div class="col-lg-6">
                                    <fieldset>


                                        <div class="form-group">
                                            <label>Fullname:</label>
                                            <input class="form-control" required id="fullname" name='fullname' placeholder="Fullname" value="" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Profession :</label>
                                            <select required name="professionid" id="profession" class="form-control select" >
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
                                            <label>Serial Number:</label>
                                            <input class="form-control" required name="serialnumber" placeholder="Serial Number" value="" type="text">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Received By:</label>
                                            <input class="form-control" required name='recievedby' placeholder="Received By" value="" type="text">
                                        </div>
                                        <input class="form-control"  name='location'  value="renewal" type="hidden">
                                        <input class="form-control"  name='accounttype'  value="renewal" type="hidden">


                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                    <div class="form-group">
                                            <label>Applicnat ID:</label>
                                            <input class="form-control" required name='applicantid' readonly id='applicantid' placeholder="Applicant id" value="" type="text">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Amount Due:</label>
                                            <input class="form-control" required readonly id='amountdue' name='amountdue' placeholder="Amount Due" value="" type="text">


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
        $(document).ready(function () {
          

             $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url:"forms/searchuser.php",
                    type: 'GET',
                    dataType: "json",
                    data: {
                        term: request.term,
                        request: 'search'
                    },
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.showdata,
                                value: item.id,
                                showdata:item.name
                            }
                        }));
                    }
                });
            },
            select: function(event, ui) {
                $(this).val(ui.item.showdata); // display the selected text
                var userid = ui.item.value; // selected value
                console.log(userid);
                // AJAX
                $.ajax({
                    url: "forms/searchuser.php",
                    type: 'GET',
                    data: { term: userid, request: 'populate' },
                    dataType: 'json',
                    success: function(response) {

                        var len = response.length;
                        if (len > 0) {
                            var id = response[0].id;
                            var fullname = response[0].name;
                            var applicantid = response[0].applicantid;
                            
                            $("#fullname").val(fullname);
                            $("#applicantid").val(applicantid);
                            console.log(response)

                        }

                    }
                });

                return false;
            },
            minLength: 2
        })

        $("#profession").change(function (e) { 
            var professionid=$(this).val();
             ajaxurl="forms/getamount.php";
             textboxid="amountdue";
             getdata={professionid:professionid};
            AjaxGetRequestWithTextbox(ajaxurl,getdata,textboxid);
            
        });
        });
        </script>
        

    </body>

</html>