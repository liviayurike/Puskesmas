<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/5.jpg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-login">

    <?=
        form_open('auth/prosesLogin');
    ?>

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>style.css" />
    &nbsp; &nbsp;
    <center>
        &nbsp;
        <h2 style="color:white"> LOGIN PEGAWAI PUSKESMAS</h2>
    </center>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6" style="margin:0 auto;background-color: white;border-radius: 1px;color:black">
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <h4 style="text-align: center;color:black"><b>LOGIN</b></h4><br>
                    <?php
                    if (isset($pesan)) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $pesan; ?>
                        </div>
                    <?php
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username" style="color:black"><b>Username</b></label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group" style="color:black">
                            <label for="password" style="color:black"><b>Password</b></label>
                            <input type="password" class="form-control" id="password" name="password">
                            <input type="checkbox" onclick="passwordShowUnshow()"> Show/Unshow Password
                        </div>
                        <h6 style="color:black">Dont have an account? <a href="<?= base_url(); ?>auth/register" style="color:black">Register Here</a> </h6>
                        <br>
                        <a href="<?= base_url(); ?>home/index" class="btn btn-success">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-success float-right">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?=
        form_close();
    ?>

</body>