<!DOCTYPE html>
<html lang="en">
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
    
 <?php $no = 1;foreach($hasil as $u){ ?>
                  <?php
                    $datat = $u->tanggal_tes; 
                                                       // echo $datat;
                    $tanggal=substr($datat, 8,2);
                    $bulan= Ubahbln(substr($datat, 5,2));
                    $tahun=substr($datat, 0,4);
                    ?>                         

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('pernyataan/pdfdetails/'.$u->id_hasil);?>" ><i class="glyphicon glyphicon-envelope"> </i> Cetak Hasil</a></li>
      <li><a href="<?php echo site_url('pernyataan')?>" >Kembali</a></li>      
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>

<!-- VISUAL -->
 

<div id="testimonials">
    <div class="container" align="center">
       <table  width="595px" cellspacing="0" rules="none" border="1" style="background-color: white;  height: 842px;">
                           
                                                 <tr  >
                                                   <td rowspan="3"><img style="width: 113px; margin: 10px;"  align="right" src="<?php echo base_url();?>assets/adminassets/img/tut.png"></td>

                                                    <td width="430" height="60" valign="bottom" style="font-size: 26;"><b>SDN SUMBERSARI 3 MALANG</b></td>
                                                </tr> 

                                                <tr >
                                                    <td height="5" align="left" valign="top" style="font-size: 10;" >Jl. Terusan Ambarawa, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</td>
                                                </tr>
                                                  <tr >
                                                    <td height="30" align="left" valign="top"  style="font-size: 10;" >E-mail: sdnsumbersari3@gmail.com  Telepon: (0341) 569730</td>
                                                </tr>

                                                 <tr height="5" >
                                                    <td colspan="2" valign="top" height="5" ><center><img  src="<?php echo base_url();?>img/garis.png"></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="50"style="font-size: 24;"><center><b>SERTIFIKAT GAYA BELAJAR SISWA</b></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="50"style="font-size: 14;"><center>Diberikan Kepada :</center></td>
                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="80"style="font-size: 35;"><center><b><?php echo $u->nama ?></b></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="60"style="font-size: 25;"><center>Dengan Gaya Belajar " <?php echo $u->gaya_belajar ?> "</center></td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="bottom" height="50"style="font-size: 14;"><center>Saran Belajar :</center></td>

                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="justify" height="150" width="400" style="font-size: 13; padding: 24px;">" <?php echo $u->saran_belajar ?> "</td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="right" width="400" style="font-size: 16; padding: 15px;">Malang, <?php echo $tanggal." ".$bulan." ".$tahun;?></td>
                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="top" align="right" height="10" width="400" style="font-size: 16; padding-right: 15px">Safriadi Kasijanto Spd.</td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="right" height="60" width="400" style="font-size: 16; padding-right: 15px">NIP. 1238216869</td>
                                                </tr>
                                                 


                                                <?php } ?>

                </table>
    </div>





</body>
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
    case 9:
      return 'September';
      break;
    case 10:
      return 'Oktober';
      break;
    case 11:
      return 'November';
      break;
    case 12:
      return 'Desember';
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