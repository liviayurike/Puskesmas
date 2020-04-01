<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"> Data Poliklinik </h1>
    </div>
    <table class="table table-striped table-bordered" id="listPoli">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Poliklinik</th>
                <th>Nama Poliklinik</th>
                <th>Nama Dokter</th>
                <th>Jadwal</th>
            </tr>
            <thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($poli as $p) { ?>
                    <tr>
                        <td> <?= $no++; ?></td>
                        <td> <?= $p->id_poli; ?></td>
                        <td> <?= $p->nama_poli; ?></td>
                        <td> <?= $p->nama_dok; ?></td>
                        <td> <?= $p->jadwal; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
    </table>
</div>