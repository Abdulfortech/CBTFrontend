<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkulSync | Class Details</title>
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

  <!-- Template Main CSS File -->
  <link href="../assets/app/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/app/css/custome.css">
</head>

<body>


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
        <li class="breadcrumb-item"><a href="classes">Classes</a></li>
          <li class="breadcrumb-item active">View Class</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- stats -->
        <div class="col-lg-12 p-0">
          <div class="row">
            <!-- card -->
            <div class="col-xxl-4 col-md-12">
              <div href="students" class="card info-card sales-card">
                <div class="card-body p-1">
                  <h5 class="card-title"></h5>
                  <div class="col-12 ">
                    <div class="container d-flex justify-content-between mb-2">
                      <h6>SSS 3(Art)</h6>
                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <ol class="breadcrumb data-box border rounded">
                            <li class="breadcrumb-item text-muted">
                              <span class="label">Section : </span> Secondary
                            </li>
                          </ol>
                        </div>
                        <div class="col-md-4">
                          <ol class="breadcrumb data-box border rounded">
                            <li class="breadcrumb-item text-muted">
                              <span class="label">Session : </span> 2023/2024
                            </li>
                          </ol>
                        </div>
                        <div class="col-md-4">
                          <ol class="breadcrumb data-box border rounded">
                            <li class="breadcrumb-item text-muted">
                              <span class="label">Term : </span> 1st Term
                            </li>
                          </ol>
                        </div>
                        <div class="col-md-6 col-6">
                          <ol class="breadcrumb data-box border rounded">
                            <li class="breadcrumb-item text-muted">
                              <span class="label">Students : </span> 35
                            </li>
                          </ol>
                        </div>
                        <div class="col-md-6 col-6">
                          <ol class="breadcrumb data-box border rounded">
                            <li class="breadcrumb-item text-muted">
                              <span class="label">Subjects : </span> 8
                            </li>
                          </ol>
                        </div>
                      </div>
                      <!-- <span class="text-success small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">Active Students</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
                <div class="container d-flex justify-content-between align-items-center">
                    <h5 class="card-title float-start">Students</h5>
                    <a href="class-add" class="float-end btn btn-primary btn-sm"><i class="fa fa-plus"></i> Student</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover" id="datatable">
                        <thead>
                          <tr>
                              <th scope="col">S/N</th>
                              <th scope="col">Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Reg No.</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">5</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">6</th>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>Male</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                  </div>
                </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
                <div class="container d-flex justify-content-between align-items-center">
                    <h5 class="card-title float-start">Subjects</h5>
                    <a href="class-add" class="float-end btn btn-primary btn-sm"><i class="fa fa-plus"></i> Subject</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover" id="datatable">
                        <thead>
                          <tr>
                              <th scope="col">S/N</th>
                              <th scope="col">Title</th>
                              <th scope="col">Teacher</th>
                              <th scope="col">Session</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">5</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <th scope="row">6</th>
                              <td>English</td>
                              <td>Abdullahi Aminu Mudi</td>
                              <td>MDA/20/123</td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>
                                  <a href="class" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                  <a href="#" class="btn btn-warning btn-sm mb-1"><i class="fa fa-trash"></i></a>
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