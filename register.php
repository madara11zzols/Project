<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $remember = isset($_POST["remember"]) ? 1 : 0;

    // Validasi kata sandi
    if ($password !== $confirmpassword) {
        echo "<script>alert('Password and confirm password do not match.');</script>";
        die(); // Menghentikan eksekusi lebih lanjut
    }

    // Periksa apakah nama atau email sudah ada di database
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE nama = '$name' OR email = '$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username or email has already been taken.');</script>";
        die(); // Menghentikan eksekusi lebih lanjut
    }

    // Insert data ke database
    // Untuk tabel 'users' (pendaftaran)
    $query = "INSERT INTO users (nama, email, password, remember) VALUES ('$name', '$email', '$password', $remember)";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful.');</script>";
      } else {
        echo "<script>alert('Registration failed.');</script>";
    }
        $user_id = mysqli_insert_id($conn);

        // Kemudian, insert data ke tabel tb_login dengan merujuk ke ID pengguna
        $query = "INSERT INTO tb_login (user_id, password, remember) VALUES ($user_id, '$password', $remember)";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registration successful.');</script>";
        } else {
            echo "<script>alert('Registration failed.');</script>";
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        /* Ukuran ikon diubah sesuai dengan preferensi */
        .icon i {
          font-size: 37px; /* ukuran ikon */
        }

        /* Gaya lain tetap tidak berubah */
        body {
          font-family: Arial, sans-serif;
          background-color: #CED9FF;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }

        .container {
          background-color: #A183E2;
          border-radius: 50px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          padding: 50px;
          text-align: center;
          width: 300px;
        }

        form {
          display: flex;
          flex-direction: column;
        }

        h2 {
          color: #000;
          font-family: Imprint MT Shadow;
          font-size: 35px;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
          margin-bottom: 55px;
        }

        .input-container {
          margin-bottom: 15px;
          padding-right: 25px;
        }

        .remember-pass {
          margin-bottom: 80px;
          margin-right: 260px;
          display: flex;
        }
        
        label {
          font-weight: bold;
        }

        input {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          outline: none;
          background: #D9D9D9;
        }

        .button {
          background-color: #007bff;
          color: black;
          border-radius: 10px;
          background: #D9D9D9;
          border: none;
          padding: 10px;
          cursor: pointer;
        }

        .button:hover {
          background-color: #CED9FF;
        }

        /* Penambahan gaya untuk ikon */
        .icon {
          justify-content: space-between;
          margin: 20px;
        }

        /* Penambahan gaya untuk elemen 'span' dalam 'icon' */
        .icon span{
          margin: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="home2.php" method="post">
            <h2>SIGN UP</h2>
            <div class="input-container">
                <!-- Input untuk nama (terulang) -->
                <input type="text" id="nama" name="nama" placeholder="nama" required>
            </div>
            <div class="input-container">
                <!-- Input untuk alamat email (terulang) -->
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="input-container">
                <!-- Input untuk password -->
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <div class="input-container">
                <!-- Input untuk password -->
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirmasi password" required>
            </div>
            <div class="remember-pass" >
                <!-- Checkbox untuk mengingat password -->
                <input type="checkbox" id="remember" name="remember">remember
            </div>
            <!-- tombol submit -->
            <input type="submit" name="submit" class="button" value="SIGN UP">
            <p>Already have an account?<a href="login.php"> sign in</a></p>
        </form>
    </div>
    
</body>
</html>