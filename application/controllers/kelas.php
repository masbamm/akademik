<?php
    class Kelas extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('m_kelas');       
        }   
        function index(){
            $this->load->view('tamplate/header');

            $data['kelas'] = $this->m_kelas->tampil_data()->result();
            $this->load->view('kelas/index',$data);

            $this->load->view('tamplate/footer');

        }

         function hapus($kode_kelas){
            $where = array('kode_kelas' => $kode_kelas);
            $this->m_kelas->hapus_data($where,'tabel_kelas');
            redirect('kelas/index');
        }
        
        function edit($kode_kelas){
             $this->load->view('tamplate/header');

            $where = array('kode_kelas' => $kode_kelas);
            $data['kelas'] = $this->m_kelas->edit_kelas($where,'tabel_kelas')->result();
            $this->load->view('kelas/edit_kelas',$data);

             $this->load->view('tamplate/footer');
        }

        function save_edit(){
            $kode_kelas = $this->input->post('kode_kelas');
            $nama_kelas = $this->input->post('nama_kelas');
         
            $data = array(
                'kode_kelas' => $kode_kelas,
                'nama_kelas' => $nama_kelas,
                
            );
         
            $where = array(
                'kode_kelas' => $kode_kelas
            );
         
            $this->m_kelas->update_kelas($where,$data,'tabel_kelas');
            redirect('kelas/index');
            }

        function tambah(){
            $this->load->view('tamplate/header');
            $this->load->view('kelas/tambah_kelas');
            $this->load->view('tamplate/footer');
            }

        function tambah_aksi(){
            $kode_kelas = $this->input->post('kode_kelas');
            $nama_kelas = $this->input->post('nama_kelas');

                $data = array(
                'kode_kelas' => $kode_kelas,
                'nama_kelas' => $nama_kelas
        );
                  $res = $this->m_kelas->input_data('tabel_kelas', $data);

        

      
        if($res=="")
        {
            $this->session->set_flashdata('successkelas', "Aksi Berhasil!"); 
        }else{
            $this->session->set_flashdata('error', "Aksi Gagal Periksa Kembali");
        }
        
        redirect(base_url('kelas'));

        // $this->m_kelas->input_data($data,'tabel_kelas');
        // redirect('kelas/index');

    }

    public function laporancsv()
    {
            $data['kelas']=$this->m_kelas->showdata()->result();
            $this->load->view('kelas/laporancsv',$data);
    }

    }
?>