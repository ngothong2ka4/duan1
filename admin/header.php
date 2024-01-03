<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/nazox/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 15:31:46 GMT -->

<head>

    <meta charset="utf-8" />
    <title>ADMIN BÁN SÁCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../upload/logo (2).png">



    <!-- jquery.vectormap css -->
    <!-- <link href="../admin/themesdesign.in/nazox/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> -->

    <!-- DataTables -->
    <!-- <link href="../admin/themesdesign.in/nazox/layouts/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Responsive datatable examples -->
    <!-- <link href="../admin/themesdesign.in/nazox/layouts/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Bootstrap Css -->
    <link href="../admin/themesdesign.in/nazox/layouts/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../admin/themesdesign.in/nazox/layouts/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../admin/themesdesign.in/nazox/layouts/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .main-content{ 
            background-color: white;
            height: auto;
            width: 1270px;
            margin-top: 85px;
            margin-bottom: 65px;
            margin-left: 250px;
            padding-left: 15px;
            padding-right: 30px;
            padding-bottom: 30px;
            border-radius: 35px;
        }
        h1{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
    </style>
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-light">
                            <img src="../admin/themesdesign.in/nazox/layouts/assets/images/logo (2).png" alt="" height="60px" style="margin-left:60px;">
                        </a>
                    </div>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="index.php?act=canhan"><span class="d-none d-xl-inline-block ms-1"><?php echo (isset($_SESSION['admin']) && ($_SESSION['admin']))? $_SESSION['admin']['username'] : "";?></span></a>
                        </button>

                    </div>


                </div>
            </div>
        </header>

        
