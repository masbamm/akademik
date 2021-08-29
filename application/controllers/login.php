<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');	
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		$cek2 = $this->m_login->cek_login("user",$where)->result();

		if($cek > 0){
		foreach ($cek2 as $key) {
 			if($key->hak_akses=="admin"){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'role'=>"admin"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("dashboard"));
 
			}else if($key->hak_akses=="siswa"){
				
				$data_session = array(
				'nama' => $username,
				'status' => "login",
				'role'=>"siswa"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("dashboard"));
			}
 
		}
		}else{
			$message = "Username and/or Password incorrect.\\nTry again.";
 			echo "<script type='text/javascript'>alert('$message');</script>";
			$this->load->view('v_login');	
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}