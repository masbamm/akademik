<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Edit Data Kelas</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                       <?php 
                        
                        foreach($kelas as $d){ 
                            ?>

                            <form method="post"
                                  action="<?php echo base_url('kelas/save_edit')?>"
                                  name="formtambah"
                                  id="formtambah">
                                    
                                <div class="form-group">
                                    <label class="col-form-label" for="name">Kode Kelas</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="kode_kelas" name="kode_kelas" value="<?= $d->kode_kelas ?>">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-form-label" for="name">Nama Kelas</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="nama_kelas" name="nama_kelas" value="<?= $d->nama_kelas ?>">
                                </div>
                                <br>
                                <?php
                                    }
                                ?>
                                <td>
                                    <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                        <a class="badge badge-danger" href="<?php echo base_url('kelas/index'); ?>">Kembali</a>
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
