<?php 
 
class m_rombongan_belajar extends CI_Model{
	function tampil_data(){
		return $this->db->get('tabel_rombongan_belajar');
	}
	function input_data($data,$table){
		$this->db->insert('tabel_rombongan_belajar',$data);
	}

	function edit_rombongan_belajar($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function update_rombongan_belajar($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function rombongan_belajar(){
	      $this->db->select('*');
	      $this->db->from('tabel_rombongan_belajar');
	      $this->db->join('tabel_kelas','tabel_rombongan_belajar.kode_kelas = tabel_kelas.kode_kelas');		
	      $this->db->order_by('id_rombongan_belajar', 'ASC');
	      $query = $this->db->get();
	      return $query;
	}

	public function cek_irb(){
		$query=$this->db->query("SELECT MAX(id_rombongan_belajar) as id_rombongan_belajar from tabel_rombongan_belajar");
		$hasil=$query->row();
		return $hasil->id_rombongan_belajar;
	}

	public function insertsiswa($id_rombongan_belajar,$id_siswa){
			$query="INSERT INTO detail_rombongan_belajar VALUES(NULL, '$id_rombongan_belajar', '$id_siswa')";
			$this->db->query($query);
		}

	public function detail_rombongan($where){
	        $this->db->select('*');
			$this->db->from('detail_rombongan_belajar');
			$this->db->join('siswa', 'siswa.id_siswa = detail_rombongan_belajar.id_siswa','inner');
			return $this->db->where('detail_rombongan_belajar.id_rombongan_belajar', $where)->get();
	}
	public function cek_siswa($where){
		 $this->db->select('*');
	      $this->db->from('detail_rombongan_belajar');
		$hasil=$this->db->where('id_siswa',$where)->get();
		return $hasil;
	}

	function showdata(){	
		return $this->db->get('tabel_rombongan_belajar');
	}

		


}
?>