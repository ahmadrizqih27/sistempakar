<!DOCTYPE html>
<html lang="en">
<?php $user=$this->session->userdata['logged_in'];?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Pakar Gaya Belajar</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?=base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="<?=base_url();?>assets/css/styletab.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav id="menu" class="navbar navbar-default navbar-fixed-top">

  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Sistem Pakar Gaya Belajar</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#page-top" class="page-scroll">Gaya Belajar</a></li>
        <li><a href="#about" class="page-scroll">Mulai Test</a></li>
        <li><a href="#services" class="page-scroll">Riwayat Identifikasi</a></li>
        <li><a onclick="return confirm('<?php echo $user['nama']?>, Apakah Anda Yakin Ingin Keluar ?');" href="<?php echo site_url('login/logout')?>" >Keluar</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- <h1><span></span></h1>
            <p>.</p> -->
<!-- Gallery Section -->
<div id="portfolio" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Gaya Belajar Itu Penting?</h2>
      <p>Gaya belajar adalah kunci untuk mengembangkan kemampuan setiap individu dalam belajar. </br>Jika kita telah mengetahui gaya belajar kita apa, maka kita dapat mengambil langkah- langkah</br> penting untuk membantu diri kita agar belajar lebih cepat dan lebih mudah. Gaya atau cara</br> belajar ini sangat penting untuk diketahui. Kita akan melihat bahwa tiap orang belajar dan </br>mencoba memahami sesuatu dengan caranya masing-masing.</p>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <div class="hover-text">
                 <a href="#testimonials" class="page-scroll">
                <h4 >GAYA BELAJAR VISUAL </h4>
                </div>

              <img src="<?php echo base_url(); ?>/assets/img/portfolio/visual.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <div class="hover-text">
                <a href="#team" class="page-scroll">
                <h4 >GAYA BELAJAR AUDITORI </h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/audio.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <div class="hover-text">
                <a href="#features" class="page-scroll">
                <h4 >GAYA BELAJAR KINESTETIK </h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/kines.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        
    </div>
  </div>
</div>
</div>
<!-- About Section -->


<!-- Features Section -->
<div id="about" class="text-center">
  <div class="container">
    <div class="section-title">
    </br></br></br></br></br></br></br>
    <h1>Selamat Datang  <?php echo $user['nama']?></h1>
      <h1>Untuk Memulai Identifikasi Silahkan klik Tombol Dibawah</h1>
      </br>
       <!-- <img src="<?php echo base_url();?>assets/adminassets/img/logoujian.jpg"class="center" alt="" style="width:120px;height:120px;">  -->
       </div> 
    </div>
   <div class="row">
      <div class="col-xs-6 col-md-12"> <i class="fa fa-comments-o"></i>

          <a href="<?php echo site_url('pernyataan/insertHasil')?>" class="btn btn-custom btn-lg page-scroll">Mulai Identifikasi Gaya Belajarmu</a>  </br></br></br>  
      </div>
    </div>
    </div>
  </div>
  </br></br></br></br></br>
</div>
</div>

<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Riwayat Identifikasi</h2>
      <p></p>
    </div>
    <div class="container">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                 <thead>
                                                <tr>

                                                    <th  data-field="state" data-checkbox="" ><center>No.</center></th>
                                                    <th ><center>Gaya Belajar</center></th>
                                                    <th ><center>Tanggal Ujian</center></th>
                                                    <th ><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;foreach($riwayat as $u){ ?>
                                                <?php
                                                    $datat = $u->tanggal_tes; 
                                                                                       // echo $datat;
                                                    $tanggal=substr($datat, 8,2);
                                                    $bulan= Ubahbln(substr($datat, 5,2));
                                                    $tahun=substr($datat, 0,4);
                                                    $jam=substr($datat, 11,8);
                                                    ?>
                                                  <tr>
                              
                                                    <td><center><?php echo $no++ ?></center></td>
                                                    <td><center><?php echo $u->gaya_belajar ?></center></td>
                                                    <td><?php echo $tanggal." ".$bulan." ".$tahun.", Pukul ".$jam;?></td>
                                                    <td><center>
                                                   <a href="<?php echo site_url('pernyataan/tampilHasil/'.$u->id_hasil);?>"  class="btn btn-default btn-sm" ><i class="glyphicon glyphicon-envelope"> Preview</i></a>  

                                                     </center>
                                                    </td>
                                                   <!--  <td><center><a href="<?php echo site_url('admin/edit/'.$u->id_user);?>"><i class="glyphicon glyphicon-edit"></i></a>
                                                    &nbsp &nbsp &nbsp
                                                    <button class="btn btn- btn-xs" href="#" data-toggle="modal" data-target="#DangerModalftblack<?php echo $u->id_user;?>"><i class="glyphicon glyphicon-trash"></i></button>
                            
                                                            <div id="DangerModalftblack<?php echo $u->id_user;?>" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-close-area modal-close-df">
                                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                                                            <p>Apakah anda yakin ingin menghapus data "<?php echo $u->nama;?>" ?</p>
                                                                        </div>
                                                                        <div class="modal-footer footer-modal-admin">
                                                                            <center>
                                                                            <a style="color: yellow" href="<?php echo site_url('admin/hapus/'.$u->id_user);?>">Iya Yakin</a>
                                                                            <a style="color: yellow" data-dismiss="modal" href="">Tidak</a>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></center></td> -->

                                                    <!-- <a href="<?php echo site_url('cruduser/hapus/'.$u->id_user);?>"><i class="glyphicon glyphicon-trash"></i></a></center></td> -->
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                </table>
    </div>
  </div>
</div>

<!-- VISUAL -->
<div id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url(); ?>/assets/img/visual.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>VISUAL</h2>
          <p><b>Gaya Belajar Visual</b> (Visual Learners) menitik beratkan pada ketajaman penglihatan. Artinya, bukti-bukti konkret harus diperlihatkan terlebih dahulu agar mereka paham Gaya belajar seperti ini mengandalkan penglihatan atau melihat dulu buktinya untuk kemudian bisa mempercayainya. Ada beberapa karakteristik yang khas bagai orang-orang yang menyukai gaya belajar visual ini. <b>Pertama</b> adalah kebutuhan melihat sesuatu (informasi/pelajaran) secara visual untuk mengetahuinya atau memahaminya,<b> kedua</b> memiliki kepekaan yang kuat terhadap warna,<b> ketiga</b> memiliki pemahaman yang cukup terhadap masalah artistik, <b>keempat</b> memiliki kesulitan dalam berdialog secara langsung,<b> kelima</b> terlalu reaktif terhadap suara,<b> keenam</b> sulit mengikuti anjuran secara lisan, <b>ketujuh</b> seringkali salah menginterpretasikan kata atau ucapan.</p>
          <h3>Ciri-ciri gaya belajar visual</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li><p style="font-size: 13px" >&bull; Cenderung melihat sikap, gerakan, dan bibir guru yang sedang mengajar</p> </li>
                <li><p style="font-size: 13px" >&bull; Bukan pendengar yang baik saat berkomunikasi</p></li>
                <li><p style="font-size: 13px" >&bull; Tak suka bicara didepan kelompok dan tak suka pula mendengarkan orang lain. Terlihat pasif dalam kegiatan diskusi.</p></li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>                
                <li><p style="font-size: 13px" >&bull; Kurang mampu mengingat informasi yang diberikan secara lisan</p> </li>
                <li><p style="font-size: 13px" >&bull; Dapat duduk tenang ditengah situasi yang rebut dan ramai tanpa terganggu</p></li>
                <li><p style="font-size: 13px" >&bull; Lebih suka peragaan daripada penjelasan lisan</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!-- AUDIO -->
<div id="team">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url(); ?>/assets/img/audio.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Auditory</h2>
          <p><b>Gaya belajar Auditori</b> (Auditory Learners) mengandalkan pada pendengaran untuk bisa memahami dan mengingatnya. Karakteristik model belajar seperti ini benar-benar menempatkan pendengaran sebagai alat utama menyerap informasi atau pengetahuan. <b>Artinya</b>, kita harus mendengar, baru kemudian kita bisa mengingat dan memahami informasi itu. Karakter pertama orang yang memiliki gaya belajar ini adalah semua informasi hanya bisa diserap melalui pendengaran, kedua memiliki kesulitan untuk menyerap informasi dalam bentuk tulisan secara langsung, ketiga memiliki kesulitan menulis ataupun membaca.</p>
          <h3>Ciri-ciri gaya belajar Auditory</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li><p style="font-size: 13px" >&bull; Mampu mengingat dengan baik penjelasan guru di depan kelas, atau materi yang didiskusikan dalam kelompok/ kelas</p> </li>
                <li><p style="font-size: 13px" >&bull; Pendengar ulung: anak mudah menguasai materi iklan, lagu di tv ataupun radio</p></li>
                <li><p style="font-size: 13px" >&bull; Cenderung banyak omong.</p></li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>                
                <li><p style="font-size: 13px" >&bull; Kurang cakap dalm mengerjakan tugas mengarang/ menulis</p> </li>
                <li><p style="font-size: 13px" >&bull; Senang berdiskusi dan berkomunikasi dengan orang lain</p></li>
                <li><p style="font-size: 13px" >&bull; Kurang tertarik memperhatikan hal-hal baru dilingkungan sekitarnya, seperti hadirnya  anak baru, adanya papan pengumuman di pojok kelas, dll</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</br>
</br>
</br>
</br>


<!-- KINES -->
<div id="features">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url(); ?>/assets/img/kines.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>KINESTETIK</h2>
          <p><b>Gaya belajar Kinestetik</b> (Kinesthetic Learners) mengharuskan individu yang bersangkutan menyentuh sesuatu yang memberikan informasi tertentu agar ia bisa mengingatnya. Tentu saja ada beberapa karakteristik model belajar seperti ini yang tak semua orang bisa melakukannya. <b>Karakter pertama</b> adalah menempatkan tangan sebagai alat penerima informasi utama agar bisa terus mengingatnya. Hanya dengan memegangnya saja, seseorang yang memiliki gaya  ini bisa menyerap informasi tanpa harus membaca penjelasannya.</p>
          <h3>Ciri-ciri gaya belajar Kinestetik</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li><p style="font-size: 13px" >&bull; Menyentuh segala sesuatu yang dijumpainya, termasuk saat belajar</p> </li>
                <li><p style="font-size: 13px" >&bull; Sulit berdiam diri atau duduk manis, selalu ingin bergerak</p></li>
                <li><p style="font-size: 13px" >&bull; Suka menggunakan objek nyata sebagai alat bantu belajar</p></li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>                
                <li><p style="font-size: 13px" >&bull; Sulit menguasai hal-hal abstrak seperti peta, symbol dan lambing</p> </li>
                <li><p style="font-size: 13px" >&bull; Menyukai praktek/ percobaan</p></li>
                <li><p style="font-size: 13px" >&bull; Menyukai permainan dan aktivitas fisik</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</br>
</br>
</br>
</br>

</body>
</html>

<?php
function Ubahbln ($namabln){
  switch ($namabln) {
    case 1:
      return 'Januari';
      break;
    case 2:
      return 'February';
      break;
    case 3:
      return 'Maret';
      break;
    case 4:
      return 'April';
      break;
    case 5:
      return 'Mei';
      break;
    case 6:
      return 'Juni';
      break;
    case 7:
      return 'Juli';
      break;
    case 8:
      return 'Agustus';
      break;
    default:
      return $namabln;
      break;
  }
}
?>
 <!-- JavaScript files-->
<script src="<?php echo base_url('') ?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/nivo-lightbox.js"></script>  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/contact_me.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>