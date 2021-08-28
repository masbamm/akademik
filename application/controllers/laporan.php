<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->model('m_siswa');
        }
    public function contoh()
        {
            $this->load->view('contoh', $data);
        }

    public function cetak()
        {
            $data['siswa'] = $this->m_siswa->get_data();
            $this->load->view('cetak_detail_siswa', $data);
   		}   
}
?>