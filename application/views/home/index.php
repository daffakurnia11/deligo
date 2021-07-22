<!-- Whatsapp Fixed -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="<?= base_url(''); ?>">
  <meta name="canonical" href="<?= base_url(''); ?>" />
  <meta name="description" content="Deligo adalah penyedia layanan ruang dapur bersama atau Cloud Kitchen yang membantu ekspansi bisnis kuliner secara cepat dengan biaya yang rendah" />
  <meta name="author" content="Deligo Cloud Kitchens" />
  <meta name="keywords" content="Deligo,Deligo Kitchen, Deligo Kitchens, Deligo Cloud Kitchens, Cloud Kitchen, Cloud Kitchens, Cloud Kitchen Surabaya, Cloud Kitchens Surabaya, Surabaya" />
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#65c083" />
  <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('assets/dist/'); ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="<?= base_url('assets/dist/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Animate on Scroll -->
  <link href="<?= base_url('assets/dist/'); ?>aos/dist/aos.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/'); ?>owlcarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/dist/'); ?>owlcarousel/dist/assets/owl.theme.default.min.css">
  <!-- CSS -->
  <link href="<?= base_url('assets/css/'); ?>main.css" rel="stylesheet">

  <title>Deligo Cloud Kitchen</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
  <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
    <?= $this->session->unset_userdata('flash'); ?>
  </div>
  <!-- Header -->
  <header id="header">
    <nav id="navbar" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand d-block d-lg-none" href="<?= base_url(''); ?>">
          <img src="<?= base_url('assets/img/logo-green.png'); ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-fw fa-lg fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center">
            <a class="nav-link fw-bold active" href="#header">Beranda</a>
            <a class="nav-link fw-bold" href="#about">Tentang Kami</a>
            <a class="nav-link fw-bold" href="#locations">Lokasi</a>
            <a class="nav-link fw-bold" href="#contacts">Hubungi Kami</a>
            <a class="nav-link fw-bold" href="#registration">Daftar</a>
          </div>
        </div>
        <a class="navbar-brand d-none d-lg-block" href="<?= base_url(''); ?>">
          <img src="<?= base_url('assets/img/logo-white.png'); ?>" id="imageLogo" alt="">
        </a>
      </div>
    </nav>
    <div class="d-flex justify-content-center flex-column v-height-80">
      <div class="container px-4" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="header-title fw-bolder text-uppercase text-center text-lg-start">Kembangkan Bisnis Kuliner Online Anda Bersama DELIGO!</h1>
            <p class="header-desc fw-bold mt-4 mb-5 text-center text-lg-start">Your one stop solution cloud kitchen</p>
            <div class="text-center text-lg-start">
              <a href="#registration" class="button-white fw-bolder">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About Us -->
  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-offset="0" data-aos-duration="1000">
          <img src="<?= base_url('assets/img/mascot.png'); ?>" class="about-mascot" alt="">
        </div>
        <div class="col-md-8 py-3" data-aos="fade-up" data-aos-offset="0" data-aos-delay="500" data-aos-duration="1000">
          <h2 class="text-center fw-bolder px-3">Deligo adalah penyedia layanan ruang dapur bersama atau Cloud Kitchen yang membantu ekspansi bisnis kuliner secara cepat dengan biaya yang rendah</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End of About Us -->

  <!-- Benefits -->
  <section id="benefits">
    <div class="container">
      <h2 class="text-uppercase mb-5 fw-bolder benefit-title" data-aos="fade-right" data-aos-duration="1000">Keuntungan Mitra Deligo</h2>
      <div class="row">
        <div class="col-6 col-md-3 mt-3 text-center" data-aos="fade-up" data-aos-offset="0" data-aos-delay="500" data-aos-duration="1000">
          <img src="<?= base_url('assets/img/icon1.svg'); ?>" class="benefit-icon" alt="">
          <p class="benefit-desc fw-bold my-3">Lokasi yang tersebar luas dan Mitra cukup fokus di produksi</p>
        </div>
        <div class="col-6 col-md-3 mt-3 text-center" data-aos="fade-up" data-aos-offset="0" data-aos-delay="1000" data-aos-duration="1000">
          <img src="<?= base_url('assets/img/icon2.svg'); ?>" class="benefit-icon" alt="">
          <p class="benefit-desc fw-bold my-3">Ekspansi bisnis cepat & hemat</p>
        </div>
        <div class="col-6 col-md-3 mt-3 text-center" data-aos="fade-up" data-aos-offset="0" data-aos-delay="1500" data-aos-duration="1000">
          <img src="<?= base_url('assets/img/icon3.svg'); ?>" class="benefit-icon" alt="">
          <p class="benefit-desc fw-bold my-3">Dukungan pemasaran digital bagi Mitra</p>
        </div>
        <div class="col-6 col-md-3 mt-3 text-center" data-aos="fade-up" data-aos-offset="0" data-aos-delay="2000" data-aos-duration="1000">
          <img src="<?= base_url('assets/img/icon4.svg'); ?>" class="benefit-icon" alt="">
          <p class="benefit-desc fw-bold my-3">Dukungan tim konsultan optimasi online sales</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Benefits -->

  <!-- Locations -->
  <section id="locations">
    <div class="container">
      <h2 class="text-uppercase mb-5 fw-bolder location-title" data-aos="fade-right" data-aos-duration="1000">Lokasi Kitchen Kami</h2>
      <div class="row">
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="250" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="500" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="750" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="1000" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="1250" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="1500" data-aos-duration="1000">
          <div class="locations-image text-center mx-auto">
            <img src="<?= base_url('assets/img/location-placeholder.png'); ?>" class="location-img" alt="">
            <div class="location-desc">
              <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, ea.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Locations -->

  <!-- Partners -->
  <section id="partners">
    <div class="container">
      <h2 class="text-uppercase mb-5 fw-bolder partner-title" data-aos="fade-right" data-aos-duration="1000">Brand Partners</h2>
      <?php if ($brands) : ?>
        <div class="owl-carousel owl-theme owl-loaded" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <div class="owl-stage-outer">
            <div class="owl-stage">
              <?php foreach ($brands as $brand) : ?>
                <div class="owl-item">
                  <div class="text-center">
                    <img src="<?= base_url('assets/img/brands/' . $brand['img']); ?>" class="partner-img my-3 mx-auto d-inline-block" alt="<?= $brand['brand']; ?>">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="owl-controls">
            <div class="owl-nav">
              <div class="owl-prev"></div>
              <div class="owl-next"></div>
            </div>
          </div>
        </div>
      <?php else : ?>
        <p class="h4 text-center">Belum terdapat Brand Partners</p>
      <?php endif; ?>
    </div>
  </section>
  <!-- End of Partners -->

  <!-- Contact -->
  <section id="contacts">
    <div class="container">
      <h2 class="text-uppercase mb-5 fw-bolder contact-title" data-aos="fade-right" data-aos-duration="1000">Hubungi kami</h2>
    </div>
    <div class="contact-content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center text-lg-start pb-4" data-aos="fade-right" data-aos-duration="1000">
            <h3 class="h1 fw-bolder">Masih Bingung ?</h3>
            <h3 class="h1 fw-bolder">Ada Pertanyaan ?</h3>
            <h4 class="mt-4 h2 fw-bolder">Hubungi Kami !</h4>
            <p class="fw-normal">Apabila ada pertanyaan, bisa menghubungi kontak kami dengan mengisi form terlebih dahulu.</p>
          </div>
          <div class="col-lg-6">
            <form action="home/ask_question" method="post" class="form" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-offset="0">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input required type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                    <label for="name">Nama</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input required type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan Kontak">
                    <label for="contact">Kontak</label>
                  </div>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <textarea required class="form-control" placeholder="Masukkan Pesan" id="message" name="message" style="height: 100px"></textarea>
                <label for="message">Pertanyaan</label>
              </div>
              <button type="submit" class="button-blue mt-3">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Contact -->

  <!-- Registration -->
  <section id="registration">
    <div class="container">
      <h2 class="text-uppercase mb-5 fw-bolder registration-title" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0">Bergabung Bersama Kami</h2>
    </div>
    <div class="registration-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-5" data-aos="fade-right" data-aos-duration="1000" data-aos="fade-right" data-aos-duration="1000">
            <h3 class="h2 text-uppercase fw-bolder text-center text-lg-start">Mari Kembangkan bisnis kuliner online anda bersama kami !</h3>
            <h3 class="h2 fw-bolder mt-5 text-center text-lg-start">Bergabung Bersama Kami!</h3>
            <div class="support-contact mt-5">
              <div class="d-flex align-items-center">
                <i class="fas fa-fw fa-2x fa-envelope"></i>
                <a class="my-3 registration-link" href="mailto:support@deligokitchens.com" target="_blank">
                  <span class="ms-2 fw-normal">support@deligokitchens.com</span>
                </a>
              </div>
              <div class="d-flex align-items-center">
                <i class="fab fa-fw fa-2x fa-instagram"></i>
                <a class="my-3 registration-link" href="https://www.instagram.com/deligokitchens/" target="_blank">
                  <span class="ms-2 fw-normal">deligokitchens</span>
                </a>
              </div>
              <div class="d-flex align-items-center">
                <i class="fab fa-fw fa-2x fa-whatsapp"></i>
                <a class="my-3 registration-link" href="https://wa.me/6285813550952" target="_blank">
                  <span class="ms-2 fw-normal">0858 1355 0952</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="<?= base_url('home/submit'); ?>" method="post" class="form" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-offset="0">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input required type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Masukkan Nama" value="<?= set_value('name'); ?>">
                    <label for="name">Nama</label>
                  </div>
                  <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input required type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan Kontak" value="<?= set_value('kontak'); ?>">
                    <label for="contact">Kontak</label>
                  </div>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('email'); ?>">
                <label for="email">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="brand" name="brand" placeholder="Masukkan Brand" value="<?= set_value('brand'); ?>">
                <label for="brand">Nama Brand</label>
              </div>
              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="instagram" name="instagram" placeholder="Masukkan Akun Instagram" value="<?= set_value('instagram'); ?>">
                <label for="instagram">Akun Instagram</label>
              </div>
              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="location" name="location" placeholder="Masukkan Lokasi" value="<?= set_value('location'); ?>">
                <label for="location">Lokasi</label>
              </div>
              <div class="form-floating mb-3">
                <!-- Ganti Select -->
                <select class="form-select" id="registered" name="registered" placeholder="Pilih salah satu" value="<?= set_value('registered'); ?>">
                  <option selected>Pilih salah satu</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
                <label for="registered">Brand Anda terdaftar di Online Delivery</label>
              </div>
              <div class="form-floating mb-3">
                <!-- Ganti Select -->
                <select class="form-select" id="sales" name="sales" placeholder="Pilih salah satu" value="<?= set_value('sales'); ?>">
                  <option selected>Pilih salah satu</option>
                  <option value="<25">Dibawah 25 Porsi</option>
                  <option value="26-50">26-50 porsi</option>
                  <option value="51-75">51-75 porsi</option>
                  <option value="76-100">76-100 porsi</option>
                  <option value=">100">Diatas 100 porsi</option>
                </select>
                <label for="sales">Berapa banyak penjualan anda per hari?</label>
              </div>
              <div class="form-floating">
                <textarea required class="form-control" placeholder="Masukkan Pesan" id="message" name="message" style="height: 100px"><?= set_value('message'); ?></textarea>
                <label for="message">Pesan</label>
              </div>
              <button type="submit" class="button-blue mt-3 px-5">Kirim</button>
            </form>
          </div>
        </div>
        <div class="row mt-4 py-3">
          <div class="col-md-6 order-2 order-md-1 text-center pt-3 pt-md-0">
            &copy; Copyright 2021 by <a href="https://breakpoint.id/" class="registration-link" target="_blank">Breakpoint</a>. All rights reserved.
          </div>
          <div class="col-md-6 order-1 order-md-2 text-md-end text-center">
            <a href="" class="registration-link mx-3">
              <i class="fab fa-fw fa-lg fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/deligokitchens/" target="_blank" class="registration-link mx-3">
              <i class="fab fa-fw fa-lg fa-instagram"></i>
            </a>
            <a href="https://wa.me/6285813550952" target="_blank" class="registration-link mx-3">
              <i class="fab fa-fw fa-lg fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Registration -->

  <!-- Sticky Whatsapp Button -->
  <a href="https://wa.me/6285813550952" target="_blank" class="button-sticky whatsapp-button d-flex justify-content-center align-items-center">
    <i class="fab fa-2x fa-whatsapp"></i>
  </a>
  <!-- End of Sticky Whatsapp Button -->

  <!-- Javascript -->
  <script src="<?= base_url('assets/dist/'); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/dist/'); ?>jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/dist/'); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/dist/'); ?>owlcarousel/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/dist/'); ?>aos/dist/aos.js"></script>
  <script src="<?= base_url('assets/js/'); ?>script.js"></script>
</body>

</html>