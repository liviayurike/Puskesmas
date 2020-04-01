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
                <a href="<?= base_url(); ?>poli/tambah" class="btn btn-dark"> Tambah Data </a>
                <a href="<?= base_url(); ?>poli/laporan_pdf" class="btn btn-dark">Cetak Data Poliklinik</a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Poliklinik</h2>
                <table class="table table-striped table-bordered" id="listPoli">
                    <thead>
                        <tr align="center" style="background-color: black;color:white">
                            <th>Kode Poli</th>
                            <th>Nama Poli</th>
                            <th>Nama Dokter</th>
                            <th>Jadwal</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($poli as $p) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_PO 00' .  $p['id_poli']; ?></td>
                                <td><?php echo $p['nama_poli']; ?></td>
                                <td><?php echo $p['nama_dok']; ?></td>
                                <td><?php echo $p['jadwal']; ?></td>
                                <td><a href="<?= base_url(); ?>poli/edit/<?= $p['id_poli']; ?>" class="badge badge-success float-center">Edit</a></td>
                                <td><a href="<?= base_url(); ?>poli/hapus/<?= $p['id_poli']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

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