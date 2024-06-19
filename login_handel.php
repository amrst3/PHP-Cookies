<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rememberMe = isset($_POST['remember_me']);
    // Set the cookie if "remember me" is checked
    if ($rememberMe) {
        $bgColor = $_POST['bg_color'];
        setcookie('bg_color', $bgColor, time() + 3600 * 24 * 30); // 30 days
        setcookie('user_email', $email, time() + 3600 * 24 * 30);
        setcookie('user_password', $password, time() + 3600 * 24 * 30);
    }

    header('Location: home.php');
    exit;
}
?>
