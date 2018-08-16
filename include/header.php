
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 May 2018 18:29:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title><?php echo SITENAME; ?></title>

        <!-- date range picker -->
        <link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

 <!-- DataTables -->
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>

      <body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
          <div class="spinner-wrapper">
            <div class="rotator">
              <div class="inner-spin"></div>
              <div class="inner-spin"></div>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.php" class="logo"><span><?= SITENAME ?></span><i class="mdi mdi-cube"></i></a>
            <!-- Image logo -->
            <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                    <!--<img src="assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                    <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
            <!--</a>-->
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                   
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                   

                    <li class="dropdown user-box">
                        <a href="#" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5>Hi, John</h5>
                            </li>
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                            <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>