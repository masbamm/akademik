<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">
                  	<div align="center">YAYASAN ABDI KARYA (YADIKA)</div></h3>
                    	<h4><div align="center">BIDANG PENDIDIKAN</div></h4>
                        	<div align="center">KANTOR PUSAT : Jl. Raden Saleh No. 11, Karang Tengah, Tanggerang, Banten 15157</div>
                          		<div align="center"> Telp.(021)7328, fax.(021)7328211</div>
                			</div>
                		
			
					<div align="center">
						<h5 class="card-title">
							<div>
								FORMULIR PENDAFTARAN SISWA BARU<br>
								SMA YADIKA KALIJATI
								<hr>
							</div>
						</h5>
					</div>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                     
                      </thead>
                      <tbody>
                       <div class="p-3 mb-2 bg-white text-info">
							<h5>A. KETERANGAN PRIBADI</h5>
						</div>
						<table class="table" border="1">
							<tr>
								<?php 
									$no = 1;
									foreach($pendaftaran as $d){ 
								?>
								<div>
									<td>NO Pendaftaran</td>
								</div>
								<div>
									<td><?= $d->no_pendaftaran ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Nama Lengkap</td>	
								</div>

								<div>
									<td><?= $d->nama_lengkap ?></td>
								</div>
							</tr>
							
							<tr>
								<div>
									<td>Nama Panggilan</td>
								</div>

								<div>
									<td><?= $d->nama_panggilan ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jenis Kelamin</td>
								</div>

								<div>
									<td><?= $d->jenis_kelamin?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tempat Lahir</td>
								</div>

								<div>
									<td><?= $d->tempat_lahir ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tanggal Lahir</td>
								</div>

								<div>
									<td><?= $d->tanggal_lahir ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Agama</td>
								</div>

								<div>
									<td><?= $d->agama ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kewarganegaraan</td>
								</div>

								<div>
									<td><?= $d->kewarganegaraan ?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>B. KETERANGAN JUMLAH KELUARGA</h5>
						</div>
						<table class="table" border="1">
							<tr>
								<div>
									<td>Anak Ke Berapa</td>
								</div>

								<div>
									<td><?= $d->anak_keberapa ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jumalah Saudara Kandung</td>
								</div>

								<div>
									<td><?= $d->saudara_kandung ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jumlah Saudara Tiri</td>
								</div>

								<div>
									<td><?= $d->saudara_tiri ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jumlah Saudara Angkat</td>
								</div>

								<div>
									<td><?= $d->saudara_angkat ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Anak Yatim Piatu</td>
								</div>

								<div>
									<td><?= $d->yatim_piatu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Bahasa Sehari-Hari</td>
								</div>

								<div>
									<td><?= $d->bahasa ?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>C. KETERANGAN TEMPAT TINGGAL</h5>
						</div>
						<table class="table" border="1">
							<tr>
								<div>
									<td>Alamat</td>
								</div>

								<div>
									<td><?= $d->alamat ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>No. Kartu Keluarga</td>
								</div>

								<div>
									<td><?= $d->no_kk ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kelurahan</td>
								</div>

								<div>
									<td><?= $d->kelurahan ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kota_kabupaten</td>
								</div>

								<div>
									<td><?= $d->kabupaten ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kode Pos</td>
								</div>

								<div>
									<td><?= $d->kode_pos ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Nomor Telepon/HP</td>
								</div>

								<div>
									<td><?= $d->no_hp ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Alamat Tersebut</td>
								</div>

								<div>
									<td><?= $d->alamat_tersebut ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jarak Dari Tempat Tinggal Kesekolah</td>
								</div>

								<div>
									<td><?= $d->jarak ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kesekolah Dengan</td>
								</div>

								<div>
									<td><?= $d->sekolah_dengan ?></td>
								</div>
							</tr>
							
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>D. KETERANGAN KESEHATAN CALON SISWA </h5>
						</div>

						<table border="1" class="table">
							<tr>
								<div>
									<td>Golongan Darah</td>
									<td><?= $d->golongan_darah ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Penyakit Yang Pernah Diderita</td>
									<td><?= $d->penyakit ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pernah Dirawat</td>
									<td><?= $d->dirawat ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kelainan Jasmani</td>
									<td><?= $d->kelainan ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tinggi Badan</td>
									<td><?= $d->tinggi_badan ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Berat Badan</td>
									<td><?= $d->berat_badan ?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>E. KETERANGAN SEBELUM PENDIDIKAN *) </h5>
						</div>

						<table class="table" border="1">
							<tr>
								<div>
									<td>Asal Sekolah</td>
									<td><?= $d->asal_sekolah ?></td>
								</div>
							</tr>
							
							<tr>
								<div>
									<td>Lama Belajar</td>
									<td><?= $d->lama_belajar ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Jumlah STK/STL</td>
									<td><?= $d->jumlah_stk ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>NISN(Nomor Induk Sekolah Nasional)</td>
									<td><?= $d->nisn ?></td>
								</div>
							</tr>

						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>F. KETERANGAN KETERANGAN PINDAHAN SEKOLAH</h5>
						</div>
						<table class="table" border="1">
							<tr>
								<div>
									<td>Pindahan Dari Sekolah </td>
									<td><?= $d->pindahan ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Diterima Disekolah Ini Dikelas </td>
									<td><?= $d->masuk_kelas ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pada Tanggal</td>
									<td><?= $d->tanggal ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Alasan Pindah</td>
									<td><?= $d->alasan ?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>G. KETERANGAN ORANG TUA </h5>
						</div>
						<table class="table" border="1">
							<tr>
								<div>
									<td>Keterangan Orang Tua</td>
									<td>Ayah</td>
									<td>Ibu</td>
								</div>
							</tr>

							<tr>
								<div>
									<td>nama</td>
									<td><?= $d->nama_ayah ?></td>
									<td><?= $d->nama_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tempat Lahir</td>
									<td><?= $d->tempat_lahir_a ?></td>
									<td><?= $d->tempat_lahir_i ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tanggal Lahir</td>
									<td><?= $d->tanggal_lahir_a ?></td>
									<td><?= $d->tanggal_lahir_i ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>NIK</td>
									<td><?= $d->nik_ayah ?></td>
									<td><?= $d->nik_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Agama</td>
									<td><?= $d->agama_ayah ?></td>
									<td><?= $d->agama_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kewarganegaraan</td>
									<td><?= $d->kewarganegaraan_a ?></td>
									<td><?= $d->kewarganegaraan_i ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pendidikan Terakhir</td>
									<td><?= $d->pendidikan_ayah ?></td>
									<td><?= $d->pendidikan_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Ijazah Tertinggi</td>
									<td><?= $d->ijazah_ayah ?></td>
									<td><?= $d->ijazah_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pekerjaan</td>
									<td><?= $d->pekerjaan_ayah ?></td>
									<td><?= $d->pekerjaan_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Alamat Pekerjaan/Telp</td>
									<td><?= $d->alamat_ayah ?></td>
									<td><?= $d->alamat_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Penghasilan</td>
									<td><?= $d->penghasilan_ayah ?></td>
									<td><?= $d->penghasilan_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Alamat Rumah</td>
									<td><?= $d->alamat_ayah ?></td>
									<td><?= $d->alamat_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Nomor Telepon/HP</td>
									<td><?= $d->no_hp_ayah ?></td>
									<td><?= $d->no_hp_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>nama</td>
									<td><?= $d->nama_ayah ?></td>
									<td><?= $d->nama_ibu ?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Masih Hidup/Menginggal Dunia</td>
									<td><?= $d->ayah_ada ?></td>
									<td><?= $d->ibu_ada ?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>H. KETERANGAN WALI </h5>
						</div>
						<table border="1" class="table">
							<tr>
								<div>
									<td>Nama Wali</td>
									<td><?= $d->nama_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tempat Lahir</td>
									<td><?= $d->tempat_lahir_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Tanggal Lahir</td>
									<td><?= $d->tanggal_lahir_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>NIK </td>
									<td><?= $d->nik_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Agama</td>
									<td><?= $d->agama_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kewarganegaraan</td>
									<td><?= $d->kewarganegaraan_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Ijazah</td>
									<td><?= $d->ijazah?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pekerjaan</td>
									<td><?= $d->pekerjaan_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>penghasilan/Bulan</td>
									<td><?= $d->penghasilan_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Alamat</td>
									<td><?= $d->alamat_wali?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>NO Telepon/HP</td>
									<td><?= $d->no_hp_wali?></td>
								</div>
							</tr>
						</table>

						<div class="p-3 mb-2 bg-white text-info">
							<h5>I. KETERANGAN KEGEMARAN CALON SISWA </h5>
						</div>
						<table class="table" border="1"> 
							<tr>
								<div>
									<td>Kesenian</td>
									<td><?= $d->kesenian?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Pendidikan Jasmani/Olahraga </td>
									<td><?= $d->olahraga?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Kemasyarakatan/Organisasi</td>
									<td><?= $d->organisasi?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Lain-lain</td>
									<td><?= $d->lain_lain?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Hobi</td>
									<td><?= $d->hobi?></td>
								</div>
							</tr>

							<tr>
								<div>
									<td>Cita-Cita</td>
									<td><?= $d->cita_cita?></td>
								</div>
							</tr>
						</table>
						<br>

							<tr>
					            <td>
					            	<a class="badge badge-danger" href="<?php echo base_url('pendaftaran/index'); ?>">Kembali</a>
					            	<a class="badge badge-primary" href="<?php echo base_url('pendaftaran/cetak/'.$d->no_pendaftaran); ?>">Print</a>
					            </td>
					        </tr>

						
					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>

	<?php
		}
	?>
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
