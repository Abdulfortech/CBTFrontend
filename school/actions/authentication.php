<?php
require_once __DIR__ . '../../../autoload.php';

$schoolController = new SchoolController();

// signup
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['SignUp'])) {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $response = $schoolController->signup($firstName, $lastName, $phone, $email, $password, $confirmPassword);

    if($response['success'])
    {
        $_SESSION['message'] = $response['message'];
        $_SESSION['type'] = 'success'; 
        header('Location: ../auth/index.php'); 
        exit;
    }else
    {
        $_SESSION['message'] = $response['message'] ?? "Cannot create account. Try again later.";
        $_SESSION['type'] = 'error'; // red toast
        header('Location: ../auth/signup.php'); // redirect back to signup page
        exit;
    }
}
// signin
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['SignIn'])) {
    
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $response = $schoolController->signin($email, $password);

    if($response['success'])
    {
        $_SESSION['message'] = $response['message'];
        $_SESSION['type'] = 'success'; 
        header('Location: ../index.php'); 
        exit;
    }else
    {
        $_SESSION['message'] = $response['message'] ?? "Invalid Credentials. Try again.";
        $_SESSION['type'] = 'error';
        header('Location: ../auth/index.php'); 
        exit;
    }
}
// signout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['SignOut'])) {
    session_start();
    session_unset();
    // session_destroy();

    $_SESSION['message'] = "Sign Out successfully";
    $_SESSION['type'] = 'success';
    header('Location: ../auth/index.php'); 
    exit;
}
