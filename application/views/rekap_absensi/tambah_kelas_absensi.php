<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tamabah Kelas Absensi</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rekap_absensi/tambah_kelas_act'); ?>
                

                            <div class="form-group">
                                <label for="" class="col-form-label">Rombongan Kelas : </label><br>
                                    <select name="id_rombongan_belajar">
                                        <?php 
                                            foreach($rombongan_belajar as $d){
                                                echo "<option value='$d->id_rombongan_belajar'>$d->nama_kelas</option>";
                                            }
                                         ?>
                                    </select>
                            </div> 
                            <br> 


                             <div class="form-group">
                                <label for="" class="col-form-label">Nama Matapelajaran : </label><br>
                                    <select name="id_guru_matapelajaran">
                                        <?php 
                                            foreach($guru_matapelajaran as $d){
                                                echo "<option value='$d->id_guru_matapelajaran'>$d->nama_guru</option>";
                                            }
                                         ?>
                                    </select>
                            </div> 
                            <br>

                             <div class="row">
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label class="col-form-label" for="name">Semester : </label><br>
                                        <select name="semester">
                                            <option value='ganjil'>Ganjil</option>
                                            <option value='genap'>Genap</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <br>

                            <br>
                            <td>
                                <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="btn btn-secondary" href="<?php echo base_url('rombongan_belajar/index'); ?>">Kembali</a>
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

