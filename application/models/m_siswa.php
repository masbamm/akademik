<?php 
 
class m_siswa extends CI_Model{
	function tampil_data(){
		return $this->db->get('siswa');
	}

	function get_data(){
		$query=$this->db->get('siswa');
		return $query->result_array();
	}

	function data($number,$offset){
		return $query = $this->db->get('siswa',$number,$offset)->result();		
	}

	function jumlah_data(){
		return $this->db->get('siswa')->num_rows();
	}

	function get_id($id){
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_siswa',$id);
		$query=$this->db->get();
		return $query->result();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_siswa($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function update_siswa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function showdata(){	
		return $this->db->get('siswa');
	}

	function showdata1($keyword=null){		
		$this->db->select('*');
		$this->db->from('siswa');
		if(!empty($keyword)){
			$this->db->like('nama_siswa',$keyword);
		}
		return $this->db->get()->result_array();
	}		
}