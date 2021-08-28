<?php
	class Guru extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_guru');
			$this->load->helper('form');
			
		}	

		function index(){
			$this->load->view('tamplate/header');

			$this->load->database();
            $jumlah_data = $this->m_guru->jumlah_data();
            $this->load->library('pagination');
            $config['base_url'] = base_url().'guru/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 2;

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
            $data['guru'] = $this->m_guru->data($config['per_page'],$from);
            $this->load->view('tabel_dataguru/index',$data);

            $this->load->view('tamplate/footer');
			

		}

		function hapus($nip){
			$where = array('nip' => $nip);
			$this->m_guru->hapus_data($where,'tabel_dataguru');
			redirect('guru/index');
		}

		function biodata($nip){
			$this->load->view('tamplate/header');

			$where = array('nip' => $nip);
			$data['guru'] = $this->m_guru->edit_guru($where,'tabel_dataguru')->result();
			$this->load->view('tabel_dataguru/biodata',$data);

			$this->load->view('tamplate/footer');

		}

		function tambah(){
		$this->load->view('tamplate/header');
		$this->load->view('tabel_dataguru/tambah_guru');

		$this->load->view('tamplate/footer'); 
		}

		function tambah_aksi(){
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$nuptk = $this->input->post('nuptk');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$status_kepegawaian = $this->input->post('status_kepegawaian');
		$jenis_ptk = $this->input->post('jenis_ptk');
		$foto = $_FILES['foto'];
		if ($foto=''){
			$res=false;
		}else{
			$config['upload_path']    ='./assets/foto';
			$config['allowed_types']  ='jpg|png|gif|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				
				die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nip' => $nip,
			'nama_guru' => $nama_guru,
			'nuptk' => $nuptk,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'status_kepegawaian' => $status_kepegawaian,
			'jenis_ptk' => $jenis_ptk,
			'foto'=> $foto
		);
		

		$res = $this->m_guru->input_data('tabel_dataguru', $data);
        

      
        if($res=="")
        {
            $this->session->set_flashdata('successguru', "Aksi Berhasil!"); 
        }else{
            $this->session->set_flashdata('error', "Aksi Gagal Periksa Kembali");
        }
        
        redirect(base_url('guru'));
		$this->m_guru->input_data($data,'tabel_dataguru');
		redirect('guru/index');

	}

		function edit($nip){
			$this->load->view('tamplate/header');

			$where = array('nip' => $nip);
			$data['guru'] = $this->m_guru->edit_guru($where,'tabel_dataguru')->result();
			$this->load->view('tabel_dataguru/edit_guru',$data);

			$this->load->view('tamplate/footer');
		}

		function save_edit(){
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$nuptk = $this->input->post('nuptk');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$status_kepegawaian = $this->input->post('nuptk');
		$jenis_ptk = $this->input->post('jenis_ptk');
		$foto = $this->input->post('foto');
		
	 
		$data = array(
			'nip' => $nip,
			'nama_guru' => $nama_guru,
			'nuptk' => $nuptk,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'status_kepegawaian' => $status_kepegawaian,
			'jenis_ptk' => $jenis_ptk,
			'foto'=> $foto
			
		);
	 
		$where = array(
			'nip' => $nip
		);
	 
		$this->m_guru->update_guru($where,$data,'tabel_dataguru');
		redirect('guru/index');
	}


}
	

?>
	