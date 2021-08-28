<?php
    class Pendaftaran extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->helper('url');
            $this->load->model('m_pendaftaran'); 
            $this->load->helper('form');      
        } 

        function index(){
            $data['pendaftaran'] = $this->m_pendaftaran->tampil_data()->result();
            $this->load->view('tamplate/header');
            $this->load->view('pendaftaran/index', $data);

            $this->load->view('tamplate/footer');

        }

        function detail($no_pendaftaran){
            $this->load->view('tamplate/header');

            $where = array('no_pendaftaran' => $no_pendaftaran);
            $data['pendaftaran'] = $this->m_pendaftaran->edit_pendaftaran($where,'pendaftaran')->result();
            $this->load->view('pendaftaran/detail_pendaftaran',$data);

            $this->load->view('tamplate/footer');
        }

        public function cetak(){
            $data['pendaftaran'] = $this->m_pendaftaran->get_data();
            $this->load->view('pendaftaran/cetak_detail', $data);
        }

        function isi_pendaftaran(){

            $this->load->view('tamplate/header');
            $this->load->view('pendaftaran/isi_pendaftaran');
            $this->load->view('tamplate/profil');

            $this->load->view('tamplate/footer');
        }

        function tambah_aksi(){
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nama_panggilan = $this->input->post('nama_panggilan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $agama = $this->input->post('agama');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $anak_keberapa = $this->input->post('anak_keberapa');
        $saudara_kandung = $this->input->post('saudara_kandung');
        $saudara_tiri = $this->input->post('saudara_tiri');
        $yatim_piatu = $this->input->post('yatim_piatu');
        $bahasa = $this->input->post('bahasa');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $no_kk = $this->input->post('no_kk');
        $kelurahan = $this->input->post('kelurahan');
        $kabupaten = $this->input->post('kabupaten');
        $kode_pos = $this->input->post('kode_pos');
        $no_hp = $this->input->post('no_hp');
        $alamat_tersebut = $this->input->post('alamat_tersebut');
        $jarak = $this->input->post('jarak');
        $sekolah_dengan = $this->input->post('sekolah_dengan');
        $golongan_darah = $this->input->post('golongan_darah');
        $penyakit = $this->input->post('penyakit');
        $dirawat = $this->input->post('dirawat');
        $kelainan = $this->input->post('kelainan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $ijazah = $this->input->post('ijazah');
        $skhun = $this->input->post('skhun');
        $lama_belajar = $this->input->post('lama_belajar');
        $jumlah_stk = $this->input->post('jumlah_stk');
        $nisn = $this->input->post('nisn');
        $pindahan = $this->input->post('pindahan');
        $masuk_kelas = $this->input->post('masuk_kelas');
        $tanggal = $this->input->post('tanggal');
        $alasan = $this->input->post('alasan');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $tempat_lahir_a = $this->input->post('tempat_lahir_a');
        $tempat_lahir_i = $this->input->post('tempat_lahir_i');
        $tanggal_lahir_a = $this->input->post('tanggal_lahir_a');
        $tanggal_lahir_i = $this->input->post('tanggal_lahir_i');
        $nik_ayah = $this->input->post('nik_ayah');
        $nik_ibu = $this->input->post('nik_ibu');
        $agama_ayah = $this->input->post('agama_ayah');
        $agama_ibu = $this->input->post('agama_ibu');
        $kewarganegaraan_a = $this->input->post('kewarganegaraan_a');
        $kewarganegaraan_i = $this->input->post('kewarganegaraan_i');
        $pendidikan_ayah = $this->input->post('pendidikan_ayah');
        $pendidikan_ibu = $this->input->post('pendidikan_ibu');
        $ijazah_ayah = $this->input->post('ijazah_ayah');
        $ijazah_ibu = $this->input->post('ijazah_ibu');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $alamat_kerja_ayah = $this->input->post('alamat_kerja_ayah');
        $alamat_kerja_ibu = $this->input->post('alamat_kerja_ibu');
        $penghasilan_ayah = $this->input->post('penghasilan_ayah');
        $penghasilan_ibu = $this->input->post('penghasilan_ibu');
        $alamat_ayah = $this->input->post('alamat_ayah');
        $alamat_ibu = $this->input->post('alamat_ibu');
        $no_hp_ayah = $this->input->post('no_hp_ayah');
        $no_hp_ibu = $this->input->post('no_hp_ibu');
        $ayah_ada = $this->input->post('ayah_ada');
        $ibu_ada = $this->input->post('ibu_ada');
        $nama_wali = $this->input->post('nama_wali');
        $tempat_lahir_wali = $this->input->post('tempat_lahir_wali');
        $tanggal_lahir_wali = $this->input->post('tanggal_lahir_wali');
        $nik_wali = $this->input->post('nik_wali');
        $agama_wali = $this->input->post('agama_wali');
        $kewarganegaraan_wali = $this->input->post('kewarganegaraan_wali');
        $ijazah_wali = $this->input->post('ijazah_wali');
        $pekerjaan_wali = $this->input->post('pekerjaan_wali');
        $penghasilan_wali = $this->input->post('penghasilan_wali');
        $alamat_wali = $this->input->post('alamat_wali');
        $no_hp_wali = $this->input->post('no_hp_wali');
        $kesenian = $this->input->post('kesenian');
        $olahraga = $this->input->post('olahraga');
        $organisasi = $this->input->post('organisasi');
        $lain_lain = $this->input->post('lain_lain');
        $hobi = $this->input->post('hobi');
        $cita_cita = $this->input->post('cita_cita');





        $data = array(
            'no_pendaftaran' => $no_pendaftaran,
            'nama_lengkap' => $nama_lengkap,
            'nama_panggilan' => $nama_panggilan,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'kewarganegaraan' => $kewarganegaraan,
            'agama' => $agama,
            'anak_keberapa' => $anak_keberapa,
            'saudara_kandung' => $saudara_kandung,
            'saudara_tiri' => $saudara_tiri,
            'yatim_piatu' => $yatim_piatu,
            'bahasa' => $bahasa,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'no_kk' => $no_kk,
            'alamat_tersebut' => $alamat_tersebut,
            'jarak' => $jarak,
            'sekolah_dengan' => $sekolah_dengan,
            'golongan_darah' => $golongan_darah,
            'penyakit' => $penyakit,
            'dirawat' => $dirawat,
            'kelainan' => $kelainan,
            'tinggi_badan' => $tinggi_badan,
            'berat_badan' => $berat_badan,
            'asal_sekolah' => $asal_sekolah,
            'ijazah' => $ijazah,
            'skhun' => $skhun,
            'lama_belajar' => $lama_belajar,
            'jumlah_stk' => $jumlah_stk,
            'nisn' => $nisn,
            'pindahan' => $pindahan,
            'masuk_kelas' => $masuk_kelas,
            'tanggal' => $tanggal,
            'alasan' => $alasan,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'tempat_lahir_a' => $tempat_lahir_a,
            'tempat_lahir_i' => $tempat_lahir_i,
            'tanggal_lahir_a' => $tanggal_lahir_a,
            'tanggal_lahir_i' => $tanggal_lahir_i,
            'nik_ayah' => $nik_ayah,
            'nik_ibu' => $nik_ibu,
            'agama_ayah' => $agama_ayah,
            'agama_ibu' => $agama_ibu,
            'kewarganegaraan_a' => $kewarganegaraan_a,
            'kewarganegaraan_i' => $kewarganegaraan_i,
            'pendidikan_ayah' => $pendidikan_ayah,
            'pendidikan_ibu' => $pendidikan_ibu,
            'ijazah_ayah' => $ijazah_ayah,
            'ijazah_ibu' => $ijazah_ibu,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'alamat_kerja_ayah' => $alamat_kerja_ayah,
            'alamat_kerja_ibu' => $alamat_kerja_ibu,
            'penghasilan_ayah' => $penghasilan_ayah,
            'penghasilan_ibu' => $penghasilan_ibu,
            'alamat_ayah' => $alamat_ayah,
            'alamat_ibu' => $alamat_ibu,
            'no_hp_ayah' => $no_hp_ayah,
            'no_hp_ibu' => $no_hp_ibu,
            'ayah_ada' => $ayah_ada,
            'ibu_ada' => $ibu_ada,
            'nama_wali' => $nama_wali,
            'tempat_lahir_wali' => $tempat_lahir_wali,
            'tanggal_lahir_wali' => $tanggal_lahir_wali,
            'nik_wali' => $nik_wali,
            'agama_wali' => $agama_wali,
            'kewarganegaraan_wali' => $kewarganegaraan_wali,
            'ijazah_wali' => $ijazah_wali,
            'pekerjaan_wali' => $pekerjaan_wali,
            'penghasilan_wali' => $penghasilan_wali,
            'alamat_wali' => $alamat_wali,
            'no_hp_wali' => $no_hp_wali,
            'kesenian' => $kesenian,
            'olahraga' => $olahraga,
            'organisasi' => $organisasi,
            'lain_lain' => $lain_lain,
            'hobi' => $hobi,
            'cita_cita' => $cita_cita,
    

        );
        $this->m_pendaftaran->input_data($data,'pendaftaran');
        redirect('pendaftaran/index');

    }

       
}
?> 