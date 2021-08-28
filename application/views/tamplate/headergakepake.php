

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<!--  <div>
    <img src="<?php echo base_url() ?>assets/images/logo1.jpg" alt="" width="800" height="180px">
    <div class="card-body">     
  </div>  -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
     
     <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
      <ul class="navbar-nav" aria-labelledby="navbarDropdown" >
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Home</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="<?php echo base_url('pendaftaran/index'); ?>">Pendaftaran</a>
           <a class="dropdown-item" href="<?php echo base_url('penerimaan_form/index'); ?>">Bukti Penerimaan Formulir</a> 
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('siswa/index'); ?>">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('guru/index'); ?>">Data Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('matapelajaran/index'); ?>"> Data Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('kelas/index'); ?>">Data Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('guru_matapelajaran/index'); ?>">Data Guru Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('rombongan_belajar/index'); ?>">Rombongan Belajar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('rekap_absensi/index'); ?>">Rekap Absensi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('rapor/index'); ?>">Raport Nilai</a>
        </li>
       </ul>
     </div>
     </div>
  </nav><br><br>