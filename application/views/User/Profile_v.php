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

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Tanggal Masuk</h6>
                                            </div>
                                            <div class="col-sm-6 text-secondary">
                                                : <?= $u['tgl_masuk']?>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                        <br>
                                    <button class="btn btn-success btn-oval"><i class="fa fa-pencil"></i> EDIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </article>