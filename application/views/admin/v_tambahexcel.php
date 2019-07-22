<?php $this->load->view('admin/header'); ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Excel Input Data Latih </h1>

          <div class="row">

            <div class="col-lg-6">
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" value="">Tambah Data Latih</h6>
                </div>
                <div class="card-body">
                                 
                   <?php
                    echo form_open_multipart($action);
                    echo '<div class="form-group">';
                    echo '<label>Upload Excel ' . form_error('judul') . '</label>'; // show error judul
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo form_upload('gambar');
                    echo '</div>';
                    echo form_submit('mysubmit', 'Excel', 'class="btn btn-primary"');
                    echo form_close();
                    ?>
                </div>
              </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php $this->load->view('admin/footer'); ?>