<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cstyle.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <style>
        body {
            background-image: url(<?php echo base_url('images/4.jpg'); ?>);
            background-repeat: repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                &nbsp; &nbsp;
                <a href="<?= base_url(); ?>daftar/tambah" class="btn btn-dark"> Tambah Data </a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Data Daftar Pasien Puskesmas</h2>
                <table class="table table-striped table-bordered" id="listDaftar">
                    <thead>
                        <tr align="center" style="background-color: black;color:white">
                            <th>Kode Daftar</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th>Keluhan</th>
                            <th>Poliklinik</th>
                            <th>Aksi</th>
                            </td>
                    </thead>
                    <tbody>
                        <?php foreach ($daftar as $d) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_DA 00' .  $d['id_daftar']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['usia']; ?></td>
                                <td><?php echo $d['keluhan']; ?></td>
                                <td><?php echo $d['nama_poli']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>daftar/hapus/<?= $d['id_daftar']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                                    <a href="<?= base_url(); ?>daftar/laporan_pdf/<?= $d['id_daftar']; ?>" class="badge badge-danger float-center">Cetak</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            &nbsp; &nbsp;
            <a href="<?= base_url(); ?>home/index" class="btn btn-dark">Kembali</a>


</body>
</head>

</html>