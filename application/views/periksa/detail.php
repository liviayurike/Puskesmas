<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
        <div class="card-body">
            <h5 class="card-title"><?= $pasien['nama_pas']; ?></h5>
            <p class="card-text">
                <label for=""><b> ID Pasien: </b></label>
                <?= $pasien['id_pas']; ?></p>
            <p class="card-text">
                <label for=""><b> ID Dokter: </b></label>
                <?= $pasien['id_dok']; ?></p>
            <p class="card-text">
                <label for=""><b> Alamat pasien: </b></label>
                <?= $pasien['alamat_pas']; ?></p>
            <p class="card-text">
                <label for=""><b> No Telp pasien: </b></label>
                <?= $pasien['no_telp_pas']; ?></p>
            <p class="card-text">
                <label for=""><b> Keluhan pasien: </b></label>
                <?= $pasien['keluhan_pas']; ?></p>
            <a href="<?= base_url();?>pasien" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>