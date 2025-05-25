<?php
$config = require __DIR__ . '/../../config/config.php';
require __DIR__ . '/../../config/connection.php';

  $page = "school-forget-password";
  $title = "School Forget Password";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $stmt = $pdo->prepare("SELECT * FROM schools WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(16));
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $update = $pdo->prepare("UPDATE schools SET reset_token = ?, reset_token_expiry = ? WHERE email = ?");
        $update->execute([$token, $expiry, $email]);

        $resetLink = $config['app_url'] . "/auth/reset.php?token=$token";
        $message = "Click to reset your password: <a href='$resetLink'>$resetLink</a>";

        // Send with PHPMailer
    }

    echo "If this email is registered, a reset link has been sent.";
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
                  <img src="../assets/app/img/logo.png" alt="">
                  <span class="d-none d-lg-block"><?= $config['app_name'] ?></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
                    <p class="text-center small">Enter your email to reset your password</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                      <p class="small mb-0">......sssss....... </p>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Reset</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Back to <a href="./index">Sign In</a></p>
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