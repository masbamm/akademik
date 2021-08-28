
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                    <div class="p-3 mb-2 bg-white text-info">
                          <div>
                          <h3><div align="center">YAYASAN ABDI KARYA (YADIKA)</div></h3>
                              <h4><div align="center">BIDANG PENDIDIKAN</div></h4>
                                  <div align="center">KANTOR PUSAT : Jl. Raden Saleh No. 11, Karang Tengah, Tanggerang, Banten 15157</div>
                                    <div align="center"> Telp.(021)7328, fax.(021)7328211</div>
                          </div>
                          </div>
                          <hr>

                          <?php echo form_open_multipart('pendaftaran/tambah_aksi'); ?>

                          <h5 class="p-3 mb-2 bg-white text-info" align="center">  
                            <div>FORMULIR PENDAFTARAN SISWA BARU</div>
                              <div>(TK/SD/SMP/SMA/SMK)</div>
                          </h4>
                          <br>

                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                       
                      </thead>
                      <tbody>
                         <h5 class="text-info bg-white">A. KETERANGAN PRIBADI</h5>    
               <br>
                <table border="1" class="table">
                  <tr>
                    <td>
                      <div class="form-group">
                        <label>NO Pendaftaran</label>
                      </div>
                    </td>

                    <td>
                       <input type="text" class="form-control" for="name" name="no_pendaftaran" id="no_pendaftaran" value="PEND001" readonly>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="form-group">
                        <label class="col-form-label" for="name"> Nama Lengkap : </label>
                    </div>
                    </td>
                    <td>
                      <input type="text" class="form-control" placeholder="Masukan" id="nama_lengkap" name="nama_lengkap" >
                    </td>
                  </tr>

                  <tr>
                    <td><label class="col-form-label" for="name">Nama Panggilan : </label></td>
                    <td>
                      <input type="text" class="form-control" id="nipd" placeholder="Masukan" name="nama_panggilan">
                    </td>
                  </tr>

                  <tr>
                    <td><label for="">Jenis Kelamin : </label><br></td>
                    <td align="center">
                      <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki">
                       <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="perempuan">
                        <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label for="">Tempat Lahir : </label></td>
                    <td>
                      <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan" name="tempat_lahir">
                    </td>
                  </tr>

                  <tr>
                    <td><label for="">Tanggal Lahir : </label></td>
                    <td>
                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </td>
                  </tr>

                  <tr>
                    <td><label for="">Agama : </label></td>
                    <td align="center">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio1" value="islam">
                        <label class="form-check-label" for="inlineRadio1">Islam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio2" value="katolik">
                        <label class="form-check-label" for="inlineRadio2">Katolik</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio3" value="protestan" >
                        <label class="form-check-label" for="inlineRadio3">Protestan</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio3" value="buddha" >
                        <label class="form-check-label" for="inlineRadio3">Buddha</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio3" value="hindu" >
                        <label class="form-check-label" for="inlineRadio3">Hindu</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="inlineRadio3" value="konghucu" >
                        <label class="form-check-label" for="inlineRadio3">Konghucu</label>
                      </div>
                       <div class="form-group">
                        <input class="form-check-input" type="hidden" name="inlineRadioOptions" id="inlineRadio3" value="konghucu" >
                        <label class="form-check-label" for="inlineRadio3"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label for="">Kewarganegaraan</label></td>
                    <td> 
                        <input type="text" class="form-control" id="kewarganegaraan" placeholder="Masukan" name="kewarganegaraan">
                    </td>
                  </tr>
                </table>     

                  <table border="1" class="table">
                    <tr>
                      <td>
                        <label >Anak Ke Berapa : </label>
                      </td>

                          <td>
                            <select name="anak_keberapa">
                              <option>Anak Ke</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </td>
                    </tr>
                        
                    <tr>
                      <td>
                        <label >Jumlah Saudara Kandung : </label>
                      </td>

                          <td>
                            <select name="saudara_kandung">
                              <option> tidak ada </option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                          </td>
                    </tr>

                    <tr>
                      <td>
                        <label>Jumlah Saudara tiri : </label>
                      </td>

                          <td>
                            <select name="saudara_tiri">
                              <option> tidak ada </option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <label >Jumlah Saudara Angkat  : </label>
                      </td>
                          <td>
                            <select name="saudara_angkat">
                              <option> tidak ada  </option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                         </td>
                    </tr>
                          
                    <tr>
                      <td>
                        <label >Anak Yatim Piatu : </label>
                      </td>
                          <td>  
                            <select name="yatim_piatu">
                              <option> Lengkap Semua </option>
                              <option value="">Yatim</option>
                              <option value="">Piatu</option>
                              <option value="">Yatim Piatu</option>
                            </select>
                          </td>
                    </tr> 

                    <tr>
                      <td><label >Bahasa Sehari-hari  : </label></td>
                      <td>
                        <input type="tetx" class="form-control" id="bahasa" name="bahasa" placeholder="Masukan">  
                      </td>
                    </tr>      
                  </table>

                    <h5 class="text-info bg-white">B. KETERANGAN TEMPAT TINGGAL CALON SISWA</h5>
                    <br>
                      <table class="table" border="1">
                        <tr>
                          <td><label for="">Alamat : </label></td>
                          <td>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukan" name="alamat">
                          </td>
                        </tr>

                        <tr>
                          <td><label for="">RT : </label></td>
                          <td>
                            <input type="text" class="form-control" id="rt" placeholder="Masukan" name="rt"> 
                          </td>
                        </tr>

                        <tr>
                          <td> <label for="">RW : </label></td>
                          <td>
                            <input type="text" class="form-control" id="rw" placeholder="Masukan" name="rw">
                          </td>
                        </tr>

                        <tr>
                          <td><label class="col-form-label" for="name">NO Kartu Keluarga : </label></td>
                          <td>
                            <input type="text" class="form-control" placeholder="Masukan " id="no_kk" name="no_kk">
                          </td>
                        </tr>

                        <tr>
                          <td><label for="">Kelurahan : </label></td>
                          <td>
                             <input type="text" class="form-control" id="kelurahan" placeholder="Masukan" name="kelurahan">
                          </td>
                        </tr>

                        <tr>
                          <td> <label for="">Kota/Kabupaten : </label></td>
                          <td>
                            <input type="text" class="form-control" id="kabupaten" placeholder="Masukan" name="kabupaten">
                          </td>
                        </tr>

                        <tr>
                          <td><label for="">Kode Pos : </label></td>
                          <td>
                            <input type="text" class="form-control" id="kode_pos" placeholder="Masukan" name="kode_pos">
                          </td>
                        </tr>

                        <tr>
                          <td><label for="">Nomor Telepon/HP : </label></td>
                          <td>
                            <input type="text" class="form-control" id="no_hp" placeholder="Masukan" name="no_hp">
                          </td>
                        </tr>
                      </table>
                

                    <table border="1" class="table">
                      <tr>
                        <td>
                          <label>Alamat Tersebut  : </label>
                        </td>

                        <td>
                          <select name="alamat_tersebut">
                            <option>a. bersama orang tua</option>
                            <option>b. menumpang kepada orang lain</option>
                            <option>c. diasrama</option>
                            <option>d. Kosan</option>
                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <label>Jarak dan Tempat Tinggal Kesekolah : </label>
                        </td>

                        <td>
                          <select name="jarak">
                            <option>KM</option>
                            <option>M</option>
                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <label>Kesekolah Dengan : </label>
                        </td>

                        <td>
                          <select name="sekolah_dengan">
                            <option>Kend. Umum</option>
                            <option>Kend. Pribadi</option>
                            <option>Jalan Kaki</option>
                          </select>
                        </td>
                      </tr>
                    </table>
                    <br>

                    <h5 class="text-info bg-white">C. KETERANGAN KESEHATAN</h5><br>
                      <a class="text-info bg-white"><i>Catatan : Jika tidak memiliki riwayat atau tidak pernah di rawat maka isiskan "tidak ada"</i></a>
                      <table border="1" class="table">
                        <tr>
                          <td>
                            <label>Golongan Darah : </label>
                          </td>

                          <td>
                            <select name="golongan_darah">
                              <option>A+</option>
                              <option>A-</option>
                              <option>B+</option>
                              <option>B-</option>
                              <option>AB</option>
                              <option>O</option>
                            </select>
                          </td>  
                        </tr>

                        <tr>
                          <td>
                            <label>Penyakit Yang pernah Diderita : </label>
                          </td>

                          <td>
                            <select name="penyakit">
                              <option>Tidak Ada</option>
                              <option>TBC</option>
                              <option>Cacar</option>
                              <option>Epilepsi</option>
                              <option>Asma</option>
                              <option>Lainnya</option>
                            </select>
                          </td> 
                        </tr>

                        <tr>
                          <td>
                            <label for="">Pernah Dirawat di : </label>
                          </td>

                          <td>
                             <input type="text" class="form-control" id="dirawat" placeholder="Masukan" name="dirawat">
                          </td>
                        </tr>    

                        <tr>
                          <td>
                             <label for="">Kelainan Jasmani : </label>
                          </td>

                          <td>
                             <input type="text" class="form-control" id="kelainan" placeholder="Masukan" name="kelainan">
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <label for="">Tinggi Badan : </label>
                          </td>

                          <td>
                             <input type="text" class="form-control" id="tinggi_badan" placeholder="Masukan" name="tinggi_badan">
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <label for="">Berat Badan : </label>
                          </td>

                          <td>
                             <input type="text" class="form-control" id="berat_badan" placeholder="Masukan" name="berat_badan">
                          </td>
                        </tr>
                      </table><br>


                  <h5 class="text-info bg-white">D. KETERANGAN PEDNDIDIKAN SEBELUMNYA * )</h5><br><br>
                    <table class="table" border="1">
                      <h6 class="text-info bf-white">ASAL SEKOLAH</h6><br>

                      <tr>
                        <td>
                          <label>SMP/SMA/SMK atau Sederajat : </label>
                        </td>

                        <td>
                          <select name="asal_sekolah">
                            <option value="">TK</option>
                            <option value="">SD</option>
                            <option value="">SMP</option>
                            <option value="">SMA</option>
                            <option value="">SMK</option>
                            <option value="">M.I</option>
                            <option value="">M.Ts.</option>
                            <option value="">M.A</option>
                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td>
                           <label for="">Upload Ijazah : </label>
                        </td>

                        <td>
                          <input type="text" class="form-control" name="ijazah" id="ijazah" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <label for="">SKHUN : </label>
                        </td>

                        <td>
                          <input type="text" class="form-control" name="skhun" id="skhun" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <label for="">Lama Belajar : </label>
                        </td>

                        <td>
                          <input type="text" class="form-control" id="lama_belajar" placeholder="Masukan" name="lama_belajar">
                        </td>
                      </tr>

                      <tr>
                        <td>
                           <label for="">Jumlah STK/STL : </label>
                        </td>

                        <td>
                          <input type="text" class="form-control" id="jumlah_stk" placeholder="Masukan" name="jumlah_stk">
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <label for="">Nomor Induk Siswa Nasional (NISN) : </label>
                        </td>

                        <td>
                          <input type="text" class="form-control" id="nisn" placeholder="Masukan" name="nisn">
                        </td>
                      </tr>
                    </table>


                    <table border="1" class="table">
                      <h6 class="text-info bf-white">PINDAHAN SEKOLAH</h6><br>

                        <tr>
                          <td>
                            <label>Pindahan Dari Sekolah : </label>
                          </td>

                          <td>
                            <select name="pindahan">
                              <option value="">TK</option>
                              <option value="">SD</option>
                              <option value="">SMP</option>
                              <option value="">SMA</option>
                              <option value="">SMK</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <label>Masuk Kelas : </label>
                          </td>

                          <td>
                            <select name="masuk_kelas">
                              <option>-- Pilih Kelas --</option>
                              <option value="">X-IPA</option>
                              <option value="">X-IPS</option>
                              <option value="">XI-IPA</option>
                              <option value="">XI-IPS</option>
                              <option value="">XII-IPA</option>
                              <option value="">XII-IPS</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <label for="">Diterma Disekolah Pada Tanggal : </label>
                          </td>

                          <td>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                          </td>
                        </tr>

                        <tr>
                         <td>
                          <label for="">Alasan</label>
                         </td>

                         <td>
                           <input type="text" class="form-control" id="alasan" placeholder="Masukan " name="alasan">
                         </td>
                        </tr>
                    </table>
                    <br>

                  <h5 class="text-info bg-white">E. KETERANGAN TENTANG ORANG TUA/WALI</h5><br>
                    <table border="1" class="table">
                      <tr>
                        <td>NO</td>
                        <td>Orang Tua/ Wali</td>
                        <td>Ayah</td>
                        <td>Ibu</td>
                      </tr>

                      <tr>
                        <td>1</td>
                        <td>Nama</td>
                        <td>
                          <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Tempat Lahir</td>
                        <td>
                          <input type="text" name="tempat_lahir_a" class="form-control" id="tempat_lahir_a" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="tempat_lahir_i" class="form-control" id="tempat_lahir_i" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Tanggal Lahir</td>
                        <td>
                          <input type="date" name="tanggal_lahir_a" class="form-control" id="tanggal_lahir_a">
                        </td>
                        <td>
                          <input type="date" name="tanggal_lahir_i" class="form-control" id="tanggal_lahir_i"> 
                        </td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>NIK</td>
                        <td>
                          <input type="text" name="nik_ayah" class="form-control" id="nik_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="nik_ibu" class="form-control" id="nik_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>5</td>
                        <td>Agama</td>
                        <td>
                          <input type="text" name="agama_ayah" class="form-control" id="agama_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="agama_ibu" class="form-control" id="agama_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>6</td>
                        <td>Kewarganegaraan</td>
                        <td>
                          <input type="text" name="kewarganegaraan_a" class="form-control" id="kewarganegaraan_a" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="kewarganegaraan_i" class="form-control" id="kewarganegaraan_i" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>7</td>
                        <td>Pendidikan Terakhir</td>
                        <td>
                          <input type="text" name="pendidikan_ayah" class="form-control" id="pendidikan_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="pendidikan_ibu" class="form-control" id="pendidikan_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>8</td>
                        <td>Ijazah Tertinggi</td>
                        <td>
                         <select name="ijazah_ayah">
                           <option>SD</option>
                           <option>SMP</option>
                           <option>SMA</option>
                           <option>S1</option>
                           <option>S2</option>
                           <option>S3</option>
                         </select>
                        </td>
                        <td>
                          <select name="ijazah_ibu">
                           <option>SD</option>
                           <option>SMP</option>
                           <option>SMA</option>
                           <option>S1</option>
                           <option>S2</option>
                           <option>S3</option>
                         </select>
                        </td>
                      </tr>

                      <tr>
                        <td>9</td>
                        <td>Pekerjaan</td>
                        <td>
                          <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>10</td>
                        <td>Alamat Kerja/Telp</td>
                        <td>
                          <input type="text" name="alamat_kerja_ayah" class="form-control" id="alamat_kerja" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="alamat_kerja_ibu" class="form-control" id="alamat_kerja_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>11</td>
                        <td>Penghasilan/bulan</td>
                        <td>
                          <input type="text" name="penghasilan_ayah" class="form-control" id="penghasilan_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="penghasilan_ibu" class="form-control" id="pendidikan_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>12</td>
                        <td>Alamat Rumah</td>
                        <td>
                          <input type="text" name="alamat_ayah" class="form-control" id="alamat_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="alamat_ibu" class="form-control" id="alamat_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>13</td>
                        <td>NO Telepon/HP</td>
                        <td>
                          <input type="text" name="no_hp_ayah" class="form-control" id="no_hp_ayah" placeholder="Masukan">
                        </td>
                        <td>
                          <input type="text" name="no_hp_ibu" class="form-control" id="no_hp_ibu" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>14</td>
                        <td>Masih Hidup Atau Sudang Meninggal</td>
                        <td>
                          <select name="ayah_ada">
                            <option>Masih Ada</option>
                            <option>Sudah Meninggal</option>
                          </select>
                        </td>
                        <td>
                          <select name="ibu_ada">
                            <option>Masih Ada</option>
                            <option>Sudah Meninggal</option>
                          </select>
                        </td>
                      </tr>
                    </table><br>

                <h5 class="text-info bg-white">F. KETERANGAN TENTANG WALI</h5><br>
                 <a class="text-info bg-white"><i>catatan : form harus diisi, jika tidak ada pilihan isikan "tidak ada" *)</i></a><br>
                    <table border="1" class="table">
                      <tr>
                        <td>Nama</td>
                        <td>
                          <input type="text" name="nama_wali" class="form-control" id="nama_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Tempat Lahir</td>
                        <td>
                          <input type="text" name="tempat_lahir_wali" class="form-control" id="tempat_lahir_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                          <input type="date" name="tanggal_lahir_wali" class="form-control" id="tanggal_lahir_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>NIK</td>
                        <td>
                          <input type="text" name="nik_wali" class="form-control" id="nik_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Agama</td>
                        <td>
                          <input type="text" name="agama_wali" class="form-control" id="agama_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Kewarganegaraan</td>
                        <td>
                          <input type="text" name="kewarganegaraan_wali" class="form-control" id="kewarganegaraan_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Ijazah Tertinggi</td>
                        <td>
                          <input type="text" name="ijazah_wali" class="form-control" id="ijazah_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Pekerjaan</td>
                        <td>
                          <input type="text" name="pekerjaan_wali" class="form-control" id="pekerjaan_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Penghasilan/Bulan</td>
                        <td>
                          <input type="text" name="penghasilan_wali" class="form-control" id="penghasilan_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Alamat</td>
                        <td>
                          <input type="text" name="alamat_wali" class="form-control" id="alamat_wali" placeholder="Masukan">
                        </td>
                      </tr>

                      <tr>
                        <td>Nomor Telepon/HP</td>
                        <td>
                          <input type="text" name="no_hp_wali" class="form-control" id="no_hp_wali" placeholder="Masukan">
                        </td>
                      </tr>
                    </table><br>

                <h5 class="text-info bg-white">G. KEGEMARAN CALON SISWA</h5><br>
                <a class="text-info bg-white"><i>catatan : form harus diisi, jika tidak ada pilihan isikan "tidak ada" *)</i></a><br>
                  <table border="1" class="table">
                    <tr>
                      <td><h6>Bakat Khusus dan prestasi Siswa Yang Menonjol Dalam : </h6></td>
                    </tr>
                    
                    <tr>
                      <td>Kesinian</td>
                      <td>
                        <input type="text" name="kesenian" class="form-control" placeholder="Masukan" id="kesenian">
                      </td>
                    </tr>

                    <tr>
                      <td>Pendidikan Jasmani dan Olahraga</td>
                      <td>
                        <input type="text" name="olahraga" class="form-control" id="olahraga" placeholder="Masukan">
                      </td>
                    </tr>

                    <tr>
                      <td>Kemasyarakatan/Organisasi</td>
                      <td>
                        <input type="text" name="organisasi" class="form-control" id="organisasi" placeholder="Masukan">
                      </td>
                    </tr>

                    <tr>
                      <td>Lain-Lain</td>
                      <td>
                        <input type="text" name="lain_lain" class="form-control" id="lain_lain" placeholder="Masukan">
                      </td>
                    </tr>

                    <tr>
                      <td><h6>Kegemaran Calon Siswa : </h6></td>
                    </tr>

                    <tr>
                      <td>Hoby</td>
                      <td>
                        <input type="text" name="hobi" class="form-control" id="hobi" placeholder="Masukan">
                      </td>
                    </tr>

                     <tr>
                      <td><h6>Keinginan atau Harapan Calon Siswa : </h6></td>
                    </tr>


                    <tr>
                      <td>Cita-Cita</td>
                      <td>
                        <input type="text" name="cita_cita" class="form-control" id="cita_cita" placeholder="Masukan">
                      </td>
                    </tr>




                  </table> 

                    <td>
                        <input type="submit" class="badge-badge-success" type="submit" id="submit" name="submit" value="simpan">
                            <a class="badge badge-danger" href="<?php echo base_url('siswa/index'); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                              <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                              <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                            </svg>Back</a>
                    </td>
                <?php echo form_close(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
