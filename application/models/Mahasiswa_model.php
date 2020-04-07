<?php
/**
* 
*/
class Mahasiswa_model extends CI_Model
{
	/*fungsi get all untuk memanggil database dan menjoin kan tabel
	tm_grup dengan tm_user setelah itu mengquerynya*/
	function getAll(){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grup','tm_user.grup=tm_grup.id_grup');
		$query=$this->db->get();

		return $query;
	}

	//fungsi untuk input data ke database
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampilIdGrub()
	{
		$query=$this->db->query('select*from tm_grup');
		return $query->result_array();
	}

	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
}
?>