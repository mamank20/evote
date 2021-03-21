<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <!-- Local CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <script src="<?= base_url(); ?>assets/doc_chart.js"></script>


  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">

  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">Selamat datang, <b>User</b></div>
              </a></li>
          </ul>
        </form>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">E-Vote</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">EV</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Admin Menu</li>
            <li><a class="nav-link" href="<?= base_url('admin/count_new'); ?>"><i class="fas fa-clipboard"></i> <span>Live Count</span></a></li>
            <li><a class="nav-link" href="<?= base_url('admin/users'); ?>"><i class="fas fa-user"></i> <span>Data User</span></a></li>
            <li><a class="nav-link" href="<?= base_url('admin/kandidat'); ?>"><i class="fas fa-user-tie"></i> <span>Data Kandidat</span>
            <li><a class="nav-link" href="<?= base_url('admin/log_pesan'); ?>"><i class="fas fa-archive"></i> <span>Data Log Pesan</span></a></li>
            <li class="menu-header">Account</li>
            <li><a class="nav-link" href="<?= base_url('auth'); ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
          </ul>

        </aside>
      </div>