<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pernyataan extends CI_Controller {

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
		   if ($this->session->userdata('logged_in')['level']!='siswa') {
					# code...
					redirect('admin');
				}	
				else{
		  $this->load->library('session');
		  $this->load->library('form_validation');
		  $this->load->helper('url');
		  $this->load->model('model_pernyataan');
		  $this->load->model('model_dataset');
		  $this->load->model('model_hasil');
	      $this->load->helper('cookie');
	      $this->load->model('model_htmltopdf');
		  // $this->load->library('pdf');

			}
	}
 }

	public function index()
	{
		$dataUser = $this->session->userdata['logged_in'];
		$data['riwayat']=$this->model_hasil->riwayathasil($dataUser['id_user']);
		$this->load->view('siswa/view_siswa',$data);
		// var_dump($data);
		// var_dump($data);
		// var_dump($dataUser);
		
	}

	public function insertHasil(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggalUjian = date('Y-m-d H:i:s');
		$dataUser = $this->session->userdata['logged_in'];
		$user = $dataUser['id_user'];
		$data=array('id_user'=>$user, 
					'tanggal_tes'=>$tanggalUjian, 
					'id_gayabelajar'=>1);
		// var_dump($user);
		$idHasilInObject = $this->model_pernyataan->get_lastidhasil($user);
		$idhasil = 0;
		foreach ($idHasilInObject as $key) {
			$idHasil = $key;
		}
		if ( !is_null($idHasil) || $idHasil != 0 ) {
			$jumlahDataDetailInObject = $this->model_pernyataan->get_detailidhasil($idHasil);
			$jumlahDataDetail = 0;
			foreach ($jumlahDataDetailInObject as $key) {
				$jumlahDataDetail = $key;
			}
			if ($jumlahDataDetail < 27) {
				$this->pernyataanData($idHasil);
			} else if($jumlahDataDetail >= 27){
				$idHasil = $this->model_pernyataan->insertHasil($data);
				$this->pernyataanData($idHasil);
			}
			
		}else{
			$idHasil = $this->model_pernyataan->insertHasil($data);
			$this->pernyataanData($idHasil);	
		}
	}
	
	public	function pernyataanData($idHasil){

		$data['pernyataan']=$this->model_pernyataan->pernyataan_data();
		$data['data_user'] = $this->session->userdata;
		$data['id_hasil'] = $idHasil;

		// save session id asil ;
		$this->session->set_userdata('id_hasil', $idHasil);

		// var_dump($data);
		$this->load->view('siswa/view_pernyataan',$data);
		
	}

	public function insertPernyataan(){
		$pernyataan=$this->model_pernyataan->pernyataan_data();
		$jumlah_pernyataan = count($pernyataan);
		// $idhasil=$this->input->post("id_hasil");
		$idhasil=$this->session->userdata('id_hasil');
		//panggil session id_hasil
		// var_dump($idhasil);
		$jawabann = explode('&', file_get_contents("php://input"));
		// var_dump($jawaban);

		//panggil cookis dengan parameter jawaban


		echo '<pre> jumlah pertanyaan = ' . var_export($jumlah_pernyataan, true) . '</pre>';	
		for ($i=0; $i <$jumlah_pernyataan ; $i++) { 
			// var_dump($i);s
			# code...
			$jawaban=$this->input->post("radio$i");
			$idsoal=$this->input->post("soal$i");

			// var_dump($jawaban);	
					
			$data=array('id_hasil'=> $idhasil, 'nilai'=>$jawaban, 'id_pernyataan'=>$idsoal);
			$this->model_pernyataan->insertJawaban($data);

		}
		$this->session->unset_userdata('id_hasil');
		$this->hitungNaiveBayes($idhasil);
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
	
		foreach ($hasil_siswa as $key) {
			
			for ($i=1; $i <= 3 ; $i++) { 
				$a=$key->id_pernyataan;
				$b=$key->nilai;
				$hasilNya=$this->model_dataset->jumlahKemungkinan($b, $a, $i);
				$hasilLikeli = ($hasilNya + 1) / ($jumlahDatasetGB[$i-1] + 3);
				if ($i==1) {
					$posteriorVisual = $posteriorVisual*$hasilLikeli;
				}else if ($i==2) {
					# code...
					$posteriorAudio = $posteriorAudio*$hasilLikeli;
				}else if ($i==3) {
					# code...
					$posteriorKinestetik = $posteriorKinestetik*$hasilLikeli;
				}
			
			}

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
		$this->model_hasil->updatGayaBelajar($id_hasil, $gayaBelajarFinal);
		$this->tampilHasil($id_hasil);	
		}

		function tampilHasil($idhasil){
			$data['hasil']=$this->model_hasil->tampilHasil($idhasil);	
			$this->load->view('siswa/view_hasilujian',$data);
			var_dump('');
			

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
			// var_dump($idhasil);
			// // var_dump($html_content);
			// $this->pdf->loadHtml($html_content);
			// $this->pdf->render();
			// $this->pdf->stream("".$idhasil.".pdf", array("Attachment"=>0));
			// $dompdf = new DOMPDF();
			// $dompdf->load_html($html_content);
			// $dompdf->render();
			// $dompdf->stream("".$idhasil.".pdf");

	}

	}

