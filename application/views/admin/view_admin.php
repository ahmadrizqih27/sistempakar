  <?php $this->load->view('admin/header'); ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel User</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>

            <div class="card-body">
                            <a href="<?php echo site_url('admin/tambah');?>" class="btn btn-xs btn-info" style="margin-bottom: 15px"> <i class="fas fa-info-circle"> Tambah User</i></a></br>

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                                                <tr>

                                                    <th  data-field="state" data-checkbox="" ><center>No.</center></th>
                                                    <th ><center>No Induk</center></th>
                                                    <th ><center>Nama</center></th>
                                                    <th ><center>Level</center></th>
                                                    <th ><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;foreach($data as $u){ ?>
                                                <tr>
                                                
                                                    <td><center><?php echo $no++ ?></center></td>
                                                    <td><center><?php echo $u->no_induk ?></center></td>
                                                    <td><?php echo $u->nama ?></td>
                                                    <td><center><?php echo $u->level ?></center></td>
                                                    <td><center>
                                                   <a href="<?php echo site_url('admin/edit/'.$u->id_user);?>" class="btn btn-xs btn-info"> <i class="fas fa-info-circle"></i></a>
                                                   <a onclick="return confirm('Yakin ingin menghapus data ini?');" href="<?php echo site_url('admin/hapus/'.$u->id_user);?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                   <a href="<?php echo site_url('admin/get_detail_hasilnya/'.$u->id_user);?>" class="btn btn-xs btn-info"> <i class="fas fa-check">Detail Hasil</i></a>

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




