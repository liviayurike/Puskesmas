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
                <h2>Daftar Pasien</h2>
                <table class="table table-striped table-bordered" id="listPeriksa">
                    <thead>
                        <tr align="center" style="background-color: black;color:white">
                            <th>ID Periksa</th>
                            <th>Nama Dokter</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan Pasien</th>
                            <th>Tanggal Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($periksa as $p) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_P 00' . $p['id_periksa']; ?></td>
                                <td><?php echo $p['nama_dok']; ?> - <?php echo $p['spesialis_dok']; ?></td>
                                <td><?php echo $p['nama']; ?></td>
                                <td><?php echo $p['keluhan']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($p['tglperiksa'])) ?></td>
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