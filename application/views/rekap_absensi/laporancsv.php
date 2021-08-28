<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan</title>
</head>
<body>
<?php   
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporanabsensi.xls");
?>
<?php
   
?>
<?= "<b>Nama Kelas:</b>". $detail_absensi[0]->nama_kelas?><br>
<?= "<b>Nama Guru:</b>". $detail_absensi[0]->nama_guru?><br>
<?= "<b>Nama Matapelajaran:</b>". $detail_absensi[0]->nama_matapelajaran?><br>
<?= "<b>Semester:</b>". $detail_absensi[0]->semester?><br>

<table border="1">
        <thead>
            <tr>
                
                <th>NO</th>
<!--                 <th>Nama Kelas</th>
                <th>Nama Guru</th>
                <th>Nama Matapelajaran</th>
                <th>Semester</th> -->
                <th>Nama Siswa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($detail_absensi as $d){ 
                    $no++;
                    echo"<tr><th scope='row'>$no</th>";
                    // echo"<td>".$d->nama_kelas."</td>";
                    // echo"<td>".$d->nama_guru."</td>";
                    // echo"<td>".$d->nama_matapelajaran."</td>";
                    // echo"<td>".$d->semester."</td>";
                    echo"<td>".$d->nama_siswa."</td>";
                    echo"<td>".$d->status."</td>";
                    


                    }
                ?>
        </tbody>
    </table>

</body>
</html>
