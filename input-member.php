<?php

require('db/database.php');
$db = new Database();

$id_member = @$_GET['id_member'];

$db->query('SELECT * FROM member WHERE id_member=:id_member');

$db->bind(':id_member', $id_member);

$members = $db->single();

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
            <h1>Add Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Member MyLib1.0</a></li>                
                <li class="breadcrumb-item active">
                  <?php

                  if ($id_member) {
                    echo 'Edit Member';
                  } else {
                    echo 'Add Member';
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
                  if ($id_member){
                    echo 'Edit Member';
                  } else {
                    echo 'Add Member';
                  }
                  ?>
                </h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <form action ="<?php echo (@$id_member ? 'controller/update-member.php' : 'controller/save-member.php'); ?>" method="POST"  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Id Member</label>
                        <input type="text" class="form-control" name="id_member" id="id_member" placeholder="Enter the ID" required <?= @$members['id_member'] ? 'readonly' : ''; ?> value="<?php echo @$id_member['id_member']?>">
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required value="<?php echo @$members['member'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required value="<?php echo @$members['address'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Telphone</label>
                        <input type="number" class="form-control" name="telp" id="telp" placeholder="Enter Telephone" required value="<?php echo @$members['telp'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="custom-select form-control" name="gender" id="gender" required value="<?php echo @$members['gender'] ?>">
                          <option>Perempuan</option>
                          <option>Laki-laki</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                

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


