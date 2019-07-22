<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Excel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // load helper dan library
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index($error = NULL)
    {
        $data = array(
            'action' => site_url('excel/proses'),
            'judul' => set_value('judul'),
            'error' => $error['error'] // ambil parameter error
        );
        $this->load->view('view_excel', $data);
    }
    public function proses()
    {
        // validasi judul
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            // jika validasi judul gagal
            $this->index();
        } else {
            // config upload
            $file_name = $this->input->post('judul');
            $config['upload_path'] = './temp_upload/';
            $config['allowed_types'] = 'xls|xlsx' ;
            $config['max_size'] = '10000';
            //$config['file_name'] = $file_name;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('gambar')) {
                // jika validasi file gagal, kirim parameter error ke index
                $error = array('error' => $this->upload->display_errors());
                $this->index($error);
            } else {
              // // jika berhasil upload ambil data dan masukkan ke database
              $upload_data = $this->upload->data();
              // load library Excell_Reader
              $this->load->library('Excel_reader');
              // //tentukan file
              $this->excel_reader->setOutputEncoding('230787');
              $file = $upload_data['file_name'];
              $path = './temp_upload/'.$file;
              //$file = "./temp_upload/".fi;
              $this->excel_reader->read($path);
              error_reporting(E_ALL ^ E_NOTICE);
              // // array data
              $data = $this->excel_reader->sheets[0];
              $dataexcel = Array();
              for ($i = 1; $i <= $data['numRows']; $i++) {
                   if ($data['cells'][$i][1] == '')
                       break;
                   $dataexcel[$i - 1]['nama'] = $data['cells'][$i][1];
                   $dataexcel[$i - 1]['gaya_belajar'] = $data['cells'][$i][2];
              }
              // load model
              $this->load->model('Model_excel');
              $this->Model_excel->loaddata($dataexcel);
              // //delete file
              //$file = $upload_data['file_name'];
              //$path = './temp_upload/' . $file;
              //unlink($path);
            }
        // redirect ke halaman awal
        // redirect(site_url('out'));
        }
    }
}