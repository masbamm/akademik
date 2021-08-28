<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Edit Guru Matapelajaran</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                         <?php 
                        
                        foreach($guru_matapelajaran as $d){ 
                ?>

                        <form method="post"
                              action="<?php echo base_url('guru_matapelajaran/save_edit')?>"
                              name="formtambah"
                              id="formtambah">
                                
                            <div class="form-group">
                                <label class="col-form-label" for="name">Nama Matapelajaran : </label><br>
                                    <select name="id_matapelajaran">
                                        <?php 
                                            foreach($guru_matapelajaran as $d){
                                                echo "<option value='$d->id_matapelajaran'>$d->nama_matapelajaran</option>";
                                            }
                                         ?>
                                    </select>
                            </div>
                            <br>


                            <div class="form-group">
                                <label class="col-form-label" for="name">Nama Guru : </label><br>
                                <select name="nip">
                                    <?php 
                                        foreach($guru_matapelajaran as $d){
                                            echo "<option value='$d->nip'>$d->nama_guru</option>";
                                        }
                                     ?>
                                </select>
                            </div>
                            <br>
                            <?php
                                }
                            ?>
                            <td>
                                <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                    <a class="badge badge-danger" href="<?php echo base_url('guru_matapelajaran/index'); ?>">Kembali</a>
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

