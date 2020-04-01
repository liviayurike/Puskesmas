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
        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>
                    <center>Daftar Dokter
                        <a href="<?= base_url(); ?>dokter/tambah" class="btn btn-dark float-left"> Tambah Data </a></center>
                </h2>
                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: black;color:white">
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Alamat Dokter</th>
                            <th>No Telp Dokter</th>
                            <th>Spesialis</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dokter as $d) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_D 00' .  $d['id_dok']; ?></td>
                                <td><?php echo $d['nama_dok']; ?></td>
                                <td><?php echo $d['alamat_dok']; ?></td>
                                <td><?php echo $d['no_telp_dok']; ?></td>
                                <td><?php echo $d['spesialis_dok']; ?></td>
                                <td><a href="<?= base_url(); ?>dokter/hapus/<?= $d['id_dok']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            &nbsp; &nbsp;
            <a href="<?= base_url(); ?>home/home" class="btn btn-dark">Kembali</a>


</body>
</head>

</html>