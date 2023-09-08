<?php 
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            width: 30%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h2>Register</h2>

        <form action="" method="post">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" autocomplete="off" required>
            </div>

            <div class="input-group">
                <label for="user">Username</label>
                <input type="text" name="user" id="user" autocomplete="off" required>
            </div>

            <div class="input-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>

            <div class="form-button">
                <button type="submit" name="submit" class="btn primary">Register</button>
            </div>

            <div class="input-group">
                <p>Sudah punya akun? <a href="login.php">Login</a>!</p>
            </div>

        </form>
    </div>
</body>
</html>