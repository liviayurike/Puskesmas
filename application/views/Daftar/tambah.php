<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/5.jpg'); ?>);
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
                        Form Tambah Data Pasien
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php endif ?>

                        <form action="" method="post">
                            <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="text" class="form-control" id="usia" name="usia">
                                </div>
                                <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <input type="text" class="form-control" id="keluhan" name="keluhan">
                                </div>

                                <div class="form-group">
                                    <label for="nama_poli">Poliklinik</label>
                                    <select class="form-control" name="id_poli" id="id_poli">
                                        <option selected="selected">Pilih Poliklinik</option>
                                        <?php foreach ($poli as $p) : ?>
                                            <option value="<?= $p['id_poli'] ?>"><?= $p['nama_poli'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success float-right"> Submit </button>
                            </form>
                            <a href="<?= base_url(); ?>home" class="btn btn-success">Kembali</a>
                    </div>
                </div>
                &nbsp;
            </div>
        </div>
    </div>
</body>