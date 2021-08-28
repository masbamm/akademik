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
               <th class="col-form-label">NO  </th>
               <th class="col-form-label">Matapelajaran  </th>
               <th class="col-form-label">Keterampilan  </th>
               <th class="col-form-label">Pengetahuan  </th>
               <th class="col-form-label">Jumlah  </th>
               <th class="col-form-label">Rata-rata  </th>
               <th class="col-form-label">Index  </th>
            </tr>
            </tr>
            </tr>
        </thead>
        <tbody>
                <?php 
                $no=0;
                    foreach($rapor as $d){ 
                    $no++;
                     echo  "<tr>

                            <td>$no</td>
                            <td>$d->nama_matapelajaran</td>
                            <td>$d->keterampilan</td>
                            <td>$d->pengetahuan</td>";

                    echo "<td>";
                    echo $d->keterampilan+$d->pengetahuan;
                    echo "</td>";

                    echo "<td>";
                    echo $rata=($d->keterampilan+$d->pengetahuan)/2;
                    echo "</td>";

                    echo "<td>";                                    
                    if($rata>=85 && $rata<=100){
                      echo "A";
                    }if($rata>=75 && $rata<85){
                      echo "B";
                    }if($rata>=60&& $rata<75){
                      echo "c";
                    }if($rata>=40 && $rata<60){
                      echo "D";
                    }if($rata<40 && $rata<40){
                      echo "E";
                    }
                    
                    echo "</td></tr>";
                }
                           
                ?>
        </tbody>
    </table>
       
</body>
</html>
