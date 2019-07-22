<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
  $this->load->library('form_validation');
  $this->load->helper('url');
   $this->load->model('model_login');
 }

 public function index()
 {
  // $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
  // $this->load->view('kontak/filelist', $data);
  $this->load->view('view_login');
 }

 public function proseslogin(){
  $no_induk = $this->input->post('no_induk', TRUE);
  $password = MD5($this->input->post('password', TRUE));
  $cek=$this->model_login->ceklogin($no_induk, $password);
  $tes=count($cek);

  if ($tes>0) {
    $data_login = $this->model_login->ceklogin($no_induk, $password);
    $level = $data_login[0]->level;
    
    foreach($data_login as $row){
        $data_user = array(
          'id_user' =>$row->id_user,
          'no_induk' =>$row->no_induk,
          'level' =>$row->level,
          'nama' =>$row->nama,
          );
        // var_dump($level);
      } $this->session->set_userdata('logged_in', $data_user);
    // echo $level;
            if ($level == 'admin') {
              redirect('Admin/dasboard', 'refresh');
            }elseif ($level == 'siswa') {
              # code...
              redirect('Pernyataan', 'refresh');
            }
    }else{ 
      echo "<script type='text/javascript'>alert('Username & Password Anda Salah!'); history.back(self);</script>";
      redirect('login', 'refresh');
    }
 }

 // public function ceklogin()
 //  {
 //   //This method will have the credentials validation
 //    $this->load->library('form_validation');
 //    $this->form_validation->set_rules('no_induk', 'no_induk', 'trim|required');
 //    $this->form_validation->set_rules('password', 'Password', 'trim|required');
  
 //    if($this->form_validation->run() == FALSE)
 //    {
 //      $this->load->view('login');
 //    }
 //    else
 //    {
 //    $this->db->select('*');
 //    $this->db->from('user');
 //    $this->db->where('no_induk', $this->input->post('no_induk'));
 //    $this->db->where('password', MD5($this->input->post('password')));

 //    $result = $this->db->get()->result();

 //    if($result)
 //    {
 //      $sess_array = array();
 //      foreach($result as $row)
 //      {
 //        $sess_array = array(
 //          'id_user' => $row->id_user,
 //          'no_induk' => $row->no_induk,
 //          'level' => $row->level,
 //          'nama' => $row->nama,

 //        );
 //        $this->session->set_userdata('logged_in', $sess_array);
 //      }
 //      redirect('Pernyataan', 'refresh');
 //    }else{
 //     redirect('login', 'refresh');
 //    }
 //      }
 //  }
  
 //  public function check_database($password)
 //  {
 //    //Field validation succeeded.  Validate against database
 //    $username = $this->input->post('username');

 //    // $data = array(
 //    // 'username' => $username,
 //    // 'password' => $password
 //    //  );

 //  // $result = json_decode($this->curl->simple_get($this->API.'/login',$data));

 //     $this->db->select('*');
 //    $this->db->from('user');
 //    $this->db->where('username', $username);
 //    $this->db->where('password', MD5($password));

 //  $result = $this->db->get();

 //    if($result)
 //    {
 //      $sess_array = array();
 //      foreach($result as $row)
 //      {
 //        $sess_array = array(
 //          'id_user' => $row->id_user,
 //          'username' => $row->username,
 //          'level' => $row->level,
 //          'nama_user' => $row->nama_user
 //        );
 //        $this->session->set_userdata($sess_array);
 //      }

 //      return TRUE;
 //    }
 //    else
 //    {
 //      $this->form_validation->set_message('check_database', 'Invalid username or password');
 //      return false;
 //    }
 //  }


  // public function register()
  // {

  //  $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'trim|required');
  //  $this->form_validation->set_rules('nim_nip', 'NIM/NIP', 'trim|required|numeric|is_unique[user.nim_nip]');
  //  $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
  //  $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'trim|required|numeric');
  //  $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
  //  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[conf_password]');
  //  $this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required');

  //  $config['upload_path'] = './assets/uploads/';
  //  $config['allowed_types'] = 'gif|jpg|png';
  //  $config['max_size']  = '100000';
  //  $config['max_width']  = '3024';
  //  $config['max_height']  = '2368';
   
  //  $this->load->library('upload', $config);
  
  //  if ($this->form_validation->run() == FALSE) {
  //   $this->load->view('user/register_view');
  //  } else {
  //    if ( ! $this->upload->do_upload('userfile')){
  //    $error = array('error' => $this->upload->display_errors());
     
  //    $this->form_validation->set_message('check_database', 'Dimensi gambar terlalu besar');
  //    $this->load->view('user/register_view');

  //   }
  //   else{
     
  //    $this->Loginmodel->insert();
  //    $this->load->view('v_login');
  //   }
  //  }
  // }


 public function logout()
 {
  $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('Login', 'refresh');
 }

  

 

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */

?>