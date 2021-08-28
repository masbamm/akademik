<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>IDENTITAS DATA DIRI</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2" style="border:1px solid #1B512D;">
                        <tr bgcolor="#ffffff">
                            <th style="background-color: purple;" align="center">No</th>
                            <th align="center">Id Siswa</th>
                            <th align="center">Nama Siswa</th>
                            <th align="center">NIPD</th>
                            <th align="center">Jenis Kelamin</th>
                            <th align="center">Tempat Lahir</th>
                        </tr>';
            foreach ($siswa as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td style="border:1px solid blue;" align="center">'.$i.'</td>
                            <td style="border:1px solid blue;">'.$row['id_siswa'].'</td>
                            <td style="border:1px solid blue;">'.$row['nama_siswa'].'</td>
                            <td style="border:1px solid blue;">'.$row['nipd'].'</td>
                            <td style="border:1px solid blue;">'.$row['jenis_kelamin'].'</td>
                            <td style="border:1px solid blue;">'.$row['tempat_lahir'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
?>