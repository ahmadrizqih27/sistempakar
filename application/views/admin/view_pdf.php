<div class="container" align="center">
       <table  width="595px" cellspacing="0" rules="none" border="1" style="background-color: white;  height: 842px;">
                  <?php $no = 1;foreach($hasil as $u){ ?>
                  <?php
                    $datat = $u->tanggal_tes; 
                                                       // echo $datat;
                    $tanggal=substr($datat, 8,2);
                    $bulan= Ubahbln(substr($datat, 5,2));
                    $tahun=substr($datat, 0,4);
                    ?>                                   
                                                 <tr  >
                                                   <td rowspan="3"><img style="width: 113px; padding-left: 30px; padding-bottom: 10px"  align="right" src="<?php echo base_url();?>assets/adminassets/img/tut.png"></td>

                                                    <td width="430"  valign="bottom" style="font-size: 26; padding-left: 45px; padding-top: 65px; "><b>SDN SUMBERSARI 3 MALANG</b></td>
                                                </tr> 

                                                <tr >
                                                    <td align="left" valign="top" style="font-size: 10; padding-left: 45px; padding-bottom: 23px;" >Jl. Terusan Ambarawa, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</td>
                                                </tr>
                                                  <tr >
                                                    <td  align="left" valign="top"  style="font-size: 10; padding-left: 45px; padding-top: 40px;" >E-mail: sdnsumbersari3@gmail.com  Telepon: (0341) 569730</td>
                                                </tr>

                                                 <tr height="5" >
                                                    <td colspan="2" valign="top" height="5" style="padding-top: 15px" ><center><img  src="<?php echo base_url();?>img/garis.png"></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="50"style="font-size: 22;"><center><b>SERTIFIKAT GAYA BELAJAR SISWA</b></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="50"style="font-size: 14;"><center>Diberikan Kepada :</center></td>
                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="80"style="font-size: 30;"><center><b><?php echo $u->nama ?></b></center></td>

                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" height="40"style="font-size: 23;"><center>Dengan Gaya Belajar " <?php echo $u->gaya_belajar ?> "</center></td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="bottom" style="font-size: 14;"><center>Saran Belajar :</center></td>

                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="justify"  width="400" style="font-size: 12; padding: 24px; padding-right: 40px;">" <?php echo $u->saran_belajar ?> "</td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="right" width="400" style="font-size: 13; padding: 15px;  padding-right: 40px;">Malang, <?php echo $tanggal." ".$bulan." ".$tahun;?></td>
                                                </tr>
                                                <tr >
                                                    <td colspan="2" valign="bottom" align="right" height="80" width="400" style="font-size: 13; padding-right: 40px">Safriadi Kasijanto Spd.</td>
                                                </tr>
                                                 <tr >
                                                    <td colspan="2" valign="top" align="right" width="400" style="font-size: 13; padding-right: 40px">NIP. 1238216869</td>
                                                </tr>
                                                 


                                                <?php } ?>

                </table>
    </div>


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