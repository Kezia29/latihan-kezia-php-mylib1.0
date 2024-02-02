<?php

require('db/database.php');
$db = new Database();

$username = @$_GET['username'];

$db->query('SELECT * FROM librarians WHERE username=:username');

$db->bind(':username', $username);

$admins = $db->single();

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
            <h1>Add Librarian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Librarian</a></li>                
                <li class="breadcrumb-item active">
                  <?php

                  if ($username) {
                    echo 'Edit Librarian';
                  } else {
                    echo 'Add Librarian';
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
                  if ($username){
                    echo 'Edit Librarian';
                  } else {
                    echo 'Add Librarian';
                  }
                  ?>
                </h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <form action ="<?php echo (@$username ? 'controller/update-librarians.php' : 'controller/save-librarians.php'); ?>" method="POST"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter the username" required <?= @$admins['username'] ? 'readonly' : ''; ?> value="<?php echo @$admin['username']?>">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter the Password" required value="<?php echo @$admins['password'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required value="<?php echo @$admins['name'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Division</label>
                        <select class="custom-select form-control" name="division" id="division" required value=" <?php echo @$admins['division'] ?>">
                          <option>D01 Circulation</option>
                          <option>D02 CS</option>
                          <option>D03 Catalog</option>
                          <option>D04 Office</option>
                          <option>D05 Security and Garden</option>
                          <option>D06 Children Officer</option>
                          <option>D07 OJT</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="exampleInputFile">Choose Avatar Profile </label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile" accept="image/*">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>

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


