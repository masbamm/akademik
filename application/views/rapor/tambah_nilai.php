<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tambah Rapor</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rapor/tambah_aksi'); ?>
                        
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label class="col-form-label" for="name">Nama Siswa: </label><br>
                                        <select name="id_siswa">
                                        <?php 
                                            print_r($siswa);
                                            foreach($siswa as $d){
                                                echo "<option value='$d->id_siswa'>$d->nama_siswa</option>";
                                            }
                                         ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <br>

                         
                            <td>
                                <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="badge badge-danger" href="<?php echo base_url('rapor/index'); ?>">Kembali</a>
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
