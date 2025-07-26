
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Warrior</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="background-image"></div>
    <div class="login-container">
        <div class="login-box">
            <h2>Daftar</h2>
            <form action="register_proses.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="input-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="input-group">
                    <label>NAMA</label>
                    <input type="text" id="name" name="name" placeholder="masukkan nama anda" required>
                </div>
                <div class="input-group">
                    <label>no_hp</label>
                    <input type="number" id="no_hp" name="no_hp" placeholder="masukkan nomer hp anda" required>
                </div>
                <div class="input-group">
                    <label>FOTO</label>
                    <input type="file" id="foto" name="foto" placeholder="masukkan foto" required>
                </div>
                <button type="submit" class="btn-login">Daftar</button>
                <p class="register-link">Sudah Punya Akun? <a href="login.php">Login sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>
