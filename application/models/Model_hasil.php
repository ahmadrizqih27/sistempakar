<?php 
class Model_hasil extends CI_Model{
	
	function hasilSiswa($id_hasil){
		$query = $this->db->query("select id_pernyataan, nilai from detail_hasil where id_hasil = $id_hasil");
		return $query->result();
	}

	function updatGayaBelajar($id_hasil, $id_gayabelajar){
		$query = $this->db->query("update hasil set id_gayabelajar = $id_gayabelajar WHERE id_hasil = $id_hasil");
	}

	function riwayathasil($id_user){
		$query	= $this->db->query("select * FROM hasil JOIN gaya_belajar ON hasil.id_gayabelajar = gaya_belajar.id_gayabelajar where id_user = $id_user ORDER BY hasil.tanggal_tes");
		return $query->result();			
	}

	function tampilHasil($id_hasil){
		$query = $this->db->query("select * FROM hasil JOIN gaya_belajar JOIN user ON hasil.id_gayabelajar = gaya_belajar.id_gayabelajar AND hasil.id_user = user.id_user WHERE hasil.id_hasil = $id_hasil");
		return $query->result();
	}

}