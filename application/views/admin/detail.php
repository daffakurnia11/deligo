<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Detail Data</h1>
  <div class="row">
    <div class="col-xl-6 col-lg-9">

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Detail Data Pengisian Form</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Nama</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['name']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Kontak</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['contact']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Email</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['email']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Brand</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['brand']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Akun Instagram</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['instagram']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Lokasi</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['location']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Brand terdaftar di online delivery</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['registered']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Penjualan</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['sales']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="d-flex justify-content-between">
                <span class="font-weight-bold">Pesan</span>
                <span class="d-none d-sm-block">:</span>
              </div>
            </div>
            <div class="col-sm-7">
              <p><?= $data['message']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->