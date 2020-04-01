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
                        Form Edit Data Pasien
                    </div>
                    <div class="card-body">
                        <!-- untuk menampilkan pesan error -->
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_daftar" value="<?= $daftar['id_daftar']; ?>">
                            <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $daftar['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $daftar['alamat']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="text" class="form-control" id="usia" name="usia" value="<?= $daftar['usia']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan</label>
                                <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?= $daftar['keluhan']; ?>">
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

                            <button type="submit" name="edit" class="btn btn-dark float-right"> Edit </button>
                        </form>
                        <a href="<?= base_url(); ?>daftar" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>