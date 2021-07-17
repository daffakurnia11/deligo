<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Pertanyaan</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengisi Form Pertanyaan</h6>
    </div>
    <div class="card-body">
      <table id="datatable1" class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Timestamp</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Email</th>
            <th>Pertanyaan</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <td class="text-center"><?= $i++; ?></td>
              <td class="text-nowrap"><?= $user['date_created']; ?></td>
              <td class="text-nowrap"><?= $user['name']; ?></td>
              <td class="text-nowrap"><?= $user['contact']; ?></td>
              <td class="text-nowrap"><?= $user['email']; ?></td>
              <td class="text-wrap"><?= $user['message']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Timestamp</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Email</th>
            <th>Pertanyaan</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->