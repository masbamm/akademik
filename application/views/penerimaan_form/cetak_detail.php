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
            $html='<div>
                        <h5>
                            <div align="center">BUKTI PENERIMAAN<br>
                                UANG FORMULIR PENDAFTARAN SISWA BARU<br>
                                SMA YADIKA KALIJATI
                            </div>
                        </h5>
                    </div>';

                    foreach ($penerimaan_form as $row) 
                        {
                    $i++;


                    $html.='<table border="1">
                                <ul style="list-style-type:none;">
                                    <li><label>NO</label> : '.$row['no'].'</li><br>
                                    <li><label>Sudah Di Terima Dari</label> : '.$row['diterima_dari'].'</li>
                                    <li><label>Calon Siswa Di</label> : '.$row['calon_siswa'].'</li>
                                    <li><label>Banyaknya Uang</label> : '.$row['banyak_uang'].'</li>
                                    <li><label>Untuk Pembayaran</label> : '.$row['untuk_pembayaran'].'</li><br>
                                    <li><label>Tanggal</label> : '.$row['tanggal'].'</li><br>
                                </ul>
                            </table>';

                    $html.='<table border="1">

                                <ul style="list-style-type:none;">
                                    <li><label align="left">Bendahara</label></li>
                                    <li><label align="left">YADIKA,</label></li>
                                    <li><label align="left">(...............)</label></li>
                                
                                    <li><label align="center">Mengetahui</label></li>
                                    <li><label align="center">KTU,</label></li>
                                    <li><label align="center">(...............)</label></li>

                                    <li><label align="right">Yang Menerima</label></li>
                                    <li><label align="right">KTU,</label></li>
                                    <li><label align="right">(...............)</label></li>
                                </ul>
                               
                            </table>';  

                                

                            

                       
                }
            $html.='</div>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
?>  