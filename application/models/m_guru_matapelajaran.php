<?php 
 
class M_guru_matapelajaran extends CI_Model{
	function tampil_data(){
		return $this->db->get('tabel_guru_matapelajaran');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_guru_mapel($where,$table){
		  $this->db->select('*');
	      $this->db->from('tabel_guru_matapelajaran');
	      $this->db->join('tabel_dataguru','tabel_dataguru.nip = tabel_guru_matapelajaran.nip','LEFT');		
	      $this->db->join('tabel_matapelajaran','tabel_guru_matapelajaran.id_matapelajaran = tabel_matapelajaran.id_matapelajaran','LEFT');		
		  return $this->db->where('tabel_guru_matapelajaran.id_guru_matapelajaran',$where)->get();
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_guru_mapel($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function matapelajaran(){
	      $this->db->select('*');
	      $this->db->from('tabel_guru_matapelajaran');
	      $this->db->join('tabel_dataguru','tabel_dataguru.nip = tabel_guru_matapelajaran.nip','LEFT');		
	      $this->db->join('tabel_matapelajaran','tabel_guru_matapelajaran.id_matapelajaran = tabel_matapelajaran.id_matapelajaran','LEFT');
	      $query = $this->db->get();
	      return $query;
	   }
}
?>