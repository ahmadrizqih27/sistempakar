<?php 
class Model_admin extends CI_Model{
	
	function user_data(){
		$data=$this->db->get('user');
			if($data->num_rows() > 0){
				return $data->result();
			}else {
				return null;
			}
	}

	function gaya_belajar_data(){
		$data=$this->db->get('gaya_belajar');
			if($data->num_rows() > 0){
				return $data->result();
			}else {
				return null;
			}
	}

	function pernyataan_data(){
		$data=$this->db->get('pernyataan');
			if($data->num_rows() > 0){
				return $data->result();
			}else {
				return null;
			}
			var_dump($data);
	}


	function dataset_data_dist(){
		$data = $this->db->query("select distinct dataset.id_dataset,dataset.nama,gaya_belajar.gaya_belajar FROM `dataset` JOIN detail_dataset ON dataset.id_dataset = detail_dataset.id_dataset JOIN gaya_belajar ON dataset.id_gayabelajar=gaya_belajar.id_gayabelajar ORDER BY dataset.id_dataset");
		return $data->result();
	}

	function dataset_data(){
		$data = $this->db->query("select * FROM `dataset` JOIN detail_dataset ON dataset.id_dataset = detail_dataset.id_dataset");
		return $data->result();
	}


	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function edit_datagb($where,$table){		
		return $this->db->get_where($table,$where);
	}	

	function edit_datapernyataan($where,$table){		
		return $this->db->get_where($table,$where);
	}	

	function update_datagb($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_datapernyataan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function insertDataset($data){
		$this->db->insert('dataset', $data);
		return $this->db->insert_id();
	}

	function insertNilaiDataset($data){
		$this->db->insert('detail_dataset', $data);
	}

	function get_keyword($keyword){

		$query = $this->db->query("select * from user where user.no_induk = '$keyword'");
		return $query->result();
		
	}

	function getGayaBelajar(){

		$query = $this->db->query("	select * FROM `gaya_belajar`");
		return $query->result();
		
	}

	function get_data_hasil($id_user){
		$query = $this->db->query("select * FROM hasil JOIN user JOIN gaya_belajar ON hasil.id_user = user.id_user AND hasil.id_gayabelajar = gaya_belajar.id_gayabelajar WHERE user.id_user = $id_user ORDER BY hasil.tanggal_tes");
		return $query->result();
	}

	function jumlahDataLatih(){
		$query = $this->db->query("select * from dataset");
		return count($query->result());
	}

	function jumlahDataUji(){
		$query = $this->db->query("select * from hasil where hasil.id_user = 135");
		return count($query->result());
	}

	function detailDataLatih(){
		$query = $this->db->query("select * FROM `dataset` JOIN gaya_belajar ON dataset.id_gayabelajar = gaya_belajar.id_gayabelajar order by id_dataset DESC");
		return $query->result();
	}

	function detailDataUji(){
		$query = $this->db->query("select * from hasil where hasil.id_user = 135");
		return $query->result();
	}

	function jumlahSiswa(){
		$query = $this->db->query("select * from user where user.level = 'siswa'");
		return count($query->result());
	}

	function jumlahAdmin(){
		$query = $this->db->query("select * from user where user.level = 'admin'");
		return count($query->result());
	}	
	function jumlahVisual(){
	$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 1");
	return count($query->result());
	}

	function jumlahAudio(){
		$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 2");
		return count($query->result());
	}

	function jumlahKines(){
		$query = $this->db->query("select * from dataset where dataset.id_gayabelajar = 3");
		return count($query->result());
	}

	public function insert($data)
    {
        $this->db->insert("dataset",$data);
        return $this->db->insert_id();
    }

    function insertNilai($data){
		$this->db->insert('detail_dataset', $data);
	}

	function data_hitung(){
		$query = $this->db->query("select * from hasil JOIN gaya_belajar ON hasil.id_gayabelajar = gaya_belajar.id_gayabelajar where hasil.id_user = 135 ORDER BY hasil.tanggal_tes");
		return $query->result();
	}

}