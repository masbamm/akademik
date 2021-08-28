<?php
	class Rombongan_belajar extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_rombongan_belajar');
			$this->load->helper('form');
			$this->load->model('m_siswa');
			$this->load->model('m_kelas');	
		}	
		function index(){
			$data['rombongan_belajar'] = $this->m_rombongan_belajar->rombongan_belajar()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rombongan_belajar/index',$data);

			$this->load->view('tamplate/footer');

		}

		function hapus($id_rombongan_belajar){
			$where = array('id_rombongan_belajar' => $id_rombongan_belajar);
			$this->m_rombongan_belajar->hapus_data($where,'tabel_rombongan_belajar');
			redirect('rombongan_belajar/index');
		}

		function tambah(){
			$data['siswa'] = $this->m_siswa->tampil_data()->result();
			$data['kelas'] = $this->m_kelas->tampil_data()->result();
			$dariDB=$this->m_rombongan_belajar->cek_irb();
			$nourut=substr($dariDB, 3,4);
			$id_rombongan_belajarsekarang= $nourut + 1;
			$data["id_rombongan_belajar"] = $id_rombongan_belajarsekarang;
			$this->load->view('tamplate/header');
			$this->load->view('rombongan_belajar/tambah_rombongan_belajar', $data);

			$this->load->view('tamplate/footer');
				
		}

		function tambah_aksi(){
			$id_rombongan_belajar = $this->input->post('id_rombongan_belajar');
			$kode_kelas = $this->input->post('kode_kelas');
			

		$data = array(
			'id_rombongan_belajar' => $id_rombongan_belajar,
			'kode_kelas'=> $kode_kelas
		);
	
		
		$this->m_rombongan_belajar->input_data($data,'rombongan_belajar');
		redirect('rombongan_belajar/index');

	}

		function pilih_kelas_siswa(){

			$data['siswa'] = $this->m_siswa->tampil_data()->result();
			$data['kelas'] = $this->m_kelas->tampil_data()->result();
			$data['rombongan_belajar']=$this->m_rombongan_belajar->tampil_data()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rombongan_belajar/pilih_kelas_siswa', $data);

			$this->load->view('tamplate/footer');

		}

		function pilih_siswa_aksi(){
			$id_rombongan_belajar = $_POST['id_rombongan_belajar'];
			$siswa = $_POST['siswa'];
			// echo count($siswa);
			// die();
			
				for($i=0;$i<count($siswa);$i++){
					$id_siswa = $siswa[$i];
					$data1 = $this->m_rombongan_belajar->cek_siswa($id_siswa)->result();
					if(empty($data1)){
						//Call the modal
						$this->m_rombongan_belajar->insertsiswa($id_rombongan_belajar,$id_siswa);
					}else{
						echo "<script>alert('Data Ada Yang Sama, silahkan ulangi')</script>";
					}
					
				}
				redirect('rombongan_belajar/pilih_kelas_siswa');
	

		}

		function detail_rombongan_belajar($id_rombongan_belajar){
			$this->load->view('tamplate/header');

			$where =$id_rombongan_belajar;
			$data['detail_rombongan'] = $this->m_rombongan_belajar->detail_rombongan($where,'detail_rombongan_belajar')->result();
			$this->load->view('rombongan_belajar/detail_rombongan',$data);

			$this->load->view('tamplate/footer');
		}

		function hapus_detail($id_rombongan_belajar){
			$where = array('id_rombongan_belajar' => $id_rombongan_belajar);
			$this->m_rombongan_belajar->hapus_data($where,'detail_rombongan_belajar');
			redirect('rombongan_belajar/index');
		}

		public function laporancsv(){
			$data['rombongan_belajar']=$this->m_rombongan_belajar->showdata()->result();
        	$this->load->view('rombongan_belajar/laporancsv',$data);
		}
}
?>






