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

                    <a href="<?= base_url('Admin/Data_users/laporan_pdf')?>"><button class="btn btn-danger btn-oval"><i class="fa fa-print"></i> PDF</button></a>
                    <div class="table-data-absen">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIT</th>
                                <th>Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($user as $data_u):
                            ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data_u['nama'];?></td>
                                <td><?= $data_u['nit'];?></td>
                                <td><?=  $data_u['tgl_lahir'];?></td>
                                <td><?= $data_u['jabatan'];?></td>
                                <td><?= $data_u['email'];?></td>
                                <td><?= $data_u['status'];?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>

                </article>