<?php
    class Penerimaan_form extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->helper('url');
            $this->load->model('m_penerimaan_form'); 
            $this->load->helper('form');     
        }   
        function index(){
            $data['penerimaan_form'] = $this->m_penerimaan_form->tampil_data()->result();
            $this->load->view('tamplate/header');
            $this->load->view('penerimaan_form/index', $data);

            $this->load->view('tamplate/footer');
        }

        function detail_form($no){
            $this->load->view('tamplate/header');
            
            $where = array('no' => $no);
            $data['penerimaan_form'] = $this->m_penerimaan_form->edit_bukti($where,'penerimaan_form')->result();
            $this->load->view('penerimaan_form/detail_form',$data);

            $this->load->view('tamplate/footer');

        }
        public function cetak(){
            $data['penerimaan_form'] = $this->m_penerimaan_form->get_data();
            $this->load->view('penerimaan_form/cetak_detail', $data);
        } 

        function tambah(){
            $this->load->view('tamplate/header');
            $this->load->view('penerimaan_form/tambah_bukti');

            $this->load->view('tamplate/footer');
            }

        function tambah_aksi(){
            $no = $this->input->post('no');
            $diterima_dari = $this->input->post('diterima_dari');
            $calon_siswa = $this->input->post('calon_siswa');
            $banyak_uang = $this->input->post('banyak_uang');
            $untuk_pembayaran = $this->input->post('untuk_pembayaran');
            $tanggal = $this->input->post('tanggal');



        $data = array(
            'no' => $no,
            'diterima_dari' => $diterima_dari,
            'calon_siswa' => $calon_siswa,
            'banyak_uang' => $banyak_uang,
            'untuk_pembayaran' => $untuk_pembayaran,
            'tanggal' => $tanggal,
            
        );
        $this->m_penerimaan_form->input_data($data,'penerimaan_form');
        redirect('penerimaan_form/index');

    }

    public function laporancsv()
    {
            $data['penerimaan_form']=$this->m_penerimaan_form->showdata()->result();
            $this->load->view('penerimaan_form/laporancsv',$data);
    }
}
?>