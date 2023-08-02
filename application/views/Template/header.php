<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>MyAsset</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <!-- Icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/logo/logo1.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.css">
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="<?= base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="user_info">
                                <h6>Administrator</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Main Menu</h4>
                    <ul class="list-unstyled components">
                        <li class="active"><a href="/welcome"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        </li>
                        <li><a href="/dataassets"><i class="fa fa-archive orange_color"></i> <span>Data Aset</span></a></li>
                        <li>
                            <a href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-tasks purple_color"></i> <span>Data Peminjaman</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-folder purple_color2"></i> <span>Kategori</span></a></li>
                        <li><a href="#"><i class="fa fa-exchange blue1_color"></i> <span>Data Pengembalian</span></a></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-square-o red_color"></i> <span>Kuwalitas</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-map purple_color2"></i> <span>Data Lokasi Aset</span></a></li>
                        <li><a href="/pengguna"><i class="fa fa-users green_color"></i> <span>Data Pengguna</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <img class="img-responsive" src="<?= base_url() ?>assets/images/logo/logo1-putih.png" alt="#">
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?= base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Administrator</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                                <a class="dropdown-item" href="#">Help</a>
                                                <a class="dropdown-item" href="auth/logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard Content -->
                <div class="midde_cont">