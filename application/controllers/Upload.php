<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function index(){
        $this->load->library('form_validation');
        $data = array(
            'action' => site_url('upload/input'),
            'judul' => set_value('judul'),
            //'error' => $error['error'] // ambil parameter error
        );
        $this->load->view("view_excel", $data);
    }

    public function input(){
            $fileName = date('ydmshh').".xls"; 
            $config['upload_path'] = './temp_upload/'; //buat folder dengan nama assets di root folder
            $config['file_name'] = $fileName;
            $config['allowed_types'] = 'xls|xlsx|csv';
            $config['max_size'] = 10000;
             
            $this->load->library('upload');
            $this->upload->initialize($config);
             
            if(!$this->upload->do_upload('gambar')){
                $this->upload->display_errors();
            }
            else{
                $this->inputDatabase($fileName);
            }
    }
    public function inputDatabase($input)
        {
            $inputFileName="./temp_upload/".$input;
            
            $this->load->library('PHPExcel');
            $this->load->library('PHPExcel/IOFactory');
            $this->load->model('model_excel');
            try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $th=''; 
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
                // $data = $sheet->rangeToArray('C50:C54' ,NULL,TRUE,FALSE);
                if($rowData[0][1]==null)
                {
                    $row=($highestColumn+1);
                    break;
                }         
                else
                {                     
                //Sesuaikan sama nama kolom tabel di database    
                $gayabelajar = $rowData[0][4];
                if ($gayabelajar=='visual') {
                    $gayabelajar = 1;
                }else if ($gayabelajar=='auditory') {
                    # code...
                    $gayabelajar = 2;
                }else if ($gayabelajar=='kinestetik') {
                    # code...
                    $gayabelajar = 3;
                }    
                $data = array(
                    "nama"=> $rowData[0][0],
                    "gayabelajar"=>$gayabelajar, 
                     );
                $id = $this->model_excel->insert($data);
                for ($i=0; $i <3 ; $i++) { 
                    $datas = array( 'id_excel' => $id,
                                    'id_pernyataan' => $i+1,
                                    'nilai' => $rowData[0][$i+1],
                                    );

                    $this->model_excel->insertNilai($datas);
                    }
                }
                
            }
            return true;
        }
}