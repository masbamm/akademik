<?php 
 
class M_guru extends CI_Model{
	function tampil_data(){
		return $this->db->get('tabel_dataguru');
	}

	function input_data($table,$data){
		$this->db->insert($table,$data);
	}

	function data($number,$offset){
		return $query = $this->db->get('tabel_dataguru',$number,$offset)->result();		
	}

	function jumlah_data(){
		return $this->db->get('tabel_dataguru')->num_rows();
	}


	function edit_guru($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_guru($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function get_data(){
		$query=$this->db->get('tabel_dataguru');
		return $query->result_array();
	}
}
?> 