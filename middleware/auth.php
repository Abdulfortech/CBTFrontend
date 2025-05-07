<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Not logged in, redirect to login
    header('Location: auth/index.php');
    exit;
}
