<?php $this->load->view('admin/header'); ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">TAMBAH SISWA</h1>

          <div class="row">

            <div class="col-lg-6">
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" value="">Tambah Data Siswa Baru</h6>
                </div>
                <div class="card-body">
                                 
                  <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/tambah_user'; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style=" margin-left: 100px">
                          <label class="col-lg-10 control-label">No Induk Siswa</label>
                            <div class="col-lg-5">
                              <input type="text" name="no_induk">
                            </div>
                      </div>
                      <div class="form-group"style="margin-left: 100px">
                          <label class="col-lg-10 control-label"  >Nama Siswa</label>
                            <div class="col-lg-5">
                              <input type="text" name="nama">
                            </div>
                      </div>
                      <div class="form-group" style=" margin-left: 100px">
                          <label class="col-lg-10 control-label">Password</label>
                            <div class="col-lg-5">
                              <input type="password" name="password" id="showPass">
                              <p> <input class="col-lg-1" type="checkbox" onclick="showPassword()"> Show Password </p>
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 control-label"></label>
                            <div class="col-lg-5">
                              <input type="hidden" readonly value="siswa" name="level">
                            </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-10">
                          <label class="col-lg-1 control-label"></label>
                          
                              <input type="submit" value="Tambah" class="btn btn-primary" style="margin-left: 270px" >

                      
                        </div>
                      </div>
                    </form> 

                </div>
              </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php $this->load->view('admin/footer'); ?>




