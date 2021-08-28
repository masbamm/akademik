<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                    <?php echo form_open_multipart('penerimaan_form/tambah_aksi'); ?>
                        <div class="p-3 mb-2 bg-white text-info">
                                <h5>
                                    <div align="center">BUKTI PENERIMAAN<br>
                                        UANG FORMULIR PENDAFTARAN SISWA BARU<br>
                                        SMA YADIKA kALIJATI</div>
                                </h5>
                        </div>
                
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-form-label" for="name">NO : </label>
                                <input type="text" class="form-control"  id="no" name="no" > 
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label" for="name">Sudah Diterima Dari</label>
                                <input type="text" class="form-control" placeholder="Masukan " id="diterima_dari" name="diterima_dari" >
                            </div>
                        </div><br>

                        <div> 
                            <div class="form-group">
                                <label class="col-form-label" for="name">Calon Siswa Di : </label><br>
                                <input type="text" class="form-control" id="calon_siswa" placeholder="Masukan" name="calon_siswa" value="SMA YADIKA KALIJATI" readonly="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="name">Banyaknya Uang : </label>
                        <input type="text" class="form-control" placeholder="Masukan " id="banyak_uang" name="banyak_uang">
                    </div>
                    <br>
          
                    <div class="form-group">
                        <label for="">Untuk Pembayaran : </label>
                        <input type="text" class="form-control" id="untuk_pembayaran" placeholder="Masukan" name="untuk_pembayaran" value="Formulir Pendaftaran Siswa Baru(PSB)" readonly="">
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Tanggal Bayar : </label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                        </div>
                    </div>
                    <br>

                    <td>
                        <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                            <a class="badge badge-danger" href="<?php echo base_url('penerimaan_form/index'); ?>">
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
   