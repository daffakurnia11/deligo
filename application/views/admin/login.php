<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="<?= base_url(''); ?>">
  <meta name="canonical" href="<?= base_url(''); ?>" />
  <meta name="description" content="Deligo adalah penyedia layanan ruang dapur bersama atau Cloud Kitchen yang membantu ekspansi bisnis kuliner secara cepat dengan biaya yang rendah" />
  <meta name="author" content="Deligo Cloud Kitchens" />
  <!-- <meta name="keywords" content="Daffa Kurnia Fatah,Daffa,Kurnia,Fatah,daffakurnia,daffakurnia11,daffakurniaf11,Web Developer,Front-End,Full-stack,Esentika,Archproject,Breakpoint" /> -->
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#65c083" />
  <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
  <title>Deligo Kitchens | Admin</title>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/dist/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/'); ?>sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
  <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
    <?= $this->session->unset_userdata('flash'); ?>
  </div>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="px-4 py-5 p-lg-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Halo Admin!</h1>
                </div>
                <form class="user" action="<?= base_url('auth'); ?>" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" autofocus tabindex="1">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" tabindex="2">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" tabindex="3">
                    Masuk!
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/dist/'); ?>jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/dist/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/dist/'); ?>jquery-easing/jquery.easing.min.js"></script>
  <!-- Sweetalert2 -->
  <script src="<?= base_url('assets/dist/'); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/'); ?>sb-admin-2.min.js"></script>
  <script src="<?= base_url('assets/js/'); ?>script.js"></script>
</body>

</html>