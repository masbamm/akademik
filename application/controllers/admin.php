<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('tamplate/header');
		$this->load->view('v_admin');
		$this->load->view('tamplate/footer');
		
	}

	function data_siswa(){
		$this->load->view('siswa/index');
	}
}