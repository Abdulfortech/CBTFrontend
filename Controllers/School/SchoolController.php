<?php
require_once __DIR__ . '../../../config/connection.php';

class SchoolController
{
    private $db;

    public function __construct()
    {
        global $pdo; // use the PDO connection
        $this->db = $pdo;
    }

    // User Signup
    public function signup($firstName, $lastName, $phone, $email, $password, $confirmPassword)
    {
        // Check if passwords match
        if ($password !== $confirmPassword) {
            return ['success' => false, 'message' => 'Passwords do not match.'];
        }

        // Check if email already exists
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            return ['success' => false, 'message' => 'Email already registered.'];
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // insert user into database
        $stmt = $this->db->prepare("INSERT INTO users (first_name, last_name, phone, email, role, status, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $created = $stmt->execute([$firstName, $lastName, $phone, $email, 'user', 'active', $hashedPassword]);

        if ($created) {
            return ['success' => true, 'message' => 'Account created successfully.'];
        } else {
            return ['success' => false, 'message' => 'Failed to create account.'];
        }
    }

    // User Signin
    public function signin($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Example: store user in session
            $_SESSION['user'] = $user;
            return ['success' => true, 'message' => 'User sign in successfully.'];
        }

        return ['success' => false, 'message' => 'Invalid credentials.'];
    }

    // Forgot Password
    public function forgotPassword($email)
    {
        // In production: generate token and email user
        $stmt = $this->db->prepare("SELECT id FROM students WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    // Reset Password
    public function resetPassword($email, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("UPDATE students SET password = ? WHERE email = ?");
        return $stmt->execute([$hashedPassword, $email]);
    }
}
