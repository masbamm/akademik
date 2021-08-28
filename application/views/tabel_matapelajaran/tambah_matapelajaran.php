<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" align="center">
                  <h4 class="card-title">Tambah Mata Pelajaran</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                         <form method="post"
                          action="<?php echo base_url('matapelajaran/tambah_aksi')?>"
                          name="formtambah"
                          id="formtambah">
                            
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="name">ID Matapelajaran</label>
                                    <input type="text" class="form-control" placeholder="Masukan " id="id_matapelajaran" name="id_matapelajaran">
                                </div>
                            </div>
                            <br>

                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label class="col-form-label" for="name">Nama Matapelajaran</label>
                                    <input type="text" class="form-control" id="nama_matapelajaran" placeholder="Masukan " name="nama_matapelajaran">
                                </div>
                            </div>
                        </div>
                        <br>

                        <td>
                            <input type="submit" class="btn btn-info" type="submit" id="submit" name="submit" value="simpan">
                                <a class="badge badge-danger" href="<?php echo base_url('matapelajaran/index'); ?>">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                </svg>Back</a>
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
 