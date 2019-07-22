<?php $this->load->view('admin/header'); ?>

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">EDIT PERNYATAAN</h1>

          <div class="row">

            <div class="col-lg-6">
         <?php foreach($pernyataan as $u){ ?>
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" value="">Pernyataan Kode <?php echo $u->kode_pernyataan ?></h6>
                </div>
                <div class="card-body">
               
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/update_pernyataan'; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style="outline-color: none">
                          <label class="col-lg-5 control-label">Kode Pernyataan</label>
                            <div class="col-lg-5">
                                  <input type="hidden" name="id_pernyataan" value="<?php echo $u->id_pernyataan ?>">
                            <input type="text" name="kode_pernyataan" readonly value="<?php echo $u->kode_pernyataan ?>">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 control-label">Pernyataan</label>
                            <div class="col-lg-5">
                              <!-- <input type="text" style="width: 400px; height: 500px;" name="saran_belajar" value="<?php echo $u->saran_belajar ?>"> -->
                              <textarea rows="4" cols="50"  name="pernyataan" value="" ><?php echo $u->pernyataan ?></textarea>
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                          <div class="col-lg-5">
                              <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button></br>
                            </div>
                             <div class="col-lg-5">
                              <a href="<?php echo site_url('admin/tampil_pernyataan');?>" class="btn btn-default">Kembali</a>

                            </div>

                      </div>
                              
      
  <?php } ?>
  
  </form>

                </div>
              </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    <?php $this->load->view('admin/footer'); ?>
</html>