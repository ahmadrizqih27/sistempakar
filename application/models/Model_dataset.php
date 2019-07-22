<?php 
class Model_dataset extends CI_Model{
	
	function jumlahDatasetVisual(){
		$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 1");
		return count($query->result());
	}

	function jumlahDatasetAudio(){
		$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 2");
		return count($query->result());
	}

	function jumlahDatasetKinestetik(){
		$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 3");
		return count($query->result());
	}

	function jumlahKemungkinan($nilai, $idpernyataan, $id_gayabelajar){
		$query = $this->db->query("select * from dataset JOIN detail_dataset ON dataset.id_dataset = detail_dataset.id_dataset WHERE dataset.id_gayabelajar = $id_gayabelajar AND detail_dataset.nilai = $nilai AND detail_dataset.id_pernyataan = $idpernyataan;");
		return count($query->result());
	}


}
