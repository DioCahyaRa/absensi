                <?php echo $this->session->flashdata('msg-update');?>
                <?php
                    if(isset($_SESSION['msg-update'])){
                        unset($_SESSION['msg-update']);
                    }
                ?>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Profile User <span class="sparkline bar" data-type="bar"></span>

                        </h3>                        
                    </div>

                    <div class="row">
                        <div class="card col-md-10">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('Assets/Image/Icon/profile-user.png')?>" class="card-img" style="padding:50px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" style="padding:50px;">
                                    <?php foreach($user as $u):?>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['nama']?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">NIT</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['nit']?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Tanggal Lahir</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['tgl_lahir']?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Jabatan</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['jabatan']?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['email']?>
                                            </div>
                                        </div>

                                    <?php endforeach;?>
                                        <br>
                                    <button class="btn btn-success btn-oval" data-toggle="modal" data-target="#edit<?= $u['nit']?>"><i class="fa fa-pencil"></i> EDIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Modal Edit Profile -->
                <?php
                    foreach ($user as $u):
                ?>
                <div class="modal fade" id="edit<?= $u['nit'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Form Edit Profile</h3>
                            <p>sesuaikan data profile anda dengan tepat</p>

                            <form action="<?= base_url('User/Profile_c/edit_profile')?>" method="post">
                            <?php foreach($user as $u):?>
                                
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $u['nama']?>">
                                </div>

                                <div class="form-group">
                                    <label for="name">Nomor Induk Taruna</label>
                                    <input type="text" name="nit" class="form-control" value="<?= $u['nit']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $u['tgl_lahir']?>">
                                </div>

                                <div class="form-group">
                                    <label for="name">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="<?= $u['jabatan'];?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?= $u['email'];?>">
                                </div>

                            <?php endforeach;?>
                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil"></i>Edit Profile</button>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach;?>


                </article>