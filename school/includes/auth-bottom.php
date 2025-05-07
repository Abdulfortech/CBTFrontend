<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> -->
  <script src="../../public/vendors/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/vendors/DataTables/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../../public/assets/js/main.js"></script>
  <!-- Toastr -->
  <script src="../../public/assets/js/jquery-3.7.0.min.js"></script>
  <script src="../../public/assets/js/toastr.js"></script>

  
<?php if (isset($_SESSION['message'])): ?>
    <script>
        toastr.<?= $_SESSION['type'] ?? 'success' ?>(<?= json_encode($_SESSION['message']) ?>);
    </script>
    <?php unset($_SESSION['message'], $_SESSION['type']); ?>
<?php endif; ?>
