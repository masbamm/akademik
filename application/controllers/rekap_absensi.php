<?php
	class Rekap_absensi extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_rekap_absensi');
			$this->load->helper('form');
			$this->load->model('m_rombongan_belajar');
			$this->load->model('m_guru_matapelajaran');	
		}	
		function index(){
			$data['rekap_absensi'] = $this->m_rekap_absensi->tampil_data()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rekap_absensi/index',$data);

			$this->load->view('tamplate/footer');

		}

		function hapus($id_ra){
			$where = array('id_ra' => $id_ra);
			$this->m_rekap_absensi->hapus_data($where,'rekap_absensi');
			redirect('rekap_absensi/index');
		}

		function tambah(){
			
			// $data['rombongan_belajar'] = $this->m_rombongan_belajar->rombongan_belajar()->result();
			$data['rombongan_belajar'] = $this->m_rombongan_belajar->rombongan_belajar()->result();
			$data['guru_matapelajaran'] = $this->m_guru_matapelajaran->matapelajaran()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rekap_absensi/tambah_kelas_absensi',$data);

			$this->load->view('tamplate/footer');
		}

		function tambah_kelas_act(){
			$this->load->view('tamplate/header');

			$id_rombongan_belajar = $this->input->post('id_rombongan_belajar');
			$id_guru_matapelajaran = $this->input->post('id_guru_matapelajaran');
			$semester = $this->input->post('semester');

			$this->load->view('tamplate/footer');


		$data = array(
			'id_rombongan_belajar' => $id_rombongan_belajar,
			'id_guru_matapelajaran' => $id_guru_matapelajaran,
			'semester' => $semester,
			
		);
		$this->m_rekap_absensi->input_data($data,'rekap_absensi');
		redirect('rekap_absensi/index');

		} 
		function tambahabens_aksi(){
			$tanggal = $_POST['tanggal'];
			$siswa = $_POST['id_siswa'];
			$hstatus=$_POST['status'];
			$id_ra=$_POST['id_ra'];
			echo $tanggal;
				for($i=0;$i<count($hstatus);$i++){
					$id_siswa = $siswa[$i];
					$status = $hstatus[$i];
					$this->m_rekap_absensi->insertsiswa($tanggal,$id_ra,$id_siswa,$status);
					
				}
				redirect('rekap_absensi/index');
		}
		function tambah_absensi($id_ra){
			$this->load->view('tamplate/header');
			
            $where = $id_ra;
            $data['rekap_absensi'] = $this->m_rekap_absensi->get_absensi_siswa($where)->result();
         	$this->load->view('rekap_absensi/tambah_absensi',$data);

         	$this->load->view('tamplate/footer');
         }
        function detail_absensi($id_ra){
        	$this->load->view('tamplate/header');

			$where =$id_ra;
			$data['detail_absensi'] = $this->m_rekap_absensi->get_detail_absensi($where)->result();
			$this->load->view('rekap_absensi/detail_absensi',$data);
			
			$this->load->view('tamplate/footer');
		}

		 public function laporancsv($id_ra)
    {
            $data['detail_absensi']=$this->m_rekap_absensi->get_absensi_siswa($id_ra)->result();

            $this->load->view('rekap_absensi/laporancsv',$data);
    }

    function index2(){
			$data['rekap_absensi'] = $this->m_rekap_absensi->tampil_data()->result();
			$this->load->view('tamplate/header');
			$this->load->view('rekap_absensi/index',$data);

			$this->load->view('tamplate/footer');


	}

	 function detail_siswa(){
        	$this->load->view('tamplate/header');

			$data['rekap_absensi'] = $this->m_rekap_absensi->tampil_data()->result();
			$this->load->view('rekap_absensi/detail_siswa',$data);
			
			$this->load->view('tamplate/footer');
		}
}
?>