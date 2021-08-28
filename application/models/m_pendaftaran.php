<?php 
 
class M_pendaftaran extends CI_Model{
	function tampil_data(){
		return $this->db->get('pendaftaran');
	}
	function get_data(){
		$query=$this->db->get('pendaftaran');
		return $query->result_array();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_pendaftaran($where,$table){		
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
}
?>