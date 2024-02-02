<?php

require('db/database.php');
$db= new Database();

$no_barcode = @$_GET['no_barcode'];

$db->query('SELECT * FROM books WHERE no_barcode=:no_barcode');

$db->bind(':no_barcode', $no_barcode);

$books = $db->single();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition light-mode sidebar-mini">
<div class="wrapper">

  <!-- header -->

  <?php
    require('template/header.php');
  ?>

  <!-- Sidebar  -->
   <?php
    require('template/sidebar.php');
    ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Books</a></li>                
                <li class="breadcrumb-item active">
                  <?php

                  if ($no_barcode) {
                    echo 'Edit Book';
                  } else {
                    echo 'Add Book';
                  }

                  ?>
                </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <!-- form start -->
               <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">
                  <?php
                  if ($no_barcode){
                    echo 'Edit Book';
                  } else {
                    echo 'Add Book';
                  }
                  ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo (@$no_barcode ? 'controller/update-book.php' : 'controller/save-book.php'); ?>" method="POST"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Barcode Number</label>
                        <input type="text" class="form-control" name="no_barcode" id="no_barcode" placeholder="Enter the Barcode" value="<?php echo @$books['no_barcode'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="exampleInputFile">Add Image Cover</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="cvr_image" class="custom-file-input" id="exampleInputFile" accept="image/*">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Book's Title" value=" <?php echo @$books['title'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Writers</label>
                        <input type="text" class="form-control" name="writers" id="writers" placeholder="Enter All Writer's Name" value=" <?php echo @$books['writers'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Year</label>
                        <input type="number" class="form-control" name="year" id="year" placeholder="Enter Publication Year" value=" <?php echo @$books['year'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Publishers</label>
                        <input type="text" class="form-control" name="publishers" id="publishers" placeholder="Enter the publishers" value=" <?php echo @$books['publishers'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Subject</label>
                        <select class="custom-select form-control" name="subject" id="subject" value=" <?php echo @$books['subject'] ?>">
                          <option>000-099 General Work</option>
                          <option>100-199 Computer</option>
                          <option>200/299 Religion</option>
                          <option>300/399 Social</option>
                          <option>400/499 </option>
                          <option>500/599 </option>
                          <option>600/699 Science</option>
                          <option>700/799 Art</option>
                          <option>800/899 Literature</option>
                          <option>900/999 Geo & History</option>
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter the book's subject">
                      </div> -->
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
          

                               
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- footer -->
  <?php
  require('template/footer.php');
  ?>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin-lte/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
