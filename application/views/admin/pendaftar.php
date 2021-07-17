<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Pendaftar</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengisi Form Pendaftar</h6>
    </div>
    <div class="card-body">
      <table id="datatable1" class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Brand</th>
            <th>Timestamp</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <td class="text-center"><?= $i++; ?></td>
              <td class="text-nowrap"><?= $user['name']; ?></td>
              <td class="text-nowrap"><?= $user['brand']; ?></td>
              <td class="text-nowrap"><?= $user['date_created']; ?></td>
              <td>
                <a href="<?= base_url('data?id=' . $user['id'] . '&data=pendaftar'); ?>" class="btn btn-info btn-circle btn-sm">
                  <i class="fas fa-info-circle"></i>
                </a>
                <a href="<?= base_url('delete_data?id=' . $user['id'] . '&data=pendaftar'); ?>" class="deleteButton btn btn-danger btn-circle btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Brand</th>
            <th>Timestamp</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->