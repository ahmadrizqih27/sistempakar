<?php $this->load->view('admin/header'); ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Pernyataan</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pernyataan</h6>
            </div>

            <div class="card-body">
                          
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                                                <tr>

                                                    <th  data-field="state" data-checkbox="" ><center>No.</center></th>

                                                    <th ><center>Kode Pernyataan</center></th>
                                                    <th ><center>Pernyataan</center></th>
                                                    <th ><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;foreach($data as $u){ ?>
                                                <tr>
                                                
                                                    <td><center><?php echo $no++ ?></center></td>                                    
                                                    <td><center><?php echo $u->kode_pernyataan ?></center></td>
                                                    <td><center><?php echo $u->pernyataan ?></center></td>
                                                   <td><center>
                                                   <a href="<?php echo site_url('admin/edit_pernyataan/'.$u->id_pernyataan);?>" class="btn btn-xs btn-info"> <i class="fas fa-info-circle"> Edit Data</i></a>
                                                 
                                                    </center>
                                                    </td>
                                                   <!--  <td><center><a href="<?php echo site_url('admin/edit/'.$u->id_user);?>"><i class="glyphicon glyphicon-edit"></i></a>
                                                    &nbsp &nbsp &nbsp
                                                    <button class="btn btn- btn-xs" href="#" data-toggle="modal" data-target="#DangerModalftblack<?php echo $u->id_user;?>"><i class="glyphicon glyphicon-trash"></i></button>
                            
                                                            <div id="DangerModalftblack<?php echo $u->id_user;?>" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-close-area modal-close-df">
                                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                                                            <p>Apakah anda yakin ingin menghapus data "<?php echo $u->nama;?>" ?</p>
                                                                        </div>
                                                                        <div class="modal-footer footer-modal-admin">
                                                                            <center>
                                                                            <a style="color: yellow" href="<?php echo site_url('admin/hapus/'.$u->id_user);?>">Iya Yakin</a>
                                                                            <a style="color: yellow" data-dismiss="modal" href="">Tidak</a>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></center></td> -->

                                                    <!-- <a href="<?php echo site_url('cruduser/hapus/'.$u->id_user);?>"><i class="glyphicon glyphicon-trash"></i></a></center></td> -->
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




