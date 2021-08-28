<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Laporan</title>
</head>
<body>
<?php 	
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporanmatapelajaran.xls");
?>
<table border="1">
        <thead>
            <tr>
                <th >No</th>
                <th>id</th>
                <th >Nama Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($matapelajaran as $key){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    echo"<td>".$key->id_matapelajaran."</td>";
                    echo"<td>".$key->nama_matapelajaran."</td>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>
