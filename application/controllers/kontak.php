<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kontak extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');;
			
		}	

		function kontak(){
			$this->load->view('profil/kontak');

		}
	}
?>