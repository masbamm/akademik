<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Edit Data Siswa</h4>
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
                        <?php 
                            
                            foreach($siswa as $d){ 
                    ?>
           

                    <form method="post"
                          action="<?php echo base_url('siswa/save_edit')?>"
                          name="formtambah"
                          id="formtambah">
                            
                        <div class="form-group">
                            <label class="col-form-label" for="name">ID Siswa</label>
                            <input type="text" class="form-control" placeholder="Masukan " id="id_siswa" name="id_siswa" value="<?= $d->id_siswa ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-form-label" for="name">Nama Siswa</label>
                            <input type="text" class="form-control" placeholder="Masukan " id="nama_siswa" name="nama_siswa" value="<?= $d->nama_siswa ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">NIPD</label>
                            <input type="text" class="form-control" id="nipd" placeholder="Masukan NIPD" name="nipd" value="<?= $d->nipd ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label><br>
                             <input type="radio" name="jenis_kelamin" value="laki-laki"  <?php echo ($d->jenis_kelamin == "laki-laki" ? 'checked="checked"': ''); ?> >Laki-laki
                            <br>
                             <input type="radio" name="jenis_kelamin" value="perempuan"  <?php echo ($d->jenis_kelamin == "perempuan" ? 'checked="checked"': ''); ?> >Perempuan

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" class="form-control" id="nisn" placeholder="Masukan NISN" name="nisn" value="<?= $d->nisn ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir" value="<?= $d->tempat_lahir ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir" value="<?= $d->tanggal_lahir ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" value="<?= $d->nik ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">Agama</label><br>
                            <input type="radio" name="agama" value="islam"  <?php echo ($d->agama == "islam" ? 'checked="checked"': ''); ?> >Islam
                            <br>
                            <input type="radio" name="agama" value="kristen"  <?php echo ($d->agama == "kristen" ? 'checked="checked"': ''); ?> >Kristen
                            <br>
                            <input type="radio" name="agama" value="budha"  <?php echo ($d->agama == "budha" ? 'checked="checked"': ''); ?> >Budha
                            <br>
                            <input type="radio" name="agama" value="hindu"  <?php echo ($d->agama == "hindu" ? 'checked="checked"': ''); ?> >Hindu
                            <br>
                            <input type="radio" name="agama" value="katolik"  <?php echo ($d->agama == "katolik" ? 'checked="checked"': ''); ?> >Katolik
                            <br>
                            <input type="radio" name="agama" value="protestan"  <?php echo ($d->agama == "protestan" ? 'checked="checked"': ''); ?> >protestan
                            <br><br>
                            

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?= $d->alamat ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">RT</label>
                            <input type="text" class="form-control" id="rt" placeholder="Masukan RT" name="rt" value="<?= $d->rt ?>">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="">RW</label>
                            <input type="text" class="form-control" id="rw" placeholder="Masukan Rw" name="rw" value="<?= $d->rw ?>">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Dusun</label>
                            <input type="text" class="form-control" id="dusun" placeholder="Masukan Dusun" name="dusun" value="<?= $d->dusun ?>">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" placeholder="Masukan Kelurahan" name="kelurahan" value="<?= $d->kelurahan ?>">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" placeholder="Masukan Kecamatan" name="kecamatan" value="<?= $d->kecamatan ?>">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan Nama Ayah" name="nama_ayah" value="<?= $d->nama_ayah ?>">
                        </div>
                        <br>

                         <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan Nama Ibu" name="nama_ibu" value="<?= $d->nama_ibu ?>">
                        </div>
                        <?php
                            }
                        ?>
                        <br>

                        <td>
                            <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                <a class="badge badge-danger" href="<?php echo base_url('siswa/index'); ?>">Kembali</a>
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

    