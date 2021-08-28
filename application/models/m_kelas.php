<?php 
 
class M_kelas extends CI_Model{
	function tampil_data(){
		return $this->db->get('tabel_kelas');
	}
	function input_data($table,$data){
		$this->db->insert($table,$data);
	}
	function edit_kelas($where,$table){		
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

	function showdata(){	
		return $this->db->get('tabel_kelas');
	}	

	function get_data(){
		$query=$this->db->get('tabel_kelas');
		return $query->result_array();
	}
}
?>