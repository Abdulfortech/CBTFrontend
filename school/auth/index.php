<?php
session_start();
$config = require __DIR__ . '/../../config/config.php';
require __DIR__ .'/../../config/connection.php';

  $page = "School SignIn";
  $title = "School SignIn";

  $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($usernameOrEmail) || empty($password)) {
        $errors[] = "Please fill in all fields.";
    } else {
        
        $stmt = $pdo->prepare("SELECT * FROM schools WHERE username = :value OR email = :value LIMIT 1");
        $stmt->execute(['value' => $usernameOrEmail]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            
            $_SESSION['school_id'] = $user['id'];
            $_SESSION['school_name'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['school_username'] = $user['username'];
            $_SESSION['school_logged_in'] = true;

            if (!empty($_POST['remember'])) {
              setcookie("school_username", $usernameOrEmail, time() + (86400 * 30), "/"); // 30 days
          }

            // Redirect to dashboard
            header("Location: ./dashboard.php");
            exit;
        } else {
            $errors[] = "Invalid username/email or password.";
        }
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
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../../public/assets/app/img/logo.png" alt="">
                  <span class="d-none d-lg-block">SkulSync</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="email" class="form-control" id="username" placeholder="Email" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                      <p class="small mb-0">Forget Password? <a href="./forget">Reset it</a></p>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="./signup">Register Your School</a></p>
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