<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkulSync | School Settings</title>
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

  <!-- ======= Header ======= -->
  <?php include 'components/header.php';?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include 'components/sidebar.php';?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>School Settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container align-items-center mt-3">
                    <center>
                        <img src="../assets/app/img/news-1.jpg" class="rounded-circle" width="100" height="100" alt="">
                        <h5 class="card-title fw-bolder">School Profile</h5>
                    </center>
                    <!-- <a data-bs-toggle="modal" class="float-end btn btn-primary btn-sm" data-bs-target="#addSessionModal" ><i class="fa fa-plus"></i> Add Session</a> -->
                </div>
                <div class="card-body">
                    <form id="addStudentForm">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <h5 class="text-left">Basic Information</h5>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="number">School Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="number">School Motto  <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="motto" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="number">School Abbreviation<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="abbr" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="number">Category  <span class="text-danger">*</span></label>
                                    <select class="form-control " id="role"  name="category" >
                                        <option value="">Choose..</option>
                                        <option>Private</option>
                                        <option>Community</option>
                                        <option>Public</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <h5 class="text-left">Contact Information</h5>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="Name">Phone Number 1 <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" maxlength="11" name="phone1" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="Name">Phone Number 2</label>
                                    <input class="form-control" type="text" maxlength="11" name="phone2">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="Name">E-mail</label>
                                    <input class="form-control" type="email"  name="email" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>State  <span class="text-danger">*</span></label>
                                    <select id="state" class="form-control" name="state" required>
                                        <option selected value="">Choose..</option>
                                        <?php include 'components/state-list.php';?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label>Local Goverment Area  <span class="text-danger">*</span></label>
                                    <select id="lga" class="form-control select-lga" name="lga"  required>
                                        <option selected value="">Choose..</option>
                                        <?php include 'components/lga-list.php';?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="Name">Address  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="address" type="text" name="address" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="Name">School Logo </label>
                                    <input class="form-control" id="logo" type="file" name="logo">
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary mt-4" id="Button">Update</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="container d-flex justify-content-between align-items-center">
                    <h5 class="card-title float-start">Sessions</h5>
                    <!-- <a data-bs-toggle="modal" class="float-end btn btn-primary btn-sm" data-bs-target="#addSessionModal" ><i class="fa fa-plus"></i> Add Session</a> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover" id="datatable_less">
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
                                <td>2022/2023</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#"  class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2022/2023</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#"  class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>2022/2023</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#"  class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- terms -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Terms</h5>
                    <div class="table-responsive">
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover" id="datatable_less_terms">
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
                                <td>1st Term</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2nd Term</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3rd Term</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
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
  ?>
  <!-- End Footer -->

  <!-- modals -->
   

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