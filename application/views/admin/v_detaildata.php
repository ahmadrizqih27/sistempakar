<div class="container" align="center">
    <h2><center>Table Data Uji dan Latih</center></h2>
      <div style="margin-left: 60px" align="left">
      <h4>Keterangan :</h4>
      <table>
        <tr>
        <td>Data Uji</td>
        <td><img  src="<?php echo base_url();?>img/logo1.png"></td>
        </tr>
        <tr>
          <td>Data Latih </td>
        <td><img  src="<?php echo base_url();?>img/logo2.png"></td>
        </tr>
      </table>
      </br>
       <!--  <div>
        <h4>Data Uji </h4> 
        </div>      
      </div> -->
       <table  align="center" width="595px"  border="0.5" style="border-color: #000000; margin-top: 10px">

          <tr >
            <td align="center"><b>No</b> </td>
            <td style="padding-left: 10px"><b>Nama Siswa</b></td>
            <td align="center"><b>Gaya Belajar</b></td>
          </tr>
           <?php for ($i=0; $i < count($datanya); $i++) { ?>
              <tr <?php if($i < $batas){echo 'bgcolor="#BDECB6"';} ?>>
                <td><center><?php echo $i+1?></center></td>
                <td style="padding-left: 10px"><?php echo $datanya[$i]->nama ?></td>
                <td><center><?php echo $datanya[$i]->gaya_belajar ?>                     
              </center></td></tr>    
              <?php } ?>                          

                </table>


    </div>
