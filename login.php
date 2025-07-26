<?php
session_start();

if(isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html lang="en">
<head>
    <link href="img/logo_no_alby.png" rel="shortcut icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBY GAMES</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="background-image"></div>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="proses_login.php" method="POST">
                <div class="input-group">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="input-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <p class="register-link">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>