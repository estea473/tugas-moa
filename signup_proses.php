<?php
include 'db_connection.php'; // Pastikan untuk menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if ($password != $confirm_password) {
        header(header: "Location: login_signup.php?error=Passwords do not match");
        exit();
    }

    // Hash password sebelum disimpan
    $hashed_password = password_hash(password: $password, algo: PASSWORD_DEFAULT);

    // Sanitasi input
    $name = mysqli_real_escape_string(mysql: $conn, string: $name);
    $email = mysqli_real_escape_string(mysql: $conn, string: $email);
    $hashed_password = mysqli_real_escape_string(mysql: $conn, string: $hashed_password);

    // Periksa apakah email sudah terdaftar
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: login_signup.php?error=Email already registered");
    } else {
        // Insert data pengguna ke database
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        if (mysqli_query($conn, $query)) {
            header("Location: login_signup.php?success=Account created successfully");
        } else {
            header("Location: login_signup.php?error=Failed to create account");
        }
    }
}
?>
