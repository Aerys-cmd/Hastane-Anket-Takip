<!DOCTYPE html>
<!------ Include the above in your HEAD tag ---------->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasta Takip Sistemi</title>
  <?php
  session_start();
  include 'sayfalar/fonksiyon/config.php';
  include 'sayfalar/fonksiyon/function.php';
  if (isset($_POST['btn_mark']))
    markasreaded();
  ?>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" onclick="window.location.href = 'sayfalar/logout.php';" href="sayfalar/logout.php">
            <i class="fa fa-backward"></i>
            <span class="badge badge-danger navbar-badge">Logout</span>
          </a>
        </li>
        <?php
        if ($_SESSION['YetkiNo'] == 2) {
        ?>
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a href="main.php?sayfaadi=soruliste" class="nav-link">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge"><?php $sql1 = "select count(ID) as 'sayi' from soru where AtananID={$_SESSION['ID']} and OkunduMu=0";
                                                            $result1 = mysqli_query($con, $sql1);
                                                            $data1 = mysqli_fetch_assoc($result1);
                                                            echo $data1['sayi'];
                                                            ?></span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ($_SESSION['YetkiNo'] == 2 || $_SESSION['YetkiNo'] == 1) {
        ?>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge"><?php $sql1 = "select count(ID) as 'sayi' from log where OkunduMu=0";
                                                              $result1 = mysqli_query($con, $sql1);
                                                              $data1 = mysqli_fetch_assoc($result1);
                                                              echo $data1['sayi'];
                                                              ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"></span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> <?php $sql1 = "select count(ID) as 'sayi' from log where OkunduMu=0 and log like 'Yeni Soru%'";
                                                  $result1 = mysqli_query($con, $sql1);
                                                  $data1 = mysqli_fetch_assoc($result1);
                                                  echo $data1['sayi'] . ' yeni kayıt eklendi.';
                                                  ?>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> <?php $sql1 = "select count(ID) as 'sayi' from log where OkunduMu=0 and log not like 'Yeni Soru%'";
                                                  $result1 = mysqli_query($con, $sql1);
                                                  $data1 = mysqli_fetch_assoc($result1);
                                                  echo $data1['sayi'] . ' yeni soru eklendi.';
                                                  ?>
              </a>
              <div class="dropdown-divider"></div>
              <form action="" method="post">
                <button type="submit" name="btn_mark" class="dropdown-item dropdown-footer">Okundu Olarak İşaretle</button>
              </form>

            </div>
          </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="main.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ISTE PANEL</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="main.php" class="d-block"> <?php echo $_SESSION["kullaniciAd"] . " " . $_SESSION["kullaniciSoyad"]; ?></a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <?php
            include "sayfalar/fonksiyon/menu.php";
            ?>

          </ul>
        </nav>

      </div>
    </aside>
  </div>