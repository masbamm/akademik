<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tabel Pilih Kelas Siswa</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rombongan_belajar/pilih_siswa_aksi'); ?>
                        
                            <div class="form-group">
                                <label for="" class="col-form-label">Rombongan Belajar : </label><br>
                                    <select name="id_rombongan_belajar">
                                        <?php 
                                            foreach($rombongan_belajar as $d){
                                                echo "<option value='$d->id_rombongan_belajar'>$d->id_rombongan_belajar</option>";
                                            }
                                         ?>
                                    </select>
                            </div>
                            <br>

                            <div class="form-group">
                                <label class="col-form-label">Siswa : </label><br>
                                    <div class="col-sm-6">
                                        <?php 
                                            foreach($siswa as $d){
                                                echo "<input class='form-check-input me-1' type='checkbox' name='siswa[]' value='$d->id_siswa' aria-label=''>$d->nama_siswa<br>"; 
                                            }
                                         ?>
                                    </div>
                            </div>
                                    
                                    
                                
                            <br>
                            <td>
                                <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="badge badge-danger" href="<?php echo base_url('rombongan_belajar/index'); ?>">Kembali</a>
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
