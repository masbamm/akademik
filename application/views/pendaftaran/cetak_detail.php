<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Formulir Pendaftaran');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html=' <div>
                         <h3><div align="center">YAYASAN ABDI KARYA (YADIKA)<br>
                                                BIDANG PENDIDIKAN</div></h3>
                         <h4><div align="center">KANTOR PUSAT : Jl. Raden Saleh No. 11, Karang Tengah, Tanggerang, Banten 15157<br>
                                                 Telp.(021)7328, fax.(021)7328211</div></h4><hr>
                         <h5><div align="center">FORMULIR PENDAFTARAN SISWA BARU<br>SMA YADIKA KALIJATI</div></h5>
                    </div>';

                    foreach ($pendaftaran as $row) 
                        {
                    $i++;

                    $html.='<h5><i>A. Keterangan Pribadi</i></h5>';
                     
                    $html.=' <table border="1" align="center">
                                <tr>
                                    <td>NO Pendaftaran</td>
                                    <td>'.$row['no_pendaftaran'].'</td>
                                </tr>

                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>'.$row['nama_lengkap'].'</td>
                                </tr>

                                <tr>
                                    <td>Nama Panggilan</td>
                                    <td>'.$row['nama_panggilan'].'</td>
                                </tr>

                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>'.$row['jenis_kelamin'].'</td>
                                </tr>

                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>'.$row['tempat_lahir'].'</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>'.$row['tanggal_lahir'].'</td>
                                </tr>

                                <tr>
                                    <td>Agama</td>
                                    <td>'.$row['agama'].'</td>
                                </tr>

                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>'.$row['kewarganegaraan'].'</td>
                                </tr>
                            </table><br>';

                    $html.='<h5><i>B. Keterangan Keluarga</i></h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Anak Keberapa</td>
                                    <td>'.$row['anak_keberapa'].'</td>
                                </tr> 

                                <tr>
                                    <td>Jumlah Saudara Kandung</td>
                                    <td>'.$row['saudara_kandung'].'</td>
                                </tr>

                                <tr>
                                    <td>Jumlah Saudara Tiri</td>
                                    <td>'.$row['saudara_tiri'].'</td>
                                </tr>

                                <tr>
                                    <td>Jumlah Saudara Angkat</td>
                                    <td>'.$row['saudara_angkat'].'</td>
                                </tr>

                                <tr>
                                    <td>Anak Yatim/Piatu</td>
                                    <td>'.$row['yatim_piatu'].'</td>
                                </tr>

                                <tr>
                                    <td>Bahasa Sehari-Hari</td>
                                    <td>'.$row['bahasa'].'</td>
                                </tr>
                            </table><br>';

                    $html.='<h5><i>C. Keterangan Tempat Tinggal Calon Siswa</i></h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Alamat</td>
                                    <td>'.$row['alamat'].'</td>
                                </tr> 

                                <tr>
                                    <td>NO Kartu Keluarga</td>
                                    <td>'.$row['no_kk'].'</td>
                                </tr> 

                                <tr>
                                    <td>Kelurahan</td>
                                    <td>'.$row['kelurahan'].'</td>
                                </tr> 

                                <tr>
                                    <td>Kota/Kabupaten</td>
                                    <td>'.$row['kabupaten'].'</td>
                                </tr> 

                                <tr>
                                    <td>Kode POS</td>
                                    <td>'.$row['kode_pos'].'</td>
                                </tr> 

                                <tr>
                                    <td>Nomor Telepon/HP</td>
                                    <td>'.$row['no_hp'].'</td>
                                </tr> 

                                <tr>
                                    <td>Alamat Tersebut </td>
                                    <td>'.$row['alamat_tersebut'].'</td>
                                </tr>

                                <tr>
                                    <td>Jarak Dari Tempat Tinggal Kesekolah</td>
                                    <td>'.$row['jarak'].'</td>
                                </tr> 

                                <tr>
                                    <td>Kesekolah Dengan</td>
                                    <td>'.$row['sekolah_dengan'].'</td>
                                </tr> 
                            </table><br><br><br><br><br><br>';

                    $html.='<h5><i>D. Keterangan Kesehatan Siswa</i><h5>';

                    $html.='<table border="1" align="center">
                               <tr>
                                    <td>Golongan darah</td>
                                    <td>'.$row['golongan_darah'].'</td>
                                </tr> 

                                <tr>
                                    <td>Penyakit Yang Diderita</td>
                                    <td>'.$row['penyakit'].'</td>
                                </tr> 

                                <tr>
                                    <td>Pernah Dirawat</td>
                                    <td>'.$row['dirawat'].'</td>
                                </tr> 

                                <tr>
                                    <td>Kelaian Jasmani</td>
                                    <td>'.$row['kelainan'].'</td>
                                </tr> 

                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td>'.$row['tinggi_badan'].'</td>
                                </tr> 

                                <tr>
                                    <td>Berat Badan</td>
                                    <td>'.$row['berat_badan'].'</td>
                                </tr>  
                            </table><br><br><br>';

                    $html.='<h5><i>E. Keterangan Pendidikan Sebelumnya *)</i><h5>';

                    $html.='<table border="1" align="center">
                               <tr>
                                    <td>Asal Sekolah</td>
                                    <td>'.$row['asal_sekolah'].'</td>
                                </tr> 

                                <tr>
                                    <td>Lama Belajar</td>
                                    <td>'.$row['lama_belajar'].'</td>
                                </tr> 

                                <tr>
                                    <td>Jumlah STK/STL</td>
                                    <td>'.$row['jumlah_stk'].'</td>
                                </tr> 

                                <tr>
                                    <td>NISN</td>
                                    <td>'.$row['nisn'].'</td>
                                </tr>   
                            </table><br>';

                    $html.='<h5><i>F. Keterangan Pindahan Sekolah </i><h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Pinadahan Dari Sekolah </td>
                                    <td>'.$row['pindahan'].'</td>
                                </tr>

                                <tr>
                                    <td>Diterima Disekolah Ini Kelas</td>
                                    <td>'.$row['masuk_kelas'].'</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td>'.$row['tanggal'].'</td>
                                </tr>

                                <tr>
                                    <td>Alasan</td>
                                    <td>'.$row['alasan'].'</td>
                                </tr>  
                            </table><br>';

                    $html.='<h5><i>G. Keterangan Orang Tua </i><h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Keterangan Orang Tua </td>
                                    <td>Ayah</td>
                                    <td>Ibu</td>
                                </tr>

                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>'.$row['tempat_lahir_a'].'</td>
                                    <td>'.$row['tempat_lahir_i'].'</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>'.$row['tanggal_lahir_a'].'</td>
                                    <td>'.$row['tanggal_lahir_i'].'</td>
                                </tr>

                                <tr>
                                    <td>NIK</td>
                                    <td>'.$row['nik_ayah'].'</td>
                                    <td>'.$row['nik_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Agama</td>
                                    <td>'.$row['agama_ayah'].'</td>
                                    <td>'.$row['agama_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>'.$row['kewarganegaraan_a'].'</td>
                                    <td>'.$row['kewarganegaraan_i'].'</td>
                                </tr>

                                <tr>
                                    <td>Pendidikan Terakhir</td>
                                    <td>'.$row['pendidikan_ayah'].'</td>
                                    <td>'.$row['pendidikan_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Ijazah Tertinggi</td>
                                    <td>'.$row['ijazah_ayah'].'</td>
                                    <td>'.$row['ijazah_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>'.$row['pekerjaan_ayah'].'</td>
                                    <td>'.$row['pekerjaan_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Alamat Pekerjaan/Telp</td>
                                    <td>'.$row['alamat_kerja_ayah'].'</td>
                                    <td>'.$row['alamat_kerja_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Penghasilan/bulan</td>
                                    <td>'.$row['penghasilan_ayah'].'</td>
                                    <td>'.$row['penghasilan_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Alamat Rumah</td>
                                    <td>'.$row['alamat_ayah'].'</td>
                                    <td>'.$row['alamat_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Nomor Telepon/HP</td>
                                    <td>'.$row['no_hp_ayah'].'</td>
                                    <td>'.$row['no_hp_ibu'].'</td>
                                </tr>

                                <tr>
                                    <td>Masih Hidup/Meninggal</td>
                                    <td>'.$row['ayah_ada'].'</td>
                                    <td>'.$row['ibu_ada'].'</td>
                                </tr>
                            </table><br><br><br><br><br><br>';

                    $html.='<h5><i>H. Keterangan Tentang Wali </i><h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>'.$row['nama_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>'.$row['tempat_lahir_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>'.$row['tanggal_lahir_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>NIK</td>
                                    <td>'.$row['nik_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Agama</td>
                                    <td>'.$row['agama_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>'.$row['kewarganegaraan_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Ijazah Tertinggi</td>
                                    <td>'.$row['ijazah_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>'.$row['pekerjaan_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Penghasilan</td>
                                    <td>'.$row['penghasilan_wali'].'</td>
                                </tr>  

                                <tr>
                                    <td>Alamat</td>
                                    <td>'.$row['alamat_wali'].'</td>
                                </tr>

                                <tr>
                                    <td>NO Telepon/HP</td>
                                    <td>'.$row['no_hp_wali'].'</td>
                                </tr>  
                            </table><br>';

                    $html.='<h5><i>H. Keterangan Kegemaran Calon Siswa </i><h5>';

                    $html.='<table border="1" align="center">
                                <tr>
                                    <td>Kesenian</td>
                                    <td>'.$row['kesenian'].'</td>
                                </tr>

                                <tr>
                                    <td>Pendidikan Jasmani/ Olahraga</td>
                                    <td>'.$row['olahraga'].'</td>
                                </tr>

                                <tr>
                                    <td>Kemasyarakatan/ Organisasi</td>
                                    <td>'.$row['organisasi'].'</td>
                                </tr>

                                <tr>
                                    <td>Lain-Lain</td>
                                    <td>'.$row['lain_lain'].'</td>
                                </tr>

                                <tr>
                                    <td>Hoby</td>
                                    <td>'.$row['hobi'].'</td>
                                </tr>

                                <tr>
                                    <td>Cita-cita</td>
                                    <td>'.$row['cita_cita'].'</td>
                                </tr>
                            </table>';

     
                }
            $html.='</div>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Formulir Pendaftaran Siswa Baru.pdf', 'I');
?>  