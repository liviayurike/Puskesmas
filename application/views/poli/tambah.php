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
                        Form Tambah Data Poliklinik
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
                                <label for="nama_poli">Nama Poliklinik</label>
                                <input type="text" class="form-control" id="nama_poli" name="nama_poli">
                            </div>

                            <div class="form-group">
                                <label for="nama_dok">Nama Dokter</label>
                                <select class="form-control" name="nama_dok" id="nama_dok">
                                    <option selected="selected">Pilih Dokter</option>
                                    <?php foreach ($dokter as $dok) : ?>
                                        <option value="<?= $dok['nama_dok'] ?>"><?= $dok['nama_dok'] ?> - <?= $dok['spesialis_dok'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jadwal">Jadwal</label>
                                <input type="text" class="form-control" id="jadwal" name="jadwal">
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark float-right">Submit</button>
                        </form>
                        <a href="<?= base_url(); ?>poli" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
                &nbsp;
            </div>
        </div>
    </div>
    </div>
</body>