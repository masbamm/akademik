<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Detail Siswa</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table" border="1">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <tr>
				  				<td><p class="text-light bg-success">IDENTITAS DATA DIRI</p></td>
				  			</tr>
				  		
							<tr>
							<?php 
								$no = 1;
								foreach($siswa as $d){ 
							?>
								<td>ID Siswa</td>
								<td>:</td>
								<td><?= $d->id_siswa ?></td>
							</tr>

							<tr>
								<td>Nama Siswa</td>
								<td>:</td>
								<td><?= $d->nama_siswa ?></td>
							</tr>

							<tr>
								<td>NIPD</th>
								<td>:</td>
								<td><?= $d->nipd ?></td>
							</tr>

							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?= $d->jenis_kelamin ?></td>
							</tr>

							<tr>
								<td>Tempat Lahir</td>
								<td>:</td>
								<td><?= $d->tempat_lahir ?></td>
							</tr>

							<tr>
								<td>Tanggal Lahir</td>
								<td>:</td>
								<td><?= $d->tanggal_lahir ?></td>
							</tr>

							<tr>
								<td>NIK</td>
								<td>:</td>
								<td><?= $d->nik ?></td>
							</tr>

							<tr>
								<td>Agama</td>
								<td>:</td>
								<td><?= $d->agama ?></td>
							</tr>

							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><?= $d->alamat ?></td>
							</tr>

							<tr>
								<td>RT</td>
								<td>:</td>
								 <td><?= $d->rt ?></td>
							</tr>

							<tr>
								<td>RW</td>
								<td>:</td>
								<td><?= $d->rw ?></td>
							</tr>

							<tr>
								<td>Dusun</td>
								<td>:</td>
								<td><?= $d->dusun ?></td>
							</tr>

							<tr>
								<td>Kelurahan</td>
								<td>:</td>
								<td><?= $d->kelurahan ?></td>
							</tr>

							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><?= $d->kecamatan ?></td>
							</tr>

							<tr>
				  				<td><p class="text-light bg-success">BIODATA GURU</p></td>
				  			</tr>

							<tr>
								<td>Nama Ayah</td>
								<td>:</td>
								<td><?= $d->nama_ayah ?></td>
							</tr>

							<tr>
								<td>Nama Ibu</td>
								<td>:</td>
								 <td><?= $d->nama_ibu ?></td>
							</tr> 

							<tr>
				  				<td><p class="text-light bg-success">UPLOAD PERSYARATAN</p></td>
				  			</tr>  

							<tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="90" height="110">
								</td>
								
							</tr>

							<!-- <tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="150" height="220">
								</td>
								
							</tr>

							<tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="150" height="220">
								</td>
								
							</tr>

							<tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="150" height="220">
								</td>
								
							</tr>

							<tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="150" height="220">
								</td>
								
							</tr>
				             -->
				       

				            <tr>
					            <td>
					            	<a class="badge badge-danger" href="<?php echo base_url('siswa/index'); ?>">Kembali</a>
					            	<a class="badge badge-dark" href="<?php echo base_url('siswa/cetak/'.$d->id_siswa); ?>">Print To Pdf</a>
					            </td>
					        </tr>
					</table>        

				            
				     

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
