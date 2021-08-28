<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Edit Data Guru</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php 
                        
                        foreach($guru as $d){ 
                     ?>

                        <form method="post"
                              action="<?php echo base_url('guru/save_edit')?>"
                              name="formtambah"
                              id="formtambah">
                                

                                <div class="form-group">
                                    <label class="col-form-label" for="name">NIP</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="nip" name="nip" value="<?= $d->nip ?>">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <input type="text" class="form-control" id="nama_guru" placeholder="Masukan nama_guru" name="nama_guru" value="<?= $d->nama_guru ?>">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">NUPTK</label>
                                    <input type="text" class="form-control" id="nuptk" placeholder="Masukan nuptk" name="nuptk" value="<?= $d->nuptk ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin" placeholder="Masukan jenis_kelamin" name="jenis_kelamin" value="<?= $d->jenis_kelamin ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan tempat_lahir" name="tempat_lahir" value="<?= $d->tempat_lahir ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukan tanggal_lahir" name="tanggal_lahir" value="<?= $d->tanggal_lahir ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Status Kepegawaian</label>
                                    <input type="text" class="form-control" id="status_kepegawaian" placeholder="Masukan status_kepegawaian" name="status_kepegawaian" value="<?= $d->status_kepegawaian ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis PTK</label>
                                    <input type="text" class="form-control" id="jenis_ptk" placeholder="Masukan jenis_ptk" name="jenis_ptk" value="<?= $d->jenis_ptk ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="file" class="form-control" name="foto" value="<?= $d->foto?>" >
                                </div>

                        <?php
                            }
                        ?>
                        <br>

                        <td>
                            <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                <a class="badge badge-danger" href="<?php echo base_url('guru/index'); ?>">Kembali</a>
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

