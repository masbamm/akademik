<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Laporan</title>
</head>
<body>
<?php 	
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporanpenerimaanbukti.xls");
?>
<table border="1">
        <thead>
            <tr>
                <th >No</th>
                <th >Sudah Diterima Dari</th>
                <th >Calon Siswa Di</th>
                <th >Banyaknya Uang</th>
                <th >Untuk Pembayaran</th>
                <th >Tanggal</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($penerimaan_form as $key){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    echo"<td>".$key->diterima_dari."</td>";
                    echo"<td>".$key->calon_siswa."</td>";
                    echo"<td>".$key->banyak_uang."</td>";
                    echo"<td>".$key->untuk_pembayaran."</td>";
                    echo"<td>".$key->tanggal."</td>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>
