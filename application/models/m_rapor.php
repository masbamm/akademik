<?php 
 
class M_Rapor extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('rapor');
		$this->db->join('siswa', 'siswa.id_siswa = rapor.id_siswa','inner');
		return $this->db->get();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_rapor($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_kelas($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function detail_data($where){
		$this->db->select('*');
		$this->db->from('detail_rapor');
		$this->db->join('tabel_guru_matapelajaran', 'detail_rapor.id_guru_matapelajaran = tabel_guru_matapelajaran.id_guru_matapelajaran','inner');
		$this->db->join('tabel_matapelajaran', 'tabel_matapelajaran.id_matapelajaran = tabel_guru_matapelajaran.id_matapelajaran','inner');
		return $this->db->where('detail_rapor.id_rapor', $where)->get();
	}	

	function detail_data1($where){
		$this->db->select('*');
		$this->db->from('detail_rapor');
		$this->db->join('tabel_guru_matapelajaran', 'detail_rapor.id_guru_matapelajaran = tabel_guru_matapelajaran.id_guru_matapelajaran','inner');
		$this->db->join('tabel_matapelajaran', 'tabel_matapelajaran.id_matapelajaran = tabel_guru_matapelajaran.id_matapelajaran','inner');
		return $this->db->where('detail_rapor.id_rapor', $where)->get();
	}

	function showdata(){	
		return $this->db->get('rapor');
	}	
}
?> 