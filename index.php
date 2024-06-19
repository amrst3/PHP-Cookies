<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login_handel.php">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <label><input type="checkbox" name="remember_me"> Remember me</label>
        <select name="bg_color">
            <option value="#ffffff">White</option>
            <option value="#f0f0f0">Light Gray</option>
            <option value="#333333">Dark Gray</option>
        </select>
        <button type="submit">Login</button>
    </form>
</body>
</html>

