<?php
$bgColor = isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : '#ffffff';
$email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : '';
$userPassword = isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to Your Home Page</h1>
    <p>Your email: <?php echo $email; ?></p>
</body>
</html>

