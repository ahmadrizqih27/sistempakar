<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {


 public function ceklogin($no_induk , $pass){
 	$this->db->where('no_induk', $no_induk);
 	$this->db->where('password', $pass);
 	return $this->db->get('user')->result();
  
 	}
 }