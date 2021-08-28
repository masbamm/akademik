<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
              	    <h3 align="center">Daftar Pendidik dan Tenaga Kependidikan </h3>
					<h3 align="center">SMAS YADIKA KALIJATI</h3>
					<hr>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                       
                      </thead>
                      <tbody>
                        <p class="text-light bg-success">BIODATA GURU</p>
			
							<tr>
							<?php 
								$no = 1;
								foreach($guru as $d){ 
							?>
								<td>NO</td>
								<td>:</td>
								<td><?= $d->nip ?></td>
							</tr>

							<tr>
								<td>Nama Guru</td>
								<td>:</td>
								<td><?= $d->nama_guru ?></td>
							</tr>

							<tr>
								<td>nuptk</th>
								<td>:</td>
								<td><?= $d->nuptk ?></td>
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
								<td>Status Kepegawaian</td>
								<td>:</td>
								<td><?= $d->status_kepegawaian ?></td>
							</tr>

							<tr>
								<td>Jenis PTK</td>
								<td>:</td>
								<td><?= $d->jenis_ptk ?></td>
							</tr>

							<tr>
								<td>
									<img src="<?php echo base_url ();?>assets/foto/<?php echo $d->foto; ?>" width="90" height="110">
								</td>
								
							</tr>
				 	</thead>
				            
				            <tr>
				            	<td><br></td>
				            </tr>

				            <tr>
					            <td>
					            	<a class="badge badge-danger" href="<?php echo base_url('guru/index'); ?>">Kembali</a>
					            </td>
					        
					        </tr>
				            
				     

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
