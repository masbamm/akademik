<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Tambah Data Siswa</h4>
                  <hr>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                       
                      </thead>
                      <tbody>
                        <?php echo form_open_multipart('siswa/tambah_aksi'); ?>
                           <p class="text-light bg-success">Biodata Siswa</p>         
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label" for="name">ID siswa</label>
                                            <input type="text" class="form-control" placeholder="Masukan " id="id_siswa" name="id_siswa" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <div class="form-group">
                                            <label class="col-form-label" for="name">NIPD</label>
                                            <input type="text" class="form-control" id="nipd" placeholder="Masukan NIPD" name="nipd" required="">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-form-label" for="name">Nama Siswa</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="nama_siswa" name="nama_siswa">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label><br>
                                        <div class="f">
                                              <input class="" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki">
                                              <label class="" for="inlineRadio1">Laki-laki</label>
                                        </div>

                                        <div class="f">
                                              <input class="" type="radio" name="jenis_kelamin" id="inlineRadio1" value="perempuan">
                                              <label class="" for="inlineRadio1">Perempuan</label>
                                        </div>
                                </div>
                                <br>
                      
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="text" class="form-control" id="nisn" placeholder="Masukan NISN" name="nisn">
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik">
                                </div>
                                <br>

                                 <div class="form-group">
                                    <label for="">Agama  </label>
                                    <br>

                                        <div class="">
                                          <input class="" type="radio" name="agama" id="inlineRadio1" value="islam">
                                          <label class="" for="inlineRadio1">Islam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="" type="radio" name="agama" id="inlineRadio2" value="katolik">
                                          <label class="" for="inlineRadio2">Katolik</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="" type="radio" name="agama" id="inlineRadio3" value="protestan" >
                                          <label class="" for="inlineRadio3">Protestan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="" type="radio" name="agama" id="inlineRadio3" value="buddha" >
                                          <label class="" for="inlineRadio3">Buddha</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="" type="radio" name="agama" id="inlineRadio3" value="hindu" >
                                          <label class="" for="inlineRadio3">Hindu</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="" type="radio" name="agama" id="inlineRadio3" value="konghucu" >
                                          <label class="" for="inlineRadio3">Konghucu</label>
                                        </div>
                                         <div class="form-group">
                                          <input class="" type="hidden" name="inlineRadioOptions" id="inlineRadio3" value="konghucu" >
                                          <label class="" for="inlineRadio3"></label>
                                        </div>
                                </div>



                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">RT</label>
                                            <input type="text" class="form-control" id="rt" placeholder="Masukan RT" name="rt">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">RW</label>
                                            <input type="text" class="form-control" id="rw" placeholder="Masukan Rw" name="rw">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                 <div class="form-group">
                                    <label for="">Dusun</label>
                                    <input type="text" class="form-control" id="dusun" placeholder="Masukan Dusun" name="dusun">
                                </div>
                                <br>

                                 <div class="form-group">
                                    <label for="">Kelurahan</label>
                                    <input type="text" class="form-control" id="kelurahan" placeholder="Masukan Kelurahan" name="kelurahan">
                                </div>
                                <br>

                                 <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" placeholder="Masukan Kecamatan" name="kecamatan">
                                </div>
                                <br>

                            <p class="text-light bg-success">Orang Tua/Wali</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Ayah</label>
                                            <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan Nama Ayah" name="nama_ayah">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nama Ibu</label>
                                            <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan Nama Ibu" name="nama_ibu">
                                        </div>
                                     </div>
                                </div>
                                <br>

                            <p class="text-light bg-success">Upload Persyaratan</p>
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <br>

                               <!--  <div class="form-group">
                                    <label for="">Kartu Keluarga</label>
                                    <input type="file" class="form-control" name="kartu_keluarga">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">Ijazah</label>
                                    <input type="file" class="form-control" name="ijazah">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="">Akte Kelahiran</label>
                                    <input type="file" class="form-control" name="akte_kelahiran">
                                </div>
                                <br>

                                  <div class="form-group">
                                    <label for="">Bukti Pembayaran Formulir</label>
                                    <input type="file" class="form-control" name="bukti_pembayaran">
                                </div> -->
                                <br>



                                <td>
                                    <input type="submit" class="btn btn-primary" type="submit" id="submit" name="submit" value="simpan">
                                        <a class="badge badge-danger" href="<?php echo base_url('siswa/index'); ?>">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                          <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                          <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                        </svg>Back</a>
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
    