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
                <!-- https://getbootstrap.com/docs/4.4/components/card/ -->
                <div class="card">
                    <div class="card-header">
                        Form Edit Data Poliklinik
                    </div>
                    <div class="card-body">
                        <!-- untuk menampilkan pesan error -->
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_poli" value="<?= $poli['id_poli']; ?>">
                            <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                            <div class="form-group">
                                <label for="nama_poli">Nama Poliklinik</label>
                                <input type="text" class="form-control" id="nama_poli" name="nama_poli" value="<?= $poli['nama_poli']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_dok">Nama Dokter</label>
                                <input type="text" class="form-control" id="nama_dok" name="nama_dok" value="<?= $poli['nama_dok']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jadwal">Jadwal</label>
                                <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?= $poli['jadwal']; ?>">
                            </div>

                            <button type="submit" name="edit" class="btn btn-dark float-right"> Edit </button>
                        </form>
                        <a href="<?= base_url(); ?>poli" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>