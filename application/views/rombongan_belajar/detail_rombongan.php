<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Detail Rombongan</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <div class="form-group">
      				            <label class="col-form-label" for="name"> </label>
      				            <input type="text" class="form-control" id="id_rombongan_belajar" placeholder="Masukan" name="id_rombongan_belajar" value="<?php echo $detail_rombongan[0]->id_rombongan_belajar; ?>" readonly="">
      				          </div>
                      </thead>
                    <tbody>
                        <tr>
            							<th>Nama Siswa</th>
            							<th>Aksi</th>							
            						</tr>
            					  		</thead>
            							<tbody>
            								<?php
            									 
            									foreach($detail_rombongan as $d){ 
            								?>

            					      	<tr>
            					            
            					            <td><?= $d->nama_siswa ?></td>

            					                <td>
            					                   	<a onclick="return confirm('akan menghapus data?')" href="<?php echo base_url()."rombongan_belajar/hapus_detail/".$d->id_rombongan_belajar ?>" 
            					                   	class="badge badge-danger">Hapus</a>
            					           
            					                </td>
            					        </tr>

            					        <?php
            					    		}
            					        ?>
            							</tbody>

            							<td>
            				            	<a class="badge badge-danger" href="<?php echo base_url('rombongan_belajar/index'); ?>">Kembali</a>
                                  <a class="badge badge-success" href="<?= base_url('rombongan_belajar/laporancsv') ?>">XLS</a>
            				            </td>

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
