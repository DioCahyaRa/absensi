                <?php echo $this->session->flashdata('msg');?>
                <?php
                    if(isset($_SESSION['msg'])){
                        unset($_SESSION['msg']);
                    }
                ?>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Data Absensi <span class="sparkline bar" data-type="bar"></span>

                        </h3>                        
                    </div>

                    <button class="btn btn-danger btn-oval" data-toggle="modal" data-target="#pdf"><i class="fa fa-print"></i> PDF</button>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($absensi as $data_u):
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
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>

                    <!-- Modal Pdf -->
                    <div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
                        <div class="modal-content rounded-0">
                        <div class="modal-body py-0">

                            <div class="d-flex main-content">
                            <div class="content-text p-4">
                                <h3>Form Konfirmasi Absensi</h3>
                                <p>Harap cek data terdahulu sebelum create absen!</p>

                                <form action="<?= base_url('Admin/Data_absensi/laporan_pdf')?>" method="post">
                                    <div class="form-group">
                                        <label for="name">Per Tanggal :</label>
                                        <input type="date" name="per_tanggal" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Sampai Tanggal :</label>
                                        <input type="date" name="sampai_tanggal" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-oval"><i class="fa fa-print"> </i>To PDF</button>
                                </form>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    


                </article>