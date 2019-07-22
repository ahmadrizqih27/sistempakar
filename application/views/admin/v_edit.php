<?php $this->load->view('admin/header'); ?>

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">EDIT SISWA</h1>

          <div class="row">

            <div class="col-lg-6">
         <?php foreach($user as $u){ ?>
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" value="">Data Siswa <?php echo $u->nama ?></h6>
                </div>
                <div class="card-body">
               
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/update'; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style="outline-color: none">
                          <label class="col-lg-5 control-label">No Induk</label>
                            <div class="col-lg-5">
                                  <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                            <!-- <input type="hidden" name="password"> -->
                            <input type="text" name="no_induk" readonly value="<?php echo $u->no_induk ?>">
                            </div>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-5 control-label">Password</label>
                            <div class="col-lg-5">
                              <input type="text" name="password"  value="<?php echo $u->password ?>">
                            </div>

                      <div class="form-group">
                          <label class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-5">
                              <input type="text" name="nama" value="<?php echo $u->nama ?>">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 control-label">Level</label>
                            <div class="col-lg-5">
                              <input type="text" name="level" readonly value="<?php echo $u->level ?>">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                          <div class="col-lg-5">
                              <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
                              <a href="<?php echo site_url('admin');?>" class="btn btn-default">Kembali</a>
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