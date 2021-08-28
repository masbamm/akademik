<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tambah Rekap Absensi</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('rekap_absensi/tambahabens_aksi'); ?>
             
                          <?php 
                            foreach($rekap_absensi as $d){
                           echo "<input type='hidden' class='form-control' id='' placeholder='Masukan Tanggal' value='$d->id_ra' name='id_ra'>";
                         }
                       ?>
                           <div class="row">
                              <div class="col-sm-3">
                                  <div class="form-group">
                                      <label for="">Tanggal</label>
                                      <input type="date" class="form-control" id="tanggal" placeholder="Masukan Tanggal" name="tanggal">
                                  </div>
                              </div>
                              <br>
                              <table class="table">
                                <thead class="p-3 mb-2 bg-info text-white">
                                   <th>nama siswa</th>
                                    <th colspan="2">Status</th>
                                </thead>
                                <tbody>
                                 
                                   <?php 

                                      foreach($rekap_absensi as $d){
                                        echo "<tr><td><input type='hidden' name='id_siswa[]' value='$d->id_siswa'> $d->nama_siswa</td>
                                                  <td> 
                                                    <select class='form-select' aria-label='Default select example' id='status' name='status[]'>
                                                      <option value='Hadir'>Hadir</option>
                                                      <option value='Sakit'>Sakit</option>
                                                      <option value='Izin'>Izin</option>
                                                      <option value='Alfa'>Alfa</option>
                                                   </select>
                                                  </td>
                                        </tr>";
                                    }?>
                                
                                  <tr>
                                  <td>
                                    <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="badge badge-danger" href="<?php echo base_url('rekap_absensi/index'); ?>">Kembali</a>
                                  </td>
                                  </tr>
                                </tbody>
                        

                      
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
  