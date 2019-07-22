  <?php $this->load->view('admin/header'); ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Data</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Uji</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                                                <tr>

                                                    <th  data-field="state" data-checkbox="" ><center>No.</center></th>
                                                    <th ><center>Gaya Belajar</center></th>
                                                    <th ><center>Tanggal Uji Coba</center></th>
                                                    <th ><center>Lihat Perhitungan</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;foreach($datahitung as $u){ ?>
                                                <tr>
                                                
                                                    <td><center><?php echo $no++ ?></center></td>
                                                    <td><center><?php echo $u->gaya_belajar ?></center></td>
                                                    <td><center><?php echo $u->tanggal_tes ?></center></td>
                                                    <td><center>
                                                   <a href="<?php echo site_url('admin/hitungNaiveBayes/'.$u->id_hasil);?>" class="btn btn-xs btn-info"> <i class="fas fa-info-circle"></i> Lihat Perhitungan Naive Bayes</a>
                                                   </center>
                                                    </td>
                                                 </tr>
                                                <?php } ?>
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




