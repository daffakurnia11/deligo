<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Deligo Kitchen | <?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/dist/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/'); ?>sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
    <?= $this->session->unset_userdata('flash'); ?>
  </div>
  <!-- Page Wrapper -->
  <div id="wrapper">