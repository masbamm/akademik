<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Laporan</title>
</head>
<body>
<?php 	
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporandatakelas.xls");
?>
<table border="1">
        <thead>
            <tr>
                <th >NO</th>
                <th >Kode Kelas</th>
                <th >Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($kelas as $key){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    echo"<td>".$key->kode_kelas."</td>";
                    echo"<td>".$key->nama_kelas."</td>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>
