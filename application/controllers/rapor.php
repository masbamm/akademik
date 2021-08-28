<?php
	class Rapor extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_rapor');
			$this->load->model('m_siswa');
			$this->load->model('m_guru_matapelajaran');
			$this->load->helper('form');
		}	

		function index(){
			$data['rapor'] = $this->m_rapor->tampil_data()->result();
			// print_r($data);
			$this->load->view('tamplate/header');
			$this->load->view('rapor/index',$data);

			$this->load->view('tamplate/footer');

		}

		function hapus($id_rapor){
			$where = array('id_rapor' => $id_rapor);
			$this->m_rapor->hapus_data($where,'rapor');
			redirect('rapor/index');
		}

		function detail($id_rapor){
			$this->load->view('tamplate/header');

			$where = $id_rapor;
			$data['detail_rapor'] = $this->m_rapor->detail_data($where)->result();

			$this->load->view('rapor/detail_nilai',$data);

			$this->load->view('tamplate/footer');

		}

		function tambah(){
		$data['siswa'] = $this->m_siswa->tampil_data()->result();
		$this->load->view('tamplate/header');
		$this->load->view('rapor/tambah_nilai', $data);
		
		$this->load->view('tamplate/footer');
		}

		function tambah_aksi(){
		$id_rapor = $this->input->post('id_rapor');
		$id_siswa = $this->input->post('id_siswa');
		

		$data = array(
			'id_rapor' => $id_rapor,
			'id_siswa' => $id_siswa,
		);
		$this->m_rapor->input_data($data,'rapor');
		redirect('rapor/index');

		}
		function tambah_nilai($id_rapor){
			$data['rapor'] = $id_rapor;
			$data['guru_matapelajaran'] = $this->m_guru_matapelajaran->tampil_data()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rapor/isi_nilai', $data);

			$this->load->view('tamplate/footer');

		}


		function tambah_nilai_aksi(){
			
			$id_guru_matapelajaran = $this->input->post('id_guru_matapelajaran');
			$id_rapor = $this->input->post('id_rapor');
			$keterampilan = $this->input->post('keterampilan');
			$pengetahuan = $this->input->post('pengetahuan');
			

		$data = array(
			'id_guru_matapelajaran'=> $id_guru_matapelajaran,
			'id_rapor' => $id_rapor,
			'keterampilan' => $keterampilan,
			'pengetahuan' => $pengetahuan,
		);

		$this->m_rapor->input_data($data,'detail_rapor');
		redirect('rapor/index');


	}

	// function index2(){
	// 		$data['rapor'] = $this->m_rapor->tampil_data()->result();
	// 		$this->load->view('tamplate/header');
	// 		$this->load->view('rapor/index',$data);

	// 		$this->load->view('tamplate/footer');

	// }

	function detail_nilai(){
		$this->load->view('tamplate/header');

		$data['rapor'] = $this->m_rapor->tampil_data()->result();
		$this->load->view('rapor/detail_nilai_siswa',$data);

		$this->load->view('tamplate/footer');
	}

	public function laporancsv($id_rapor)
	{
			$data['rapor']=$this->m_rapor->detail_data1($id_rapor)->result();
        	$this->load->view('rapor/laporancsv',$data);
	}
}
?>