<?php
class Name_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function random(){
		$random_1 = rand(1,40000);
		$random_2 = rand($random_1,50000);

		$sql = 'SELECT nama FROM nama WHERE cek = 0 ORDER BY RAND() LIMIT 100 ';

		return $this->db->query($sql)->result_array();
	}

	public function cek($id){
		$sql = 'UPDATE nama SET cek = 1 WHERE nama = "'.$id.'" ;';

		$this->db->query($sql);

		return 0;
	}
}