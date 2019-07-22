<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
 {
  parent::__construct();
  if (!$this->session->userdata('logged_in')) {
			# code...
			redirect('login');
		}else{

 		 if ($this->session->userdata('logged_in')['level']!='admin') {
			# code...
			redirect('pernyataan');
				}
				else{
			  $this->load->library('session');
			  $this->load->library('form_validation');
			  $this->load->helper('url');
			  $this->load->model('model_pernyataan');
			  $this->load->model('model_dataset');
			  $this->load->model('model_hasil');
			  $this->load->model('model_admin');
		      $this->load->model('model_htmltopdf');
			}
		}
 }

	public function index()
	{
		
		
		$dataUser = $this->session->userdata['logged_in'];
		$d['data']=$this->model_admin->user_data();
		$this->load->view('admin/view_admin', $d);
		
		
	}

	public function dasboard()
	{
		$datalatih = $this->model_admin->jumlahDataLatih(); 
		$datauji = $this->model_admin->jumlahDataUji(); 
		$siswa = $this->model_admin->jumlahSiswa(); 
		$admin = $this->model_admin->jumlahAdmin();  
		$jumlahData = $datalatih + $datauji;
		$jumlahvisual = $this->model_admin->jumlahVisual();
		$jumlahaudio = $this->model_admin->jumlahAudio();
		$jumlahkines = $this->model_admin->jumlahKines();
		$d['data'] = array(
			'datalatih' => $datalatih,
			'datauji' => $datauji,
			'siswa' => $siswa,
			'admin' => $admin,
			'jumlah' =>$jumlahData,
			'visual' => $jumlahvisual,
			'audio' => $jumlahaudio,
			'kines' =>$jumlahkines,
			);
		$this->load->view('admin/dasboard', $d);
		// var_dump($d);
	}

	public function dasboardd($tipe)
	{
		$tipe = $this->input->post('pilihan',TRUE);
		$datalatih = $this->model_admin->jumlahDataLatih(); 
		$siswa = $this->model_admin->jumlahSiswa(); 
		$admin = $this->model_admin->jumlahAdmin();
		$jumlahData = $datalatih;
		$jumlahvisual = $this->model_admin->jumlahVisual();
		$jumlahaudio = $this->model_admin->jumlahAudio();
		$jumlahkines = $this->model_admin->jumlahKines();
		if ($tipe==0) {
			# code...
			
		}
		else if ($tipe==1) {
			$dataujicoba = 10/100 * $jumlahData;
			$datauji = number_format($dataujicoba);	
			$datalatih = $jumlahData - $datauji;
		}else if ($tipe==2) {
			# code...
			$dataujicoba = 20/100 * $jumlahData;
			$datauji = number_format($dataujicoba);	
			$datalatih = $jumlahData - $datauji;
		}else if ($tipe==3) {
			# code...
			$dataujicoba = 30/100 * $jumlahData;
			$datauji = number_format($dataujicoba);	
			$datalatih = $jumlahData - $datauji;
		}else if ($tipe==4) {
			$dataujicoba = 40/100 * $jumlahData;
			$datauji = number_format($dataujicoba);	
			$datalatih = $jumlahData - $datauji;
		}
		  
		
		$d['data'] = array(
			'datalatih' => $datalatih,
			'datauji' => $datauji,
			'siswa' => $siswa,
			'admin' => $admin,
			'jumlah' =>$jumlahData,
			'visual' => $jumlahvisual,
			'audio' => $jumlahaudio,
			'kines' =>$jumlahkines,
			);
		$this->load->view('admin/dasboard', $d);
		// var_dump($datauji);
	}

	function detail_datauji($jumlahDataUji){
		// $datalatih['datanya'] = $this->model_admin->detailDataLatih();
		// $datalatih['batas'] = $jumlahDataUji;
		// $this->load->view('admin/detail_data', $datalatih);
		// var_dump($datalatih);

			$this->load->helper('url');
			$this->load->library('dompdf_gen');
			$datalatih['datanya'] = $this->model_admin->detailDataLatih();
			$datalatih['batas'] = $jumlahDataUji;	
			$this->load->view('admin/v_detaildata',$datalatih);	
			$paper_size='A4';
			$html=$this->output->get_output();

			$dompdf= new DOMPDF();
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("".$idhasil."_".$nama.".pdf", array("Attachment"=>0));
			unset($html);
			unset($dompdf);	

	}

	function tambah(){
		$this->load->view('admin/v_inputuser');
	}

	function tambah_user(){

		$no_induk = $this->input->post('no_induk');
		$nama_user = $this->input->post('nama');
		$password = MD5($this->input->post('password'));
 		$level = $this->input->post('level');

		$data = array(
			'no_induk' => $no_induk,
			'nama' => $nama_user,
			'password' => $password,
			'level' => $level
			);
		$this->model_admin->input_data($data,'user');
		redirect('admin/index');
	}
 
	function edit($id_user){
		$where = array('id_user' => $id_user);
		$data['user'] = $this->model_admin->edit_data($where,'user')->result();
		$this->load->view('admin/v_edit',$data);
	}

	function update(){
	$id_user = $this->input->post('id_user');
	$no_induk = $this->input->post('no_induk');
	$nama = $this->input->post('nama');
	$password = MD5($this->input->post('password'));
	$level = $this->input->post('level');

	$data = array(
		'id_user' => $id_user,
		'no_induk' => $no_induk,
		'nama' => $nama,
		'password' => $password,
		'level' => $level
		);
 
		$where = array(
			'id_user' => $id_user
		);
 
		$this->model_admin->update_data($where,$data,'user');
		redirect('admin/index');
	}

	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->model_admin->hapus_data($where,'user');
		redirect('admin/index');
	}

	function tampil_gb(){
		$d['data']=$this->model_admin->gaya_belajar_data();
		$this->load->view('admin/view_gayabelajar', $d);

	}

	function edit_gb($id_gayabelajar){
		$where = array('id_gayabelajar' => $id_gayabelajar);
		$data['gaya_belajar'] = $this->model_admin->edit_datagb($where,'gaya_belajar')->result();
		$this->load->view('admin/v_editgb',$data);
	}

	function update_gb(){
	$id_gayabelajar = $this->input->post('id_gayabelajar');
	$gaya_belajar = $this->input->post('gaya_belajar');
	$saran_belajar = $this->input->post('saran_belajar');
	
	$data = array(
		'id_gayabelajar' => $id_gayabelajar,
		'gaya_belajar' => $gaya_belajar,
		'saran_belajar' => $saran_belajar,
		);
 
		$where = array(
			'id_gayabelajar' => $id_gayabelajar
		);
 
		$this->model_admin->update_datagb($where,$data,'gaya_belajar');
		redirect('admin/tampil_gb');
	}

	function tampil_pernyataan(){
		$d['data']=$this->model_admin->pernyataan_data();
		$this->load->view('admin/view_pernyataan', $d);

	}

	function edit_pernyataan($id_pernyataan){
		$where = array('id_pernyataan' => $id_pernyataan);
		$data['pernyataan'] = $this->model_admin->edit_datapernyataan($where,'pernyataan')->result();
		$this->load->view('admin/v_editpernyataan',$data);
	}

	function update_pernyataan(){
	$id_pernyataan = $this->input->post('id_pernyataan');
	$kode_pernyataan = $this->input->post('kode_pernyataan');
	$pernyataan = $this->input->post('pernyataan');
	
	$data = array(
		'id_pernyataan' => $id_pernyataan,
		'kode_pernyataan' => $kode_pernyataan,
		'pernyataan' => $pernyataan,
		);
 
		$where = array(
			'id_pernyataan' => $id_pernyataan
		);
 
		$this->model_admin->update_datapernyataan($where,$data,'pernyataan');
		redirect('admin/tampil_pernyataan');
	}

	function tampil_dataset(){
		$d['data']=$this->model_admin->dataset_data_dist();
		$d['datadetail']=$this->model_admin->dataset_data();
		//echo '<pre> jumlah pertanyaan = ' . var_export($d, true) . '</pre>';

		$this->load->view('admin/v_datalatih', $d);

	}

	function tambah_dataset(){
		$data['data_gb'] = $this->model_admin->getGayaBelajar();
		$this->load->view('admin/v_tambahdataset', $data);
		// var_dump($data);

	}

	function input_dataset(){

		$nama_user = $this->input->post('nama');
 		$gayabelajar = $this->input->post('id_gayabelajar');

		$data = array(
			'nama' => $nama_user,
			'id_gayabelajar' => $gayabelajar,
			);
		$id_dataset = $this->model_admin->insertDataset($data);
		$this->inputNilai($id_dataset);	
	}

	function inputNilai($id_dataset){
		$data['id_dataset'] = $id_dataset;
		$this->load->view('admin/v_tambahnilai',$data);	
	}

	function tambah_nilai($id_dataset){

		for ($i=0; $i <27 ; $i++) { 
			$data = array(
			'id_dataset' => $id_dataset,
			'id_pernyataan' => $i+1,
			'nilai' => $this->input->post($i),
			);
		$this->model_admin->insertNilaiDataset($data);
			// var_dump($data);
		}
	}

	function hapusDataset($id_dataset){
		$where = array('id_dataset' => $id_dataset);
		$this->model_admin->hapus_data($where,'dataset');
		$this->model_admin->hapus_data($where,'detail_dataset');		
		redirect('admin/index');
	}
		// $nama_user = $this->input->post('nama');
 		// $gayabelajar = $this->input->post('id_gayabelajar');

		// $data = array(
		// 	'nama' => $nama_user,
		// 	'id_gayabelajar' => $gayabelajar,
		// 	);
		// $id_dataset = $this->model_admin->insertDataset($data);
		// $this->inputNilai($id_dataset);	
	function inputSementara(){
		$this->load->view('admin/tambahsementara');	
	}

	function tambah_nilaisementara(){

		for ($i=0; $i <27 ; $i++) { 
			$dataset = $this->input->post('id_dataset');
			$data = array(
			'id_dataset' => $dataset,
			'id_pernyataan' => $i+1,
			'nilai' => $this->input->post($i),
			);
		$this->model_admin->insertNilaiDataset($data);
			var_dump($data);
		}

	}

	function get_detail_hasilnya($id_user){
		$data['hasil']=$this->model_admin->get_data_hasil($id_user);	
		$this->load->view('admin/view_detail_hasil',$data);
		// var_dump($data);
	}

	function hapus_hasil_user($id_hasil){
		$where = array('id_hasil' => $id_hasil);
		$this->model_admin->hapus_data($where,'hasil');
		$this->model_admin->hapus_data($where,'detail_hasil');		
		redirect('admin/index');
	}

	public function pdfdetails($idhasil)
	{		

			$user = $this->session->userdata('logged_in');
			$nama = $user['nama'];
			$this->load->helper('url');
			$this->load->library('dompdf_gen');
			$data['hasil']=$this->model_hasil->tampilHasil($idhasil);	
			$this->load->view('siswa/view_pdf',$data);	
			$paper_size='A4';
			$html=$this->output->get_output();

			$dompdf= new DOMPDF();
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("".$idhasil."_".$nama.".pdf", array("Attachment"=>0));
			unset($html);
			unset($dompdf);		

	}

	public function tambahExcel()
	{
	    $this->load->library('form_validation');
        $data = array(
            'action' => site_url('admin/input'),
            'judul' => set_value('judul'),
            //'error' => $error['error'] // ambil parameter error
        );
        $this->load->view("admin/v_tambahexcel", $data);
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
                redirect('admin/tampil_dataset');
            }
    }

    public function inputDatabase($input)
        {
            $inputFileName="./temp_upload/".$input;
            
            $this->load->library('PHPExcel');
            $this->load->library('PHPExcel/IOFactory');
            $this->load->model('model_admin');
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
                $gayabelajar = $rowData[0][28];
                if ($gayabelajar=='Visual') {
                    $gayabelajar = 1;
                }else if ($gayabelajar=='Auditory') {
                    # code...
                    $gayabelajar = 2;
                }else if ($gayabelajar=='Kinestetik') {
                    # code...
                    $gayabelajar = 3;
                }    
                $data = array(
                    "nama"=> $rowData[0][0],
                    "id_gayabelajar"=>$gayabelajar, 
                     );
                $id = $this->model_admin->insert($data);
                for ($i=0; $i <27 ; $i++) { 
                    $datas = array( 'id_dataset' => $id,
                                    'id_pernyataan' => $i+1,
                                    'nilai' => $rowData[0][$i+1],
                                    );

                    $this->model_admin->insertNilai($datas);
                    }
                }
                
            }
            return true;
            redirect('admin/tampil_dataset');
        }

    public function lihatHitung(){
		$d['datahitung']=$this->model_admin->data_hitung();
		//echo '<pre> jumlah pertanyaan = ' . var_export($d, true) . '</pre>';

		$this->load->view('admin/v_hitungNaive', $d);
    }    

    public function hitungNaiveBayes($id_hasil){
		//Prior
		$jumlahDatasetGB = array(
			$jumlah_dataset_visual = $this->model_dataset->jumlahDatasetVisual(),
			$jumlah_dataset_audio = $this->model_dataset->jumlahDatasetAudio(),
			$jumlah_dataset_kinestetik = $this->model_dataset->jumlahDatasetKinestetik()
			);
		// echo '<pre>' . var_export($jumlahDatasetGB, true) . '</pre>';

		$total_dataset = $jumlah_dataset_visual+$jumlah_dataset_audio+$jumlah_dataset_kinestetik;

		$prior_visual = $jumlah_dataset_visual / $total_dataset;
		$prior_audio = $jumlah_dataset_audio / $total_dataset;
		$prior_kinestetik = $jumlah_dataset_kinestetik / $total_dataset;

		//Likelihood
		$id_pernyataan = $this->model_pernyataan->ambil_id_pernyataan();
		$hasil_siswa = $this->model_hasil->hasilSiswa($id_hasil);


		// $a = $this->model_dataset->jumlahKemungkinan(3, 1, 1);
		// var_dump($a);
		// echo '<pre>' . var_export($hasil_siswa, true) . '</pre>';
		$posteriorVisual=1;
		$posteriorAudio=1;
		$posteriorKinestetik=1;
		$gayaBelajarFinal=0;
		
		$tampilLikeVisual=array();
		$tampilLikeAudio=array();
		$tampilLikeKines=array();
		$indexForTampilLike=0;

		foreach ($hasil_siswa as $key) {
			
			for ($i=1; $i <= 3 ; $i++) { 
				$a=$key->id_pernyataan;
				$b=$key->nilai;
				$hasilNya=$this->model_dataset->jumlahKemungkinan($b, $a, $i);
				$hasilLikeli = ($hasilNya + 1) / ($jumlahDatasetGB[$i-1] + 3);
				if ($i==1) {
					$tampilLikeVisual[$indexForTampilLike] = $hasilLikeli;
					$posteriorVisual = $posteriorVisual*$hasilLikeli;
				}else if ($i==2) {
					# code...
					$tampilLikeAudio[$indexForTampilLike] = $hasilLikeli;
					$posteriorAudio = $posteriorAudio*$hasilLikeli;
				}else if ($i==3) {
					# code...
					$tampilLikeKines[$indexForTampilLike] = $hasilLikeli;
					$posteriorKinestetik = $posteriorKinestetik*$hasilLikeli;
				}
			
			}
			$indexForTampilLike++;
		}
		
		$posteriorVisual = $posteriorVisual*$prior_visual;
		$posteriorAudio = $posteriorAudio*$prior_audio;
		$posteriorKinestetik = $posteriorKinestetik*$prior_kinestetik;
		$posteriorTerbesar = max($posteriorVisual, $posteriorKinestetik, $posteriorAudio);
		if ($posteriorVisual == $posteriorTerbesar) {
			$gayaBelajarFinal=1;
		}else if ($posteriorAudio == $posteriorTerbesar) {
			# code...
			$gayaBelajarFinal=2;
		}else if ($posteriorKinestetik == $posteriorTerbesar) {
			# code...
			$gayaBelajarFinal=3;
		}
		// var_dump($id_hasil);
		$tampilHasilSemua['data'] = array(
						'PriorVisual' => $prior_visual,
						'PriorAudio' => $prior_audio,
						'PriorKines' => $prior_kinestetik,
						'LikeliVisual' => $tampilLikeVisual,
						'LikeliAudio' => $tampilLikeAudio,
						'LikeliKines' => $tampilLikeKines,
						'PosteriorVisual' => $posteriorVisual,
						'PosteriorAudio' => $posteriorAudio,
						'PosteriorKines' => $posteriorKinestetik,
						'PosteriorTerbesar' => $posteriorTerbesar
						);
		$this->load->view('admin/v_hasilNaive',$tampilHasilSemua);
		// echo '<pre>' . var_export($tampilHasilSemua, true) . '</pre>';
		}

}

