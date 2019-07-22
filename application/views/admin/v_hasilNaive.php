  <?php $this->load->view('admin/header'); ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Perhitungan Naive Bayes</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Perhitungan dari Data Uji</h6>
            </div>
            <div class="card-body">
                <table rules="none" border="0" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                                               
                                            </thead>
                                            <tbody style="font-size: 12px">
                                                <tr>
                                                
                                                    <td>Nilai Prior Visual</td>
                                                    <td><?php echo $data['PriorVisual']; ?></td>                                                
                                                 </tr>  
                                                  <tr>
                                                
                                                    <td>Nilai Prior Auditory</td>
                                                    <td><?php echo $data['PriorAudio']; ?></td>                                                
                                                 </tr>  
                                                  <tr>
                                                
                                                    <td>Nilai Prior Kinestetik</td>
                                                    <td><?php echo $data['PriorKines']; ?></td>                                                
                                                 </tr> 
                                                 <tr>
                                                  <td> .</td>
                                                   <tr>
                                                     <td>
                                                       LikeliHood Visual
                                                     </td>
                                                   </tr>
                                                 </tr> 
                                                <?php $no=1; foreach ( $data['LikeliVisual'] as $key ) { ?> 
                                                <tr>
                                                     <td style="text-align: center;">F<?php echo $no?></td>
                                                    <td style="text-align: left;">
                                                      <?php echo $key?>
                                                    </td>  
                                                    <?php $no++?>
                                                   <?php  }?>
                                                 </tr>

                                                 <tr>
                                                     <td>
                                                       LikeliHood Auditory
                                                     </td>
                                                   </tr>

                                                <?php $no=1; foreach ( $data['LikeliAudio'] as $key ) { ?> 
                                                <tr>
                                                     <td style="text-align: center;">F<?php echo $no?></td>
                                                    <td>
                                                      <?php echo $key?>
                                                    </td>  
                                                    <?php $no++?>
                                                   <?php  }?>
                                                 </tr> 

                                                  <tr>
                                                     <td>
                                                       LikeliHood Kinestetik
                                                     </td>
                                                   </tr>

                                                <?php $no=1; foreach ( $data['LikeliKines'] as $key ) { ?> 
                                                <tr>
                                                     <td style="text-align: center;">F<?php echo $no?></td>
                                                    <td>
                                                      <?php echo $key?>
                                                    </td>  
                                                    <?php $no++?>
                                                   <?php  }?>
                                                 </tr> 
                                                
                                                <tr>
                                                  <td>. </td>
                                                </tr>  
                                                <tr>
                                                
                                                    <td>Nilai Posterior Visual</td>
                                                    <td><?php echo $data['PosteriorVisual']; ?></td>

                                                 </tr>

                                                  <tr>
                                                
                                                    <td>Nilai Posterior Auditory</td>
                                                    <td><?php echo $data['PosteriorAudio']; ?></td>

                                                 </tr>

                                                  <tr>
                                                
                                                    <td>Nilai Posterior Kinestetik</td>
                                                    <td><?php echo $data['PosteriorKines']; ?></td>

                                                 </tr>

                                                 <tr>
                                                   <td>.</td>
                                                 </tr>

                                                 <tr>
                                                
                                                    <td>Nilai Posterior Terbesar</td>
                                                    <td><?php echo $data['PosteriorTerbesar']; ?></td>

                                                 </tr>
                                            </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php $this->load->view('admin/footer'); ?>





