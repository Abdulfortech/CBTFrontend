<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkulSync | Add Student</title>
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
      <h1>Students</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item"><a href="students">Students</a></li>
          <li class="breadcrumb-item active">Add Student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-9 mx-auto">
        <div class="card">
            <div class="container mt-4 d-flex justify-content-center align-items-center">
                <h3 class="text-center text-default-2 fw-bold">Add Student</h3>
            </div>
            <div class="card-body">
            <form id="addStudentForm">
                    <input class="form-control" type="text" name="schoolid" value="" hidden>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h5 class="text-left">Student Information</h5>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="number">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="firstName" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="number">Middle Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="middleName" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="number">Last Name  <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="lastName" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="number">Registration Number  <span class="text-danger">*</span></label>
                                <?php 
                                    $abr = 'MDE'; $date = date("Y"); $y = substr(date("Y"),2,4); $code = $abr."/".$y."/".sprintf("%04d", 200);
                                ?>
                                <input class="form-control" type="text" value="<?php echo $code; ?>" name="regnumber" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="Name">Date of birth  <span class="text-danger">*</span></label>
                                <input type="date" id="dob" name="dob" class="form-control" ng-model="model.date" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="Name">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control" required>
                                    <option>Choose..</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>State  <span class="text-danger">*</span></label>
                                <select class="form-control" name="state" required>
                                    <option selected value="">Choose..</option>
                                    <?php include 'components/state-list.php';?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>Local Goverment Area  <span class="text-danger">*</span></label>
                                <select class="form-control select-lga" name="lga"  required>
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
                    </div>
                    <div class="row">
                        <h5 class="text-left">Guardian Information</h5>
                        <div class="col-md-8 mb-2">
                            <div class="form-group">
                                <label for="Name">Name </label>
                                <input class="form-control" id="address" type="text" name="gname" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="Name">Relation </label>
                                <select name="grelation" class="form-control" >
                                    <option selected value="">Choose..</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>GrandFather</option>
                                    <option>GrandMother</option>
                                    <option>Uncle</option>
                                    <option>Aunty</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="Name">Phone Number 1  </label>
                                <input class="form-control" type="text" maxlength="11" name="gphone1" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="Name">Phone Number 2</label>
                                <input class="form-control" type="text" maxlength="11" name="gphone2" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Name">Address</label>
                                <input class="form-control" type="text" name="gaddress" >
                            </div>
                        </div>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary mt-4" id="addSessionButton">Submit</button>
                    </center>
                </form>
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