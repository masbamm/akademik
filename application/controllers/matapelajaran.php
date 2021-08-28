<?php
	class Matapelajaran extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_matapelajaran');
		
		}	

		function index(){
			$this->load->view('tamplate/header');
			
			$data['matapelajaran'] = $this->m_matapelajaran->tampil_data()->result();
			$this->load->view('tabel_matapelajaran/index',$data);

			$this->load->view('tamplate/footer');
		}

		function hapus($id_matapelajaran){
			$where = array('id_matapelajaran' => $id_matapelajaran);
			$this->m_matapelajaran->hapus_data($where,'tabel_matapelajaran');
			redirect('matapelajaran/index');
		}

		function edit_matapelajaran($id_matapelajaran){
			$this->load->view('tamplate/header');

			$where = array('id_matapelajaran' => $id_matapelajaran);
			$data['matapelajaran'] = $this->m_matapelajaran->edit_matapelajaran($where,'tabel_matapelajaran')->result();
			$this->load->view('tabel_matapelajaran/edit_matapelajaran',$data);

			$this->load->view('tamplate/footer');
		}

		function save_edit(){
			$id_matapelajaran = $this->input->post('id_matapelajaran');
			$nama_matapelajaran = $this->input->post('nama_matapelajaran');
		 
			$data = array(
				'id_matapelajaran' => $id_matapelajaran,
				'nama_matapelajaran' => $nama_matapelajaran,
				
			);
		 
			$where = array(
				'id_matapelajaran' => $id_matapelajaran
			);
		 
			$this->m_matapelajaran->update_matapelajaran($where,$data,'tabel_matapelajaran');
			redirect('matapelajaran/index');
			}

		function tambah(){
			$this->load->view('tamplate/header');
			$this->load->view('tabel_matapelajaran/tambah_matapelajaran');
			$this->load->view('tamplate/footer');
			}

		function tambah_aksi(){
			$id_matapelajaran = $this->input->post('id_matapelajaran');
			$nama_matapelajaran = $this->input->post('nama_matapelajaran');


		$data = array(
			'id_matapelajaran' => $id_matapelajaran,
			'nama_matapelajaran' => $nama_matapelajaran,
			
		);
		$this->m_matapelajaran->input_data($data,'tabel_matapelajaran');
		redirect('matapelajaran/index');

		}
		
		public function laporancsv()
		{
				$data['matapelajaran']=$this->m_matapelajaran->showdata()->result();
	        	$this->load->view('matapelajaran/laporancsv',$data);
		}
}
	
?>