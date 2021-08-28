<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tabel Isi Nilai Rapor Siswa</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rapor/tambah_nilai_aksi'); ?>
                        
                            <div class="form-group">
                                <label for="" class="col-form-label">ID Detail Rapor : </label><br>
                                    <input type="text" name="id_detail_rapor" class="form-control" placeholder="Masukan ID Detail">
                            </div>
                            <br>

                              <?php
                                     echo "<input type='hidden' class='form-control' id='id_rapor' placeholder='Masukan ' value='$rapor' name='id_rapor'>";
                                        
                               ?>

                            <div class="form-group">
                                <label class="col-form-label">ID Guru Mata Pelajaran : </label><br>
                                    <select name="id_guru_matapelajaran">
                                        <?php 
                                            foreach($guru_matapelajaran as $d){
                                                echo "<option value='$d->id_guru_matapelajaran'>$d->id_guru_matapelajaran</option>";
                                            }
                                         ?>
                                    </select>
                                </div>
                                <br>

                            <div class="form-group">
                                <label for="" class="col-form-label">Keterampilan : </label><br>
                                    <input type="text" name="keterampilan" class="form-control" placeholder="masukan">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="" class="col-form-label">Pengetahuan : </label><br>
                                    <input type="text" name="pengetahuan" class="form-control" placeholder="masukan">
                            </div>
                            <br>


                                    
                                    
                                
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

