<?php 
 
class m_matapelajaran extends CI_Model{
	function tampil_data(){
		return $this->db->get('tabel_matapelajaran');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_matapelajaran($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function update_matapelajaran($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function showdata(){	
		return $this->db->get('tabel_matapelajaran');
	}
}
?>