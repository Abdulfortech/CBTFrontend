<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkulSync | Classes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendors/bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/vendors/font-awesome-6/css/all.min.css">
  <!-- DataTables  -->
  <link href="../assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="../assets/app/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/app/css/custome.css">
</head>

<body>


  <!-- ======= Header ======= -->
  <?php include 'components/header.php';?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include 'components/sidebar.php';?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Classes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Classes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- stats -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-4 col-md-4">
              <a href="#" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">All Classes</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Classes</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-4 col-md-4">
              <a href="#" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Active Classes</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Classes</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-4 col-md-4">
              <a href="#" class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Inactive Classes</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-home"></i>
                    </div>
                    <div class="ps-3">
                      <h6>3</h6>
                      <span class="text-muted small pt-2 ps-1">Inactive Classes</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
                <div class="container d-flex justify-content-between align-items-center">
                    <h5 class="card-title float-start">Classes</h5>
                    <a href="class-add" class="float-end btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Class</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover" id="datatable">
                        <thead>
                          <tr>
                              <th scope="col">S/N</th>
                              <th scope="col">Title</th>
                              <th scope="col">Label</th>
                              <th scope="col">Section</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>SSS 1A</td>
                              <td>Art</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>SSS 1B</td>
                              <td>Science</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>SSS 2A</td>
                              <td>Art</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>SSS 2B</td>
                              <td>Science</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">5</th>
                              <td>SSS 3A</td>
                              <td>Art</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">6</th>
                              <td>SSS 2B</td>
                              <td>Science</td>
                              <td>Secondary</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="class-edit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                  </div>
                </div>
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
  <script src="../assets/vendors/DataTables/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/app/js/main.js"></script>
  <script src="../assets/app/js/app/index.js"></script>

</body>

</html>