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
                    <div style="border:1px solid #1B512D;">';

                    foreach ($siswa as $row) 
                        {
                    $i++;


                    $html.='<ul style="list-style-type:none;">
                                <li><label>Id Siswa</label> : '.$row['id_siswa'].'</li>
                                <li><label>Nama Siswa</label> : '.$row['nama_siswa'].'</li>
                                <li><label>NIPD</label> : '.$row['nipd'].'</li>
                                <li><label>Jenis Kelamin</label> : '.$row['jenis_kelamin'].'</li>
                                <li><label>Tempat Lahir</label> : '.$row['tempat_lahir'].'</li>
                        </ul>';
            
                }
            $html.='</div>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
?>  