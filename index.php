<?php include('model/koneksi.php');

session_start();
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html>

<head>
  <?php include('component/head.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include('component/topbar.php') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    if (empty($_SESSION['level_admin'])) {
      include('component/sidebar.php');
    } elseif ($_SESSION['level_admin'] == "Admin") {
      include('component/sidebar_admin.php');
    } elseif ($_SESSION['level_admin'] == "Admin_Lapangan") {
      include('component/sidebar_admin_lapangan.php');
    }
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->

      <!-- Main content -->
      <?php include('content.php') ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('component/footer.php') ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include('component/script.php') ?>
</body>

</html>