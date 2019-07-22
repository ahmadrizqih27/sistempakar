<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_excel extends CI_Model {
    public function insert($data)
    {
        $this->db->insert("excel",$data);
        return $this->db->insert_id();
    }

    function insertNilai($data){
		$this->db->insert('detail_excel', $data);
	}

 }
?>