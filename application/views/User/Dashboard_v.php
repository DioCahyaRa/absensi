        <?php echo $this->session->flashdata('msg');?>
     	<?php
            if(isset($_SESSION['msg'])){
                unset($_SESSION['msg']);
            }
        ?>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Dashboard Absensi <span class="sparkline bar" data-type="bar"></span>
                        <p class="title-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quas incidunt vel consequatur, facere sit neque, quam odio tenetur fugiat ipsa, nulla dolores amet mollitia quis alias modi. Doloribus, praesentium! </p>
                        </h3>                        
                    </div>

                    <div class="row">
                    <?php if($_SESSION['role'] == 'admin'):?>
                        <div class="col-xl-3">
                            <div class="card card-primary text-center">
                            <div class="card-header">
                                    <div class="header-block">
                                        <p class="title text-white"> ADMIN AKTIF </p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h1><?= $data_admin;?></h1>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        
                        <div class="col-xl-3">
                            <div class="card card-info text-center">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title text-white"> DATA USER </p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h1><?= $data_user;?></h1>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        
                        <!-- /.col-xl-4 -->
                        <div class="col-xl-3">
                            <div class="card card-success text-center">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title text-white" > DATA JABATAN </p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h1><?= $data_jabatan; ?></h1>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                       
                        <div class="col-xl-3">
                            <div class="card card-danger text-center ">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title text-white"> DATA ABSENSI</p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h1><?= $data_absensi;?></h1>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        <?php endif;?>

                        <?php if($_SESSION['role'] == 'user'):?> 
                        <div class="col-xl-3">
                            <div class="card card-danger text-center ">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title text-white"> DATA ABSENSI</p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h1><?= $data_absensi_user;?></h1>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        <?php endif;?>
                    </div>
                    
                    <?php if($_SESSION['role'] == 'user'):?>
                        <h3 style="color:blue; margin-top:50px;font-style:italic;"><i class="fa fa-pencil-square-o"></i>  Langkah - langkah Abensi masuk Kerja</h3>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-primary text-center">
                            <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> ADMIN AKTIF </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                    <h3>1</h3>
                                    <h4>Klik Menu Absen</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        
                        <div class="col-xl-3">
                            <div class="card card-info text-center">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> DATA USER </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>2</h3>
                                    <h4>Klik Button Absen</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        
                        <!-- /.col-xl-4 -->
                        <div class="col-xl-3">
                            <div class="card card-success text-center">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white" > DATA JABATAN </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>3</h3>
                                    <h4>Konfirmasi Data User</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                       
                        <div class="col-xl-3">
                            <div class="card card-danger text-center ">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> DATA ABSENSI</p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>4</h3>
                                    <h4>Klik Create Absen</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        <?php endif;?>
                    </div>

                    <?php if($_SESSION['role'] == 'user'):?>
                        <h3 style="color:blue; margin-top:50px;font-style:italic;"><i class="fa fa-check-square-o"></i> Langkah - langkah Selesai Kerja</h3>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-primary text-center">
                            <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> ADMIN AKTIF </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                    <h3>1</h3>
                                    <h4>Klik Menu Absen</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        
                        <div class="col-xl-3">
                            <div class="card card-info text-center">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> DATA USER </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>2</h3>
                                    <h4>Klik Button Selesai</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        
                        <!-- /.col-xl-4 -->
                        <div class="col-xl-3">
                            <div class="card card-success text-center">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white" > DATA JABATAN </p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>3</h3>
                                    <h4>Cek Konfirmasi Data</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                       
                        <div class="col-xl-3">
                            <div class="card card-danger text-center ">
                                <div class="card-header">
                                    <!-- <div class="header-block">
                                        <p class="title text-white"> DATA ABSENSI</p>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                <h3>4</h3>
                                    <h4>Klik Selesai</h4>
                                </div>
                                <!-- <div class="card-footer"> Card Footer </div> -->
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        <?php endif;?>
                    </div>


                </article>

               