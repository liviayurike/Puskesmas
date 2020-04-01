<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Puskesmas</title>

    <style>
        body {
            background-image: url(<?php echo base_url('images/home.jpg'); ?>);
            background-repeat: repeat;
            background-size: cover;
        }
    </style>

</head>

<body>
    <br> <br> <br>

    <center>
        <h2 style="color:white"> Selamat datang di Puskesmas Sehat</h2>
    </center>
    <br>
    <center>
        <div class="row">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?= base_url(); ?>dokter/index" class="card text-white bg-secondary mb-3" style="max-width: 15rem;" />
            <div class="card-header">Daftar Dokter</div>
            <div class="card-body">
                <p class="card-text">Data Dokter yang bertugas di Puskesmas sesuai Poli</p>
            </div>

            <a href="<?= base_url(); ?>periksa/index" class="card text-white bg-success mb-3" style="max-width: 15rem;" />
            <div class="card-header">Daftar Pasien</div>
            <div class="card-body">
                <p class="card-text">Daftar pasien yang berobat ke Rumash Sakit.</p>
            </div>

            <a href="<?= base_url(); ?>poli/index" class="card text-white bg-danger mb-3" style="max-width: 15rem;" />
            <div class="card-header">Daftar Poli</div>
            <div class="card-body">
                <p class="card-text">Daftar Poli yang Tersedia.</p>
            </div>

        </div>
        </br>
        <a href="<?= base_url(); ?>auth/logout" class="btn btn-success">Logout</a>

    </center>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>