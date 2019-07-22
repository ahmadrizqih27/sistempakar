<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px
            }
            .wrapper{
                width: 600px
            }
            form p{
                margin: 5px 0px;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h4>Upload + Validasi dengan Codeigniter - harviacode.com</h4>
            <?php
            echo form_open_multipart($action);
            echo '<div class="form-group">';
            echo '<label>Judul ' . form_error('judul') . '</label>'; // show error judul
            echo form_input('judul', $judul, 'class="form-control" placeholder="Judul"');
            echo '</div>';
            echo '<div class="form-group">';
            echo form_upload('gambar');
            echo '</div>';
            echo form_submit('mysubmit', 'Excel', 'class="btn btn-primary"');
            echo form_close();
            ?>
        </div>
    </body>
</html>