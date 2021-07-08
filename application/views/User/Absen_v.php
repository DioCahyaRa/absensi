                <?php echo $this->session->flashdata('msg-update');?>
                <?php
                    if(isset($_SESSION['msg-update'])){
                        unset($_SESSION['msg-update']);
                    }
                ?>
                <?php echo $this->session->flashdata('msg-success');?>
                <?php
                    if(isset($_SESSION['msg-success'])){
                        unset($_SESSION['msg-success']);
                    }
                ?>
                
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Data Absensi & Create <span class="sparkline bar" data-type="bar"></span>
                        <button class="btn btn-primary btn-oval" data-toggle="modal" data-target="#exampleModalCenter"
                        <?php if($absen_today):?>
                                disabled
                            <?php endif;?>
                        ><i class="fa fa-pencil"></i> ABSEN</button>
                        </h3>                        
                    </div>


                <div class="table-data-absen">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>NIT</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Selesai Bekerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($absensi_u as $data_u):
                            ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data_u['nama'];?></td>
                                <td><?= $data_u['nit'];?></td>
                                <td><?=  $data_u['jam_masuk'];?></td>
                                <td><?= $data_u['jam_keluar'];?></td>
                                <td><?= $data_u['tanggal'];?></td>
                                <td><?= $data_u['keterangan'];?></td>
                                <td><?= $data_u['status'];?></td>
                                <td>
                                <button class="btn btn-danger btn-oval" data-toggle="modal" data-target="#Modal-selesai<?= $data_u['id'];?>" <?php if($data_u['status'] == 'success'):?>disabled<?php endif;?>><i class="fa fa-check-circle-o"></i> Selesai</button>
                                
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Form Konfirmasi Absensi</h3>
                            <p>Harap cek data terdahulu sebelum create absen!</p>

                            <form action="<?= base_url('User/Absen_c/Create_absen')?>" method="post">
                            <?php foreach($user as $u):?>

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $u['nama']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">NIT</label>
                                    <input type="text" name="nit" class="form-control" value="<?= $u['nit']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Jam Masuk</label>
                                    <input type="text" name="jam_masuk" class="form-control .btn::not" value="<?= date("H:i:s",now('Asia/Jakarta'))?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control .btn::not" value="<?= date("Y-m-d",now('Asia/Jakarta'))?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control .btn::not" value="<?= $keterangan?>" readonly>
                                </div>

                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil" <?php if($u['status'] == 'success'):?>disabled<?php endif;?> > </i>Create Absen</button>
                            <?php endforeach;?>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Modal Button Selesai -->
                <?php
                    foreach ($absensi_u as $data_u):
                ?>
                <div class="modal fade" id="Modal-selesai<?= $data_u['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Form Konfirmasi Selesai Bekerja</h3>
                            <p>Harap cek data terdahulu sebelum Tekan Tombol Selesai Bekerja!</p>

                            <form action="<?= base_url('User/Absen_c/Selesai_Absen')?>" method="post">
                                
                                <div class="form-group">
                                    <label for="name">ID Absen</label>
                                    <input type="text" name="id" class="form-control" value="<?= $data_u['id']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $data_u['nama']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">NIT</label>
                                    <input type="text" name="nit" class="form-control" value="<?= $data_u['nit']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Jam Masuk</label>
                                    <input type="text" name="jam_masuk" class="form-control" value="<?= $data_u['jam_masuk'];?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Jam Keluar</label>
                                    <input type="text" name="jam_keluar" class="form-control" value="<?= date("H:i:s",now('Asia/Jakarta'))?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" value="<?= date("Y-m-d",now('Asia/Jakarta'))?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" value="<?= $data_u['keterangan']?>" readonly>
                                </div>

                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil"></i>Selesai Bekerja</button>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach;?>

                </article>