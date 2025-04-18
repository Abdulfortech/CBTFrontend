<?php
$config = require __DIR__ . '/../../config/config.php';

  $page = "school-dashboard";
  $title = "School Dashboard";
?>
  <!-- include head tags -->
 <?php include("../includes/head.php"); ?>
<body>

  <!-- ======= Header ======= -->
  <?php include 'components/header.php';?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include 'components/sidebar.php';?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-12">
          <div class="card info-card schoolHeader">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                  <!-- <i class="far fa-user-circle school-icon"></i> -->
                   <img src="../assets/app/img/news-1.jpg" class="school-logo" alt="">
                </div>
                <div class="col-md-9 text-center align-items-center mt-2">
                  <h2 class="school-title">Datti Ahmad Goverment Senior Secondary School</h2>
                  <p class="school-motto"><i>Providing the right knowlegde and skill for technology development</i></p>
                  <!-- <p class="school-contact">0900000000,0800000000, info@good.com.ng.</p> -->
                  <p class="school-address"> No. 00 Shahuci Global Resources, Kano.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="sessions" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Session</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>2023/2023</h6>
                      <span class="text-muted small pt-2 ps-1">1st Term</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="students" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Students</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Students</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="teachers" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Teachers</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Teachers</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="sections" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Sections</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-home"></i>
                    </div>
                    <div class="ps-3">
                      <h6>3</h6>
                      <span class="text-muted small pt-2 ps-1">Active Sections</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="classes" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Classes</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-home"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Classes</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-xxl-4 col-md-4">
              <a href="subjects" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Subjects</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Subjects</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'components/footer.php';?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> -->
  <script src="../assets/vendors/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/app/js/main.js"></script>

</body>

</html>