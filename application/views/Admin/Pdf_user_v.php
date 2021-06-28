<!DOCTYPE html>
<html>
<head>
  <title>Export to Pdf</title>
  <!-- <link rel="stylesheet" href="<?= base_url('Assets/css/pdf_x1.css')?>"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <!-- In production server. If you choose this, then comment the local server and uncomment this one-->
  <!-- <img src="<?php // echo $_SERVER['DOCUMENT_ROOT']."/media/dist/img/no-signal.png"; ?>" alt=""> -->
  <!-- In your local server -->
  
  <section>
    <h1>Data Taruna yang terdaftar di system Absensi</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIT</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($pdf as $data):
            ?>
            <tr>
                <th scope="row"><?= $no++?></th>
                <td><?= $data['nama']?></td>
                <td><?= $data['nit']?></td>
                <td><?= $data['tgl_lahir']?></td>
                <td><?= $data['jabatan']?></td>
                <td><?= $data['email']?></td>
                <td><?= $data['status']?></td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>

  </section>
  
</body>
</html>