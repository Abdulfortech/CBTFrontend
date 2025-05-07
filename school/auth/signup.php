<?php
    $config = require __DIR__ . '/../../config/config.php';
    session_start();

    $page = "school-signup";
    $title = "School Sign Up";
?>
  <!-- include head tags -->
 <?php include("../includes/auth-head.php"); ?>
<body>
  <main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="../assets/app/img/logo.png" alt="">
                    <span class="d-none d-lg-block">SkulSync</span>
                </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                    </div>

                    <form action="../actions/authentication.php" method="POST" class="row g-3 needs-validation" novalidate>
                    <!-- first name -->
                    <div class="col-md-6">
                        <label for="yourName" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="fName" required>
                        <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>
                    <!-- last name -->
                    <div class="col-md-6">
                        <label for="yourName" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="lName" required>
                        <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>
                    <!-- email -->
                    <div class="col-md-7">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    <!-- phone number -->
                    <div class="col-md-5">
                        <label for="yourUsername" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="080XXXXXXXXX" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                    <!-- password -->
                    <div class="col-md-6">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <!-- confirm password -->
                    <div class="col-md-6">
                        <label for="yourPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <!-- aggreement -->
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" name="SignUp" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="./">Log In</a></p>
                    </div>
                    </form>

                </div>
                </div>

                <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                &copy; Copyright <a href="https://sgr.com.ng/">SGR</a> <?= date('Y')?>
                </div>

            </div>
            </div>
        </div>

        </section>
    </div>
  </main><!-- End #main -->

  
  <!-- include bottom tags and scrpts -->
 <?php include("../includes/auth-bottom.php"); ?>
</body>

</html>