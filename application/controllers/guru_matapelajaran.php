<?php
	class Guru_matapelajaran extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_guru_matapelajaran');
			$this->load->model('m_matapelajaran');
			$this->load->model('m_guru');
			$this->load->helper('form');	
		}	
		function index(){
			$this->load->view('tamplate/header');

			$data['guru_matapelajaran'] = $this->m_guru_matapelajaran->matapelajaran()->result();
			$this->load->view('tabel_guru_matapelajaran/index',$data);

			$this->load->view('tamplate/footer');

		}

		function hapus($id_guru_matapelajaran){
			$where = array('id_guru_matapelajaran' => $id_guru_matapelajaran);
			$this->m_guru_matapelajaran->hapus_data($where,'tabel_guru_matapelajaran');
			redirect('guru_matapelajaran/index');
		}

		function edit($id_guru_matapelajaran){
			$this->load->view('tamplate/header');

            $where = $id_guru_matapelajaran;
            $data['guru_matapelajaran'] = $this->m_guru_matapelajaran->edit_guru_mapel($where,'tabel_guru_matapelajaran')->result();
            $this->load->view('tabel_guru_matapelajaran/edit_guru_matapelajaran',$data);

            $this->load->view('tamplate/footer');
        }

        function save_edit(){
        	$nama_matapelajaran = $this->input->post('nama_matapelajaran');
            $nama_guru = $this->input->post('nama_guru');
            
         
            $data = array(
            	'id_matapelajaran' => $id_matapelajaran,
                'nip' => $nip,
                
                
            );
         
            $where = array(
                'id_guru_matapelajaran' => $id_guru_matapelajaran
            );
         
            $this->m_guru_matapelajaran->update_guru_mapel($where,$data,'tabel_guru_matapelajaran');
            redirect('guru_matapelajaran/index');
            }

		function tambah(){
			$data['matapelajaran'] = $this->m_matapelajaran->tampil_data()->result();
			$data['guru'] = $this->m_guru->tampil_data()->result();
			$this->load->view('tamplate/header');
			$this->load->view('tabel_guru_matapelajaran/tambah_guru_matapelajaran',$data);

			$this->load->view('tamplate/footer');
		}

		function tambah_aksi(){
			$id_matapelajaran = $this->input->post('id_matapelajaran');
			$nip = $this->input->post('nip');


		$data = array(
			'id_matapelajaran' => $id_matapelajaran,
			'nip' => $nip,
			
		);
		$this->m_guru_matapelajaran->input_data($data,'tabel_guru_matapelajaran');
		redirect('guru_matapelajaran/index');

	}
	}
?>