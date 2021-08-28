<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Keterangan Jumlah Data </h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                   
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead> 
                      </thead>
                      <tbody>
                        <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="statistics-details d-flex align-items-center justify-content-between">
                               
                                <div>
                                <p class="statistics-title">Siswa</p>
                                  <h3 class="rate-percentage" align="center">
                                    <?php
                                      echo count($siswa);
                                    ?>
                                    </h3>
                                  
                                </div>
                                <div>
                                  <p class="statistics-title">Guru</p>
                                  <h3 class="rate-percentage" align="center">
                                    <?php
                                      echo count($guru);
                                    ?>                                      
                                    </h3>
                                    
                                </div>

                                <div>
                                  <p class="statistics-title">Kelas</p>
                                  <h3 class="rate-percentage">
                                    <?php
                                      echo count($kelas);
                                    ?>                                      
                                    </h3>
                                  
                                </div>
                                <!-- <div class="d-none d-md-block">
                                  <p class="statistics-title">Avg. Time on Site</p>
                                  <h3 class="rate-percentage">2m:35s</h3>
                                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                </div>
                                <div class="d-none d-md-block">
                                  <p class="statistics-title">New Sessions</p>
                                  <h3 class="rate-percentage">68.8</h3>
                                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                </div>
                                <div class="d-none d-md-block">
                                  <p class="statistics-title">Avg. Time on Site</p>
                                  <h3 class="rate-percentage">2m:35s</h3>
                                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                </div> -->
                              </div>
                            </div>
                          </div> 
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

