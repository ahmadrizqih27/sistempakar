<?php 
class Model_pernyataan extends CI_Model{
	
	function pernyataan_data(){
		$data=$this->db->get('pernyataan');
			if($data->num_rows() > 0){
				return $data->result();
			}else {
				return null;
			}
	}

	function insertJawaban($data){
		 $this->db->insert('detail_hasil', $data);
	}

	function insertHasil($data){
		$this->db->insert('hasil', $data);
		return $this->db->insert_id();
	}

	function ambil_id_pernyataan(){
		$query = $this->db->query("select id_pernyataan from pernyataan");
		return $query->result();
	}

	function get_lastidhasil($id_user){
		$query = $this->db->query("select MAX(id_hasil) FROM hasil WHERE id_user = $id_user");
		return $query->result()[0];
	}

	function get_detailidhasil($id_hasil)
	{
		$query = $this->db->query("select COUNT(id_hasil) FROM detail_hasil WHERE id_hasil = $id_hasil");
		return $query->result()[0];
	}
}