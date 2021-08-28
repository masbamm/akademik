<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeri extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');;
			
		}	

		function galeri(){
			$this->load->view('profil/galeri');

		}
	}
?>