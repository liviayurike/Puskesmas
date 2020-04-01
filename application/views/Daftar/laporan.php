<!DOCTYPE html>
<html lang="en">

<head>
    <title>Report Table</title>
    <style type="text/css">
        #outtable {
            padding: 20px;
            border: 3px solid #e3e3e3;
            width: 300px;
            border-radius: 5px;
            text-align: center;
        }

        .short {
            width: 30px;
        }

        .normal {
            width: 150px;
        }

        table {

            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }

        thead th {
            text-align: center;
            padding: 10px;
            border: 5px solid #e3e3e3;
        }

        thead td {
            text-align: left;
            padding: 10px;
            border: 5px solid #e3e3e3;
        }
    </style>
</head>

<body>
    <!-- In production served. If you choose this, then comment the local server and uncomment this one -->
    <!-- <img src="?php // echo $_SERVER['DOCUMENT_ROOT'],"/media/dist/img/no-signal.png"; ?>" alt=""> -->
    <!-- In your local server -->
    <!-- <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/ci-dompdf/dist/img/no-signal.png"; ?>" alt=""> -->
    <div id="outtable">
        <h2> Data Pasien </h2>
        <table>
            <thead>
                <?php foreach ($daftar as $d) : ?>
                    <tr>
                        <th class="normal">Kode</th>
                        <td><?php echo 'KD_D 00' .  $d->id_daftar; ?></td>
                    </tr>
                    <tr>
                        <th class="normal">Nama</th>
                        <td><?php echo $d->nama; ?></td>
                    </tr>
                    <tr>
                        <th class="normal">Alamat</th>
                        <td><?php echo $d->alamat; ?></td>
                    </tr>
                    <tr>
                        <th class="normal">Usia</th>
                        <td><?php echo $d->usia; ?></td>
                    </tr>
                    <tr>
                        <th class="normal">Keluhan</th>
                        <td><?php echo $d->keluhan; ?></td>
                    </tr>
                    <tr>
                        <th class="normal">Poliklinik</th>
                        <td><?php echo $d->nama_poli; ?></td>
                    </tr>
                <?php endforeach; ?>
            </thead>
        </table>
    </div>
</body>

</html>