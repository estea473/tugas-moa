<?php
session_start();
include 'db_connection.php'; // Pastikan untuk menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitasi input untuk mencegah SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa apakah pengguna ada
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: dashboard1.html");
        } else {
            header("Location: login_signup.php?error=Invalid password");
        }
    } else {
        header("Location: login_signup.php?error=No user found with that email");
    }
}
?>
