<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkulSync | Sections</title>
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
      <h1>Sections</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item active">Sections</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container d-flex justify-content-between align-items-center">
                    <h5 class="card-title float-start">Sections</h5>
                    <a href="section-add" class="float-end btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add Section</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Primary</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="section-edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Secondary</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="section-edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Nursery</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="section-edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
            </div> 
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    include 'components/footer.php';
    include 'components/sessions/addModal.php';
    include 'components/sessions/editModal.php';
    include 'components/sessions/deleteModal.php';
  ?>
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