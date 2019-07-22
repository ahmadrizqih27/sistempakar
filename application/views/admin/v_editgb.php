<?php $this->load->view('admin/header'); ?>

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">EDIT GAYA BELAJAR</h1>

          <div class="row">

            <div class="col-lg-6">
         <?php foreach($gaya_belajar as $u){ ?>
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" value="">Gaya Belajar <?php echo $u->gaya_belajar ?></h6>
                </div>
                <div class="card-body">
               
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/update_gb'; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style="outline-color: none">
                          <label class="col-lg-5 control-label">Gaya Belajar</label>
                            <div class="col-lg-5">
                                  <input type="hidden" name="id_gayabelajar" value="<?php echo $u->id_gayabelajar ?>">
                            <input type="text" name="gaya_belajar" readonly value="<?php echo $u->gaya_belajar ?>">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-5 control-label">Saran Belajar</label>
                            <div class="col-lg-5">
                              <!-- <input type="text" style="width: 400px; height: 500px;" name="saran_belajar" value="<?php echo $u->saran_belajar ?>"> -->
                              <textarea rows="4" cols="50"  name="saran_belajar" value="" ><?php echo $u->saran_belajar ?></textarea>
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                          <div class="col-lg-5">
                              <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
                              <a href="<?php echo site_url('admin/tampil_gb');?>" class="btn btn-default">Kembali</a>
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