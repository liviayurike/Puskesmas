<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/6.jpeg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-login">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Dokter
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php endif ?>

                        <form action="" method="post">
                            <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            <div class="form-group">
                                <label for="nama_dok">Nama Dokter</label>
                                <input type="text" class="form-control" id="nama_dok" name="nama_dok">
                            </div>
                            <div class="form-group">
                                <label for="alamat_dok">Alamat Dokter</label>
                                <input type="text" class="form-control" id="alamat_dok" name="alamat_dok">
                            </div>
                            <div class="form-group">
                                <label for="no_telp_dok">No Telp Dokter</label>
                                <input type="text" class="form-control" id="no_telp_dok" name="no_telp_dok">
                            </div>
                            <div class="form-group">
                                <label for="spesialis_dok">Spesialis Dokter</label>
                                <input type="text" class="form-control" id="spesialis_dok" name="spesialis_dok">
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark float-right">Submit</button>
                        </form>
                        <a href="<?= base_url(); ?>dokter" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
                &nbsp;
            </div>
        </div>
    </div>
    </div>
</body>