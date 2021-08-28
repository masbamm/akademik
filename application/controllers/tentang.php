<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tentang extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			
		}	

		function index(){
			// $this->load->view('tamplate/header');

			$this->load->view('tentang/index');

			// $this->load->view('tamplate/footer');


		}
	}
?>