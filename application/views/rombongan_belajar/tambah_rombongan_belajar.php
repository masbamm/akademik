<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tambah Rombongan Belajar</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rombongan_belajar/tambah_aksi'); ?>
                        
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label class="col-form-label" for="name">ID Rombongan Belajar : </label>
                                        <input type="text" class="form-control" id="id_rombongan_belajar" placeholder="Masukan id_rombongan_belajar" name="id_rombongan_belajar" value="RBK<?php echo sprintf("%04s", $id_rombongan_belajar) ?>" readonly="">
                                    </div>
                                </div>
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="" class="col-form-label">Kode Kelas : </label><br>
                                    <select name="kode_kelas">
                                        <?php 
                                            foreach($kelas as $d){
                                                echo "<option value='$d->kode_kelas'>$d->nama_kelas</option>";
                                            }
                                         ?>
                                    </select>
                            </div>  
                                
                            <br>
                            <td>
                                <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="badge badge-danger" href="<?php echo base_url('rombongan_belajar/index'); ?>">Back</a>
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

