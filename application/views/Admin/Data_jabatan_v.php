                <?php echo $this->session->flashdata('msg');?>
                <?php
                    if(isset($_SESSION['msg'])){
                        unset($_SESSION['msg']);
                    }
                ?>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Data Users <span class="sparkline bar" data-type="bar"></span>

                        </h3>                        
                    </div>
                    <button class="btn btn-success btn-oval" data-toggle="modal" data-target="#tambah_jabatan"><i class="fa fa-pencil"></i>Tambah Jabatan</button>
                    <div class="table-data-absen">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                $no=1; 
                                foreach($jabatan as $u):
                            ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $u['nama_jabatan'];?></td>
                                <td>
                                    <button class="btn btn-info btn-oval" data-toggle="modal" data-target="#edit<?= $u['id'];?>"><i class="fa fa-pencil"></i> EDIT</button>
                                    <button class="btn btn-danger btn-oval" data-toggle="modal" data-target="#delete<?= $u['id'];?>"><i class="fa fa-pencil"></i> DELETE</button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>

                    <!-- Modal Edit Jabatan -->
                <?php
                    $no = 1;
                    foreach ($jabatan as $u): $no++;
                ?>
                <div class="modal fade" id="edit<?= $u['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Form Edit Jabatan</h3>
                            <p>sesuaikan nama jabatan dengan tepat</p>

                            <form action="<?= base_url('Admin/Data_jabatan/update_jabatan')?>" method="post">
                                
                                <div class="form-group">
                                    <label for="name">ID</label>
                                    <input type="text" name="id" class="form-control" value="<?= $u['id']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama Jabatan</label>
                                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $u['nama_jabatan']?>">
                                </div>

                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil"></i>Edit Jabatan</button>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach;?>

                <!-- Modal Tambah Jabatan -->
                <div class="modal fade" id="tambah_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Form Tambah Jabatan</h3>
                            <p>Pastikan nama jabatan dengan tepat</p>

                            <form action="<?= base_url('Admin/Data_jabatan/tambah_jabatan')?>" method="post">
                                <div class="form-group">
                                    <label for="name">Nama Jabatan</label>
                                    <input type="text" name="nama_jabatan" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil"></i>Tambah Jabatan</button>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Modal Delete -->
                <?php
                    $no = 1;
                    foreach ($jabatan as $u): $no++;
                ?>
                <div class="modal fade" id="delete<?= $u['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                    <div class="modal-content rounded-0">
                    <div class="modal-body py-0">

                        <div class="d-flex main-content">
                        <div class="content-text p-4">
                            <h3>Apakah anda yakin menghapus data ini ?</h3>
                            <p>Pastikan kembali nama jabatan yang ingin di hapus!</p>

                            <form action="<?= base_url('Admin/Data_jabatan/delete_jabatan')?>" method="post">
                                
                                <div class="form-group">
                                    <label for="name">ID</label>
                                    <input type="text" name="id" class="form-control" value="<?= $u['id']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama Jabatan</label>
                                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $u['nama_jabatan']?>" readonly>
                                </div>

                                <button type="submit" class="btn btn-info btn-oval"><i class="fa fa-pencil"></i>Delete Jabatan</button>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach;?>

                </article>