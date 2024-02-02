<?php
require('controller/islogin.php');

require('db/database.php');
$db = new Database();

$id_tr = @$_GET['id_transaction'];

$db->query('SELECT * FROM books');
$bukus = $db->get();

$db->query('SELECT * FROM member');
$customers = $db->get();


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
              <h1>Book Circulation</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Books</a></li>
                <li class="breadcrumb-item active">

                  <?php

                  if ($id_tr) {
                    echo 'Edit Loan';
                  } else {
                    echo 'Add Loan';
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
        <form action="<?php echo (@$id_tr ? 'controller/update-loan.php' : 'controller/save-loan.php'); ?>" method="POST" enctype="multipart/form-data">
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
                      if ($id_tr) {
                        echo 'Edit Loan';
                      } else {
                        echo 'Add Loan';
                      }
                      ?>

                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <?php

                    if ($id_tr) {
                    ?>

                      <input name="id_transaction" type="hidden" value="<?= @$id_tr ?>">
                    <?php } ?>
                    <div class="form-group">
                      <label label for="no_barcode">Barcode</label>
                      <select name="no_barcode" class="form-control">

                        <?php
                        foreach ($bukus as $book) {
                        ?>
                          <option value=<?= $book['no_barcode'] ?>><?= $book['title'] ?></option>

                        <?php
                        }
                        ?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="id_member">Member</label>
                      <select name="id_member" class="form-control">

                        <?php
                        foreach ($customers as $cus) {
                        ?>
                          <option value=<?= $cus['id_member'] ?>><?= $cus['id_member'] . " | " . $cus['name'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
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
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>