<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?= $title?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?= base_url('Assets/modular-admin/dist2/')?>css/vendor.css">
        <link rel="stylesheet" href="<?= base_url('Assets/modular-admin/dist2/')?>css/app.css">
        <!-- Theme initialization -->
        <!-- <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script> -->

        <!-- Sweetalert CDN-->
	    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
	    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Datatables -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.0/fh-3.1.9/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.css"/>
        <!-- Tutup Datatables -->
        
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <!-- <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')">
                                    </div> -->
                                    <span class="name"><?= $this->session->userdata('nama')?> </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="<?= base_url('User/Profile_c');?>">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('Login_c/Logout');?>">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>

                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                </div> ABSENSI
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li <?php if($title == 'Dashboard'):?>class="active"<?php endif;?>>
                                    <a href="<?= base_url('User/Dashboard_c');?>">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li <?php if($title == 'Absensi'):?>class="active"<?php endif;?> 
                                    <?php if($this->session->userdata('role') != 'user'):?>
                                        hidden
                                    <?php endif;?>
                                    >
                                    <a href="<?= base_url('User/Absen_c');?>">
                                        <i class="fa fa-pencil-square-o"></i> Absen </a>
                                </li>

                                <li <?php if($title == 'Data Absensi'):?>class="active"<?php endif;?> 
                                    <?php if($this->session->userdata('role') != 'admin'):?>
                                        hidden
                                    <?php endif;?>
                                    >
                                    <a href="<?= base_url('Admin/Data_absensi');?>">
                                        <i class="fa fa-file-text-o"></i> Data Absensi </a>
                                </li>

                                <li <?php if($title == 'Data Users'):?>class="active"<?php endif;?> 
                                    <?php if($this->session->userdata('role') != 'admin'):?>
                                        hidden
                                    <?php endif;?>
                                    >
                                    <a href="<?= base_url('Admin/Data_users');?>">
                                        <i class="fa fa-group"></i> Data Users </a>
                                </li>

                                <li <?php if($title == 'Data Jabatan'):?>class="active"<?php endif;?> 
                                    <?php if($this->session->userdata('role') != 'admin'):?>
                                        hidden
                                    <?php endif;?>
                                    >
                                    <a href="<?= base_url('Admin/Data_jabatan');?>">
                                        <i class="fa fa-briefcase"></i> Data Jabatan </a>
                                </li>

                                <li <?php if($title == 'Profile'):?>class="active"<?php endif;?>>
                                    <a href="<?= base_url('User/Profile_c');?>">
                                        <i class="fa fa-user"></i> Profil </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Login_c/Logout');?>">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </li>
                                <!-- <li class="active open">
                                    <a href="">
                                        <i class="fa fa-th-large"></i> Items Manager <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="items-list.html"> Items List </a>
                                        </li>
                                        <li class="active">
                                            <a href="item-editor.html"> Item Editor </a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">

                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                