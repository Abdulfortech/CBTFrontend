<?php
// Load configuration and DB connection
$config = require __DIR__ . '/../../config/config.php';
require __DIR__ .'/../../config/connection.php';

$page = "school-signup";
$title = "School Sign Up";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fName = trim($_POST['fName']);
    $lName = trim($_POST['lName']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Basic validations
    if (empty($fName) || empty($lName) || empty($username) || empty($email) || empty($phone) || empty($password) || empty($cpassword)) {
        $errors[] = "All fields are required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if ($password !== $cpassword) {
        $errors[] = "Passwords do not match.";
    }

    // Check for existing user
    $stmt = $pdo->prepare("SELECT id FROM schools WHERE username = :username OR email = :email");
    $stmt->execute(['username' => $username, 'email' => $email]);

    if ($stmt->fetch()) {
        $errors[] = "Username or email already exists.";
    }

    // Register new user if no errors
    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO schools (first_name, last_name, username, email, phone, password, created_at)
                               VALUES (:fName, :lName, :username, :email, :phone, :password, NOW())");

        $stmt->execute([
            'fName' => $fName,
            'lName' => $lName,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'password' => $hashedPassword
        ]);

        header("Location: ./?signup=success");
        exit;
    }
}
?>
<!-- include head tags -->
 <?php include("../includes/head.php"); ?>
<body>
  <main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

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

                    <?php if (!empty($errors)): ?>
                     <div class="alert alert-danger">
                      <ul>
                        <?php foreach ($errors as $error): ?>
                         <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                      </ul>
                     </div>
                    <?php endif; ?>

                    <form class="row g-3 needs-validation" method="post" action="" novalidate>
                    <!-- first name -->
                    <div class="col-md-6">
                        <label for="yourName" class="form-label">First Name</label>
                        <input type="text" name="fName" class="form-control" id="fName" required>
                        <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>
                    <!-- last name -->
                    <div class="col-md-6">
                        <label for="yourName" class="form-label">Last Name</label>
                        <input type="text" name="lName" class="form-control" id="lName" required>
                        <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>
                    <!-- username -->
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
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
                        <input type="password" name="cpassword" class="form-control" id="confirmPassword" required>
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
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
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
 <?php include("../includes/head.php"); ?>
</body>

</html>