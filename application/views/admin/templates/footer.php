</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white py-3">
  <div class="container-fluid my-auto">
    <div class="copyright text-right my-auto">
      <span>Copyright &copy; <a href="https://breakpoint.id">Breakpoint 2021</a></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Silakan klik "Keluar" untuk mengakhiri sesi admin.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/dist/'); ?>jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/'); ?>jquery-easing/jquery.easing.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/vendor/'); ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Sweetalert2 -->
<script src="<?= base_url('assets/dist/'); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/'); ?>sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>script.js"></script>

<!-- Page specific script -->
<script>
  $(function() {
    $("#datatable1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#datatable1_wrapper .col-md-6:eq(0)');
  });
</script>

</body>

</html>