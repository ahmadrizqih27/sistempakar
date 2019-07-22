<?php
class Model_htmltopdf extends CI_Model
{
	
	function pdfdetail($id_hasil)
	{
		$query = $this->db->query("select * FROM hasil JOIN gaya_belajar JOIN user ON hasil.id_gayabelajar = gaya_belajar.id_gayabelajar AND hasil.id_user = user.id_user WHERE hasil.id_hasil=$id_hasil");

		$output = '<table  width="595px" cellspacing="0" rules="none" border="1" style="background-color: white;  height: 842px;">';
		foreach($query->result() as $row)
		{
			$datat = $row->tanggal_tes; 
                                                       // echo $datat;
            $tanggal=substr($datat, 8,2);
            $bulan=substr($datat, 5,2);
            $tahun=substr($datat, 0,4);
			$output .= '

		<tr >
           <td rowspan="3"><img style="width: 113px; margin: 10px;"  align="right" src="'.base_url().'assets/adminassets/img/tut.png"></td>
	       <td width="430" height="60" valign="bottom" style="font-size: 26;"><b>SDN SUMBERSARI 3 MALANG</b></td>
        </tr>		
 		
 		<tr>
            <td height="5" align="left" valign="top" style="font-size: 10;" >Jl. Terusan Ambarawa, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</td>
        </tr>

        <tr >
          <td height="30" align="left" valign="top"  style="font-size: 10;" >E-mail: sdnsumbersari3@gmail.com  Telepon: (0341) 569730</td>
        </tr>	


 		<tr height="5" >
          <td colspan="2" valign="top" height="5" ><center><img  src="'.base_url().'img/garis.png"></center></td>
        </tr>

         <tr>
           <td colspan="2" valign="bottom" height="50"style="font-size: 24;"><center><b>SERTIFIKAT GAYA BELAJAR SISWA</b></center></td>
         </tr>

          <tr>
            <td colspan="2" valign="bottom" height="50"style="font-size: 14;"><center>Diberikan Kepada :</center></td>
    	  </tr>

    	   <tr>
     		 <td colspan="2" valign="bottom" height="80"style="font-size: 35;"><center><b>'.$row->nama.'</b></center></td>
          </tr>

        <tr>
        <td colspan="2" valign="bottom" height="60"style="font-size: 25;"><center>Dengan Gaya Belajar " '.$row->gaya_belajar.' "</center></td>
        </tr>

        <tr >
         <td colspan="2" valign="bottom" height="50"style="font-size: 14;"><center>Saran Belajar :</center></td>
        </tr>

         <tr >
 		  <td colspan="2" valign="top" align="justify" height="150" width="400" style="font-size: 13; padding: 24px;">" '.$row->saran_belajar.'"</td>
         </tr>

         <tr >
          <td colspan="2" valign="top" align="right" width="400" style="font-size: 16; padding: 15px;">Malang, '.$tanggal." ".$bulan." ".$tahun.'</td>
     	</tr>

     	 <tr>
          <td colspan="2" valign="top" align="right" height="10" width="400" style="font-size: 16; padding-right: 15px">Safriadi Kasijanto Spd.</td>
          </tr>

          <tr >
			 <td colspan="2" valign="top" align="right" height="60" width="400" style="font-size: 16; padding-right: 15px">NIP. 1238216869</td>
           </tr>


			
			';
		}
		$output .= '
		<tr>
			
		</tr>
		';
		$output .= '</table>';
		return $output;                             
                                                                       
                                                 
	}


	function Ubahbln($namabln){
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
}

?>