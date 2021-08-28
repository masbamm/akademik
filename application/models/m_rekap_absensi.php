<?php 
 
class M_rekap_absensi extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('rekap_absensi');
		$this->db->join('tabel_rombongan_belajar', 'tabel_rombongan_belajar.id_rombongan_belajar = rekap_absensi.id_rombongan_belajar','inner');
		$this->db->join('tabel_kelas', 'tabel_kelas.kode_kelas = tabel_rombongan_belajar.kode_kelas','inner');
		$this->db->join('tabel_guru_matapelajaran', 'tabel_guru_matapelajaran.id_guru_matapelajaran = rekap_absensi.id_guru_matapelajaran','inner');
		$this->db->join('tabel_dataguru', 'tabel_dataguru.nip = tabel_guru_matapelajaran.nip','inner');
		$this->db->join('tabel_matapelajaran', 'tabel_matapelajaran.id_matapelajaran = tabel_guru_matapelajaran.id_matapelajaran','inner');
		return $this->db->get();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_rekap_absensi($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

 
	function update_rekap_absensi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function get_absensi_siswa($where){
	        $this->db->select('*');
			$this->db->from('rekap_absensi');
			$this->db->join('detail_rombongan_belajar', 'detail_rombongan_belajar.id_rombongan_belajar = rekap_absensi.id_rombongan_belajar','inner');
					$this->db->join('tabel_rombongan_belajar', 'tabel_rombongan_belajar.id_rombongan_belajar = rekap_absensi.id_rombongan_belajar','inner');
		$this->db->join('tabel_kelas', 'tabel_kelas.kode_kelas = tabel_rombongan_belajar.kode_kelas','inner');
		$this->db->join('tabel_guru_matapelajaran', 'tabel_guru_matapelajaran.id_guru_matapelajaran = rekap_absensi.id_guru_matapelajaran','inner');
		$this->db->join('tabel_dataguru', 'tabel_dataguru.nip = tabel_guru_matapelajaran.nip','inner');
		$this->db->join('tabel_matapelajaran', 'tabel_matapelajaran.id_matapelajaran = tabel_guru_matapelajaran.id_matapelajaran','inner');
			$this->db->join('siswa', 'siswa.id_siswa = detail_rombongan_belajar.id_siswa','inner');
			$this->db->join('detail_rekap_absensi', 'detail_rekap_absensi.id_ra = rekap_absensi.id_ra','inner');
			return $this->db->where('rekap_absensi.id_ra', $where)->get();
	}
	public function get_detail_absensi($where){
	        $this->db->select('*');
			$this->db->from('detail_rekap_absensi');
			$this->db->join('siswa', 'siswa.id_siswa = detail_rekap_absensi.id_siswa','inner');
			return $this->db->where('detail_rekap_absensi.id_ra', $where)->get();
	}
	public function insertsiswa($tanggal,$id_ra, $id_siswa, $status){
			$query="INSERT INTO detail_rekap_absensi VALUES(NULL, '$tanggal','$id_ra', '$id_siswa','$status')";
			$this->db->query($query);
		}

	function showdata(){	
		return $this->db->get('rekap_absensi');
	}

	public function get_detail_absensi1($where){
	        $this->db->select('*');
			$this->db->from('detail_rekap_absensi');
			$this->db->join('siswa', 'siswa.id_siswa = detail_rekap_absensi.id_siswa','inner');
			return $this->db->where('detail_rekap_absensi.id_ra', $where)->get();
	}

	

	
}
?>