<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Tambah Berita</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/style5.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="<?php echo base_url('summernote/summernote-bs4.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('summernote/summernote-bs4.js'); ?>"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar Holder -->
        <div class="sidebar"></div>
        <!-- Page Content Holder -->
        <div id="content">
            <div class="topbar"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <form action="<?= base_url('admin/berita/store'); ?>" method="POST">
                            <div class="form-group">
                                <label for="name">Judul Berita</label>
                                <input type="text" name="judulberita" class="form-control" id="judulberita" placeholder="Masukkan Judul Berita">
                            </div>
                            <div class="form-group">
                                <label for="email">Author</label>
                                <input type="text" name="author" class="form-control" id="author" placeholder="Masukkan Author">
                            </div>
                            <div class="form-group">
                                <label for="email">Tanggal Posting</label>
                                <input type="date" name="tglposting" class="form-control" id="tglposting" value="<?php //echo date('d/m/Y');?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Foto</label>
                                <input type="text" name="foto" class="form-control" id="foto">
                            </div>
                            <div class="form-group">
                                <label for="email">Isi Berita</label>
                                <textarea name="isiberita" class="form-control" id="summernote" placeholder="Masukkan Isi Berita"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/main.js'); ?>"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
