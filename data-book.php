<?php

require('db/database.php');

$db = new Database();

$db->query('SELECT * FROM books');
$hasil = $db->get();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyLib Ver.1.0 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>Data Books</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Books</a></li>
              <li class="breadcrumb-item active">Data Books</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Library's Books</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="dt-buttons btn-group flex-wrap">               
                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"></span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div> -->
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Cover</th>
                      <th>BRCD</th>
                      <th>Title</th>
                      <th>Writers</th>
                      <th>Year</th>
                      <th>Publisher</th>
                      <th>Subject</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  foreach ($hasil as $row){
                  ?>

                    <tr>
                      <td>
                        <img style="width: 50px; height: auto;" src="<?= 'data:image/jpeg;base64,' . $row['cvr_image'] ?>" alt ="cover"></td>
                      <td><?=$row['no_barcode'] ?></td>
                      <td><?=$row['title'] ?></td>
                      <td><?=$row['writers'] ?></td>
                      <td><?=$row['year'] ?></td>
                      <td><?=$row['publishers'] ?></td>
                      <td><?=$row['subject'] ?></td>

                      <td>
                        <div class="btn=group pr-0">
                          <button type ="button" class="btn btn-info btn-xs">
                            <a class="text-light" href="input-book.php?no_barcode=<?php echo $row['no_barcode'] ?>">
                            Edit
                          </a>
                          </button>
                          <button type="button" class="btn btn-danger btn-xs">
                            <a class="text-light" href="controller/delete-book.php?no_barcode=<?php echo $row['no_barcode'] ?>">
                                  Delete
                            </a>
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  <!-- Footer -->
  <?php
  require('template/footer.php');
  ?>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin-lte/plugins/jszip/jszip.min.js"></script>
<script src="admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin-lte/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>
