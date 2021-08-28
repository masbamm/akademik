<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tambah Data Guru</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('guru/tambah_aksi'); ?>
                            
                        <div class="row">
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label class="col-form-label" for="name">NIP</label>
                                    <input type="text" class="form-control" id="nip" placeholder="Masukan nip" name="nip" required="" >
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-form-label" for="name">Nama Guru</label>
                            <input type="text" class="form-control" placeholder="Masukan " id="nama_guru" name="nama_guru" required="">
                        </div>
                        <br>

                         <div class="form-group">
                            <label class="col-form-label" for="name">NUPTK</label>
                            <input type="text" class="form-control" placeholder="Masukan nuptk " id="nuptk" name="nuptk" required="">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label><br>
                                <div class="">
                                      <input class="" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki" required="">
                                      <label class="" for="inlineRadio1">Laki-laki</label>
                                </div>

                                <div class="">
                                      <input class="" type="radio" name="jenis_kelamin" id="inlineRadio1" value="perempuan" required="">
                                      <label class="" for="inlineRadio1">Perempuan</label>
                                </div>
                        </div>
                        <br>
              

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir" required="">
                                </div>
                                <br>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required="" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Status Kepegawian</label>
                            <input type="text" class="form-control" id="status_kepegawaian" placeholder="Masukan status_kepegawaian" name="status_kepegawaian" required="">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Jenis PTK</label>
                            <input type="text" required="" class="form-control" id="jenis_ptk" placeholder="Masukan jenis_ptk" name="jenis_ptk">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Upload Foto</label>
                            <input type="file" required="" class="form-control" name="foto">
                        </div>
                        <br>

                        <td>
                            <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan" required="">
                                <a class="badge badge-danger" href="<?php echo base_url('guru/index'); ?>">Kembali</a>
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
