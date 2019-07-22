<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Interact</title>
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
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Sistem Pakar Gaya Belajar</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3"> 
       
        </div>
      <div class="col-xs-12 col-md-6">
<form id="regForm" method="POST" action="<?php echo site_url('pernyataan/insertPernyataan')?>">

  <!-- One "tab" for each step in the form: -->
   <?php
      if (!empty($pernyataan)) {
        # code...
        $i=0;
        foreach ($pernyataan as $row ) {
          # code...
          $id=$row->id_pernyataan;
          ?>

  <div class="tab">
    
    <table class="table table-borderless" align="center" border="0"  style="border-color:white;border: 0px; "; >
   
   
   
    <p style="font-size: 18px"><?=$i+1?>. <?=$row->pernyataan?></p>
     
    <input type="hidden" name="soal<?php echo $i;?>" value="<?php echo $id?>"></input>
       <tr>
            <td>Sangat Setuju</td>
             <td><input name="radio<?php echo $i;?>" type="radio" class="flat" id="radio_4_<?php echo $i;?>" value="4"></td> 
       </tr>

       <tr >
            <td >Setuju</td>
        <td> <input name="radio<?php echo $i;?>" type="radio" class="flat" id="radio_3_<?php echo $i;?>" value="3"></td>
        </tr>

        <tr >
            <td >Kurang Setuju</td>
        <td><input name="radio<?php echo $i;?>" type="radio" class="flat" id="radio_2_<?php echo $i;?>" value="2"> </td>
        </tr>

        <tr >
            <td >Tidak Setuju</td>
        <td><input name="radio<?php echo $i;?>" type="radio" class="flat" id="radio_1_<?php echo $i;?>" value="1"> </td> 
        </tr>
    

    </table>
  </div>
<?php
        $i++;}?>
  
  <div style="overflow:auto;">
          <?php
      }
    ?> 
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        
    </div>
 
  </div>


      
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
     <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>



  </div>

  <!-- <?php var_dump($data_user)?> -->

</form>


            
        </div>

      

          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2019 Sistem Pakar Identifikasi Gaya Belajar</p>
  </div>
</div>
 <!-- JavaScript files-->
<script src="<?php echo base_url('') ?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/contact_me.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>