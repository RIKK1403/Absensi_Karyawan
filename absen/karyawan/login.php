<?php

session_start();
include '../koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Bagian Kiri (Logo + Nama) -->
        <div class="left-section">
            <img class="logo" src="../gambar/logo.jfif  " alt="Politeknik Takumi Logo">
            <h1 class="title">POLITEKNIK <br> TAKUMI</h1>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="right-section">
            <div class="login-card">
                <h3 class="login-title">LOGIN KARYAWAN</h3>
                <form class="login-form" method="POST" action="../Plogin/proses_login.php">
                    <div class="input-group">
                        <label for="email">Email Perusahaan</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password">
                    </div>
                    <div class="links">
                        <a href="#">Forget Password?</a>
                        <a href="#">Register</a>
                    </div>
                    <button class="login-btn" type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
