	<?php
	class Siswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('Pdf');
			$this->load->helper('url');
			$this->load->model('m_siswa');
			$this->load->helper('form');
			$this->load->library('form_validation');
			
		}	 

		function index(){
			$this->load->view('tamplate/header');

			$keyword = $this->input->get('keyword');
			$data = $this->m_siswa->showdata1($keyword);
			$data = array(
				'keyword'	=> $keyword,
				'siswa'		=> $data
			);
			

            $this->load->database();
            $jumlah_data = $this->m_siswa->jumlah_data();
            $this->load->library('pagination');
            $config['base_url'] = base_url().'siswa/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 4;

            $config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$config['first_link'] = 'Awal';
			$config['last_link'] = "Akhir";
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li  class="page-link">';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li  class="page-link">';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li  class="page-link">';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li  class="page-link">';
			$config['last_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li  class="page-link">';
			$config['first_tag_close'] = '</li>';

            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['siswa'] = $this->m_siswa->data($config['per_page'],$from);
            $this->load->view('siswa/index',$data);

            $this->load->view('tamplate/footer');

		}

		function hapus($id_siswa){
			$where = array('id_siswa' => $id_siswa);
			$this->m_siswa->hapus_data($where,'siswa');
			redirect('siswa/index');
		}

		function detail($id_siswa){
			$this->load->view('tamplate/header');
			
			$where = array('id_siswa' => $id_siswa);
			$data['siswa'] = $this->m_siswa->edit_siswa($where,'siswa')->result();
			$this->load->view('siswa/detail_siswa',$data);

			$this->load->view('tamplate/footer');

		}

		 public function cetak(){
            $data['siswa'] = $this->m_siswa->get_data();
            $this->load->view('siswa/cetak', $data);
   		} 


		// function pdf(){
		// 		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
	 //        $this->load->library('Pdfgenerator');
	        
	 //        // title dari pdf
	 //        $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
	        
	 //        // filename dari pdf ketika didownload
	 //        $file_pdf = 'laporan_penjualan_toko_kita';
	 //        // setting paper
	 //        $paper = 'A4';
	 //        //orientasi paper potrait / landscape
	 //        $orientation = "portrait";
	        
		// 	$html = $this->load->view('pdf',$this->data, true);	    
	        
	 //        // run dompdf
	 //        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	    	
  //   	}

		function tambah(){
		$this->load->view('tamplate/header');

		$this->load->view('siswa/tambah_siswa');
		

		$this->load->view('tamplate/footer');
		}

		function tambah_aksi(){
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$nipd = $this->input->post('nipd');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$dusun = $this->input->post('dusun');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$foto = $_FILES['foto'];
		if ($foto=''){
			$res=false;

		}else{
			$config['upload_path']    ='./assets/foto';
			$config['allowed_types']  ='jpg|png|gif|jpeg|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){

				die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}


		$data = array(
			'id_siswa' => $id_siswa,
			'nama_siswa' => $nama_siswa,
			'nipd' => $nipd,
			'jenis_kelamin' => $jenis_kelamin,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'nik' => $nik,
			'agama' => $agama,
			'alamat' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'dusun' => $dusun,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'foto' => $foto,
			

		);

		 $res = $this->m_siswa->input_data($data,'siswa' );
         
   

        

      
        if($res=="")
        {
            $this->session->set_flashdata('successsiswa', "Aksi Berhasil!"); 
        }else{
            $this->session->set_flashdata('error', "Aksi Gagal Periksa Kembali");
        }
        
        redirect(base_url('siswa'));
		$this->m_siswa->input_data($data,'siswa');
		redirect('siswa/index');

	}

	function edit_siswa($id_siswa){
		$this->load->view('tamplate/header');
		
		$where = array('id_siswa' => $id_siswa);
		$data['siswa'] = $this->m_siswa->edit_siswa($where,'siswa')->result();
		$this->load->view('siswa/edit_siswa',$data);

		$this->load->view('tamplate/footer');
	}

	function save_edit(){
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$nipd = $this->input->post('nipd');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$dusun = $this->input->post('dusun');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
	 
		$data = array(
			'id_siswa' => $id_siswa,
			'nama_siswa' => $nama_siswa,
			'nipd' => $nipd,
			'jenis_kelamin' => $jenis_kelamin,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'nik' => $nik,
			'agama' => $agama,
			'alamat' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'dusun' => $dusun,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
		);
	 
		$where = array(
			'id_siswa' => $id_siswa
		);
	 
		$this->m_siswa->update_siswa($where,$data,'siswa');
		redirect('siswa/index');
	}

	public function laporancsv()
	{
			$data['siswa']=$this->m_siswa->showdata()->result();
        	$this->load->view('siswa/laporancsv',$data);
	}
}
	

?>
	