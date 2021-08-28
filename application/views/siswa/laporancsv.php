<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Laporan</title>
</head>
<body>
<?php 	
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporandatasiswa.xls");
?>
<table border="1">
        <thead>
            <tr>
                <th >No</th>
                <th >ID Siswa</th>
                <th >Nama Siswa</th>
                <th >nipd</th>
                <th >nisn</th>
                <th >Tempat Lahir</th>
                <th >Tanggal Lahir</th>
                <th >NIK</th>
                <th >Agama</th>
                <th >Alamat</th>
                <th >RT</th>
                <th >RW</th>
                <th >Dusun</th>
                <th >Kelurahan</th>
                <th >Kecamatan</th>
                <th >Nama Ayah</th>
                <th >Nama Ibu</th>
            </tr>
            </tr>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($siswa as $key){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    echo"<td>".$key->id_siswa."</td>";
                    echo"<td>".$key->nama_siswa."</td>";
                    echo"<td>".$key->nipd."</td>";
                    echo"<td>".$key->nisn."</td>";
                    echo"<td>".$key->tempat_lahir."</td>";
                    echo"<td>".$key->tanggal_lahir."</td>";
                    echo"<td>".$key->nik."</td>";
                    echo"<td>".$key->agama."</td>";
                    echo"<td>".$key->alamat."</td>";
                    echo"<td>".$key->rt."</td>";
                    echo"<td>".$key->rw."</td>";
                    echo"<td>".$key->dusun."</td>";
                    echo"<td>".$key->kelurahan."</td>";
                    echo"<td>".$key->kecamatan."</td>";
                    echo"<td>".$key->nama_ayah."</td>";
                    echo"<td>".$key->nama_ibu."</td>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>
