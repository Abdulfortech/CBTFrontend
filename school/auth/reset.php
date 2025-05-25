<?php
require '../../config/config.php';
require '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT * FROM schools WHERE reset_token = ? AND reset_token_expiry >= NOW()");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        $update = $pdo->prepare("UPDATE schools SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE id = ?");
        $update->execute([$password, $user['id']]);

        echo "Password reset successful. <a href='login.php'>Login</a>";
    } else {
        echo "Invalid or expired token.";
    }
} elseif (isset($_GET['token'])) {
    $token = $_GET['token'];
    echo <<<HTML
<form method="POST">
    <input type="hidden" name="token" value="$token">
    <label>New Password</label>
    <input type="password" name="password" required>
    <button type="submit">Reset Password</button>
</form>
HTML;
}
?>
