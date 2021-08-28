<?php 
 
class M_penerimaan_form extends CI_Model{
	function tampil_data(){
		return $this->db->get('penerimaan_form');
	}
	function get_data(){
		$query=$this->db->get('penerimaan_form');
		return $query->result_array();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_bukti($where,$table){		
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

	function showdata(){	
		return $this->db->get('penerimaan_form');
	}
	
}
?>