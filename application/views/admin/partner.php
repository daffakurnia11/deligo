<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Logo Partner</h1>

  <div class="row">
    <div class="col-lg-9 col-xl-6">

      <!-- Default Card Example -->
      <div class="card mb-4 shadow">
        <div class="card-header">
          Upload Logo Partner
        </div>
        <div class="card-body">
          <form action="<?= base_url('upload_brand'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="brand" class="font-weight-bold col-sm-4 col-form-label">Nama Brand</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Masukkan Nama Brand">
              </div>
            </div>
            <div class="form-group">
              <label for="partner_img" class="font-weight-bold">Upload Logo Partner</label>
              <input type="file" class="form-control-file" id="partner_img" name="partner_img">
            </div>
            <button type="submit" class="btn btn-success">Upload Logo!</button>
          </form>
        </div>
      </div>

    </div>
    <div class="col-lg-3">
      <div class="card border-left-primary shadow py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Jumlah Partner</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_brand; ?></div>
            </div>
            <div class="col-auto">
              <i class="far fa-handshake fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-4 shadow">
    <div class="card-header">
      Daftar Logo Partner
    </div>
    <div class="card-body">
      <div class="row">
        <?php foreach ($brands as $brand) : ?>
          <div class="col-md-3 text-center">
            <img src="<?= base_url('assets/img/brands/' . $brand['img']); ?>" style="height: 100px" alt="<?= $brand['brand']; ?>">
            <p class="mt-3">
              <?= $brand['brand']; ?>
              <a href="<?= base_url('delete_brand?id=' . $brand['id'] . '&slug=' . $brand['img']); ?>" class="deleteButton btn btn-danger btn-circle btn-sm">
                <i class="fas fa-trash"></i>
              </a>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->