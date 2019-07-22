  <?php $this->load->view('admin/header'); ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Data Training</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Training</h6>
            </div>

            <div class="card-body">
                            <a href="<?php echo site_url('admin/tambah_dataset');?>" class="btn btn-xs btn-info" style="margin-bottom: 15px"> <i class="fas fa-info-circle"> Tambah Data Training</i></a>
                            <a href="<?php echo site_url('admin/tambahExcel');?>" class="btn btn-xs btn-success" style="margin-bottom: 15px"> <i class="fas fa-info-circle"> Tambah Data Dari Excel</i></a></br>
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 13px;">
                 <thead>
                                                <tr>
                                                
                                                    <th  data-field="state" data-checkbox="" ><center>No.</center></th>
                                                    <th ><center>Nama</center></th>
                                                 <?php for ($i=0; $i < 27 ; $i++) { ?>   
                                                    <th ><center>
                                                      F<?php echo $i+1?>
                                                    </center></th>
                                                   <?php }?>
                                                    <th ><center>Gaya Belajar</center></th>
                                                    <th ><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php $no = 1; foreach ($data as $key) {  ?>
                                                <tr>
                                                
                                                   <td><?php echo $no++ ?></td>
                                                   <td ><?php echo $key->nama; ?></td>
                                                    <?php foreach ($datadetail as $keys) {
                                                      if ($key->id_dataset==$keys->id_dataset) { ?>
                                                    <td ><?php echo $keys->nilai; ?></td>
                                                 <?php }
                                                    } ?>
                                                   <td><?php echo $key->gaya_belajar;?></td>
                                                    <td><center>
                                                   <a onclick="return confirm('Yakin ingin menghapus data ini?');" href="<?php echo site_url('admin/hapusDataset/'.$key->id_dataset);?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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




