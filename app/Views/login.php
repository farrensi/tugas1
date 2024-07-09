<!-- login.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="<?php echo base_url('login/validate') ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">Login</button>
            </form>
            <p>Don't have an account? <a href="<?php echo base_url('register') ?>">Register</a></p>
        </div>
    </div>
</body>
</html>