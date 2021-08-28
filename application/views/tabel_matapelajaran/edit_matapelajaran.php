<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Edit Data Matapelajaran</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php 
                        
                        foreach($matapelajaran as $d){ 
                            ?>

                            <form method="post"
                                  action="<?php echo base_url('kelas/save_edit')?>"
                                  name="formtambah"
                                  id="formtambah">
                                    
                                <div class="form-group">
                                    <label class="col-form-label" for="name">ID Matapelajaran</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="id_matapelajaran" name="id_matapelajaran" value="<?= $d->id_matapelajaran ?>">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-form-label" for="name">Nama Kelas</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="nama_matapelajaran" name="nama_matapelajaran" value="<?= $d->nama_matapelajaran ?>">
                                </div>
                                <br>
                                <?php
                                    }
                                ?>
                                <td>
                                    <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                        <a class="badge badge-danger" href="<?php echo base_url('matapelajaran/index'); ?>">Kembali</a>
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

