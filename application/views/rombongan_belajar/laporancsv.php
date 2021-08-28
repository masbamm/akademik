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
                <th >Id Rombel</th>
                <th >Nama Siswa</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($rombongan_belajar as $key){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    echo"<td>".$key->id_rombongan_belajar."</td>";
                    echo"<td>".$key->kode_kelas."</td>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>
