<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Keterangan Nilai Siswa</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <?php echo form_open_multipart('rapor/'); ?>
                

                    <div class="form-group">
                        <label for="" class="col-form-label">  </label><br>
                          <input type='text' name='id_detil_rapor' value='<?php echo $detail_rapor[0]->id_detail_rapor; ?>'>;
                                    
                                                
                    </div> 
                    <br> 

                    <table class="table">
                      <thead>
                        <tr>
                           <th class="col-form-label">NO  </th>
                           <th class="col-form-label">Matapelajaran  </th>
                           <th class="col-form-label">Keterampilan  </th>
                           <th class="col-form-label">Pengetahuan  </th>
                           <th class="col-form-label">Jumlah  </th>
                           <th class="col-form-label">Rata-rata  </th>
                           <th class="col-form-label">Index  </th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                                $no=0;
                                foreach($detail_rapor as $d){
                                $no++;
                                    echo  "<tr>

                                            <td>$no</td>
                                            <td>$d->nama_matapelajaran</td>
                                            <td>$d->keterampilan</td>
                                            <td>$d->pengetahuan</td>";

                                    echo "<td>";
                                    echo $d->keterampilan+$d->pengetahuan;
                                    echo "</td>";

                                    echo "<td>";
                                    echo $rata=($d->keterampilan+$d->pengetahuan)/2;
                                    echo "</td>";

                                    echo "<td>";                                    
                                    if($rata>=85 && $rata<=100){
                                      echo "A";
                                    }if($rata>=75 && $rata<85){
                                      echo "B";
                                    }if($rata>=60&& $rata<75){
                                      echo "c";
                                    }if($rata>=40 && $rata<60){
                                      echo "D";
                                    }if($rata<40 && $rata<40){
                                      echo "E";
                                    }
                                    
                                    echo "</td></tr>";
                               
                                           ?>
                              </div> 
                             
                          </table>

                      <?php echo form_close(); ?>            
                          <td>
                              <a class="badge badge-danger" href="<?php echo base_url('rapor/index'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
                                  </svg>Back</a>
                          </td>
                      </tbody>
                    </table>
                     <td>
            <a class="badge badge-success" href="<?= base_url('rapor/laporancsv/'.$d->id_rapor) ?>">XLS</a>
            <?php  } ?>
        </td>
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
 