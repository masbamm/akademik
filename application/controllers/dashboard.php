<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');;
			$this->load->model('m_siswa');
			$this->load->model('m_guru');
			$this->load->model('m_kelas');

			$this->load->helper('form');
			
		}	

		function index(){
			$this->load->view('tamplate/header');

			$data['siswa'] = $this->m_siswa->get_data();
			$data['guru'] = $this->m_guru->get_data();
			$data['kelas'] = $this->m_kelas->get_data();

			$this->load->view('dashboard/index', $data);

			$this->load->view('tamplate/footer');

		}
	}
?>