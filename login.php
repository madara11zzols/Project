<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <!-- Sisipkan tautan untuk Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Login</title>
    <style>
        /* Ukuran ikon diubah sesuai dengan preferensi */
        .icon i {
          font-size: 37px; /* Anda bisa mengganti ukuran ikon sesuai dengan kebutuhan */
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
          margin-bottom: 15px;
          margin-right: 280px;
        }

        label {
          font-weight: bold;
        }

        input {
          width: 100%;
          padding: 10px;
          border-radius: 10px;
          background: #D9D9D9;
          border: none;
          outline: none;
        }

        .button {
          border-radius: 30px;
          background: #D9D9D9;
          color: black;
          padding: 10px;
          cursor: pointer;
          margin-top: 20px;
        }

        .button:hover {
          background-color: #CED9FF;
        }

        /* Penambahan gaya untuk ikon */
        p {
            margin-top: 20px;
        }
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
        <form action="login.php" method="post">
            <h2>SIGN IN</h2>
            <div class="input-container">
                <!-- Input untuk alamat email (terulang) -->
                <input type="email" id="email" name="gmail" placeholder="example@gmail.com" required>
            </div>
            <div class="input-container">
                <!-- Input untuk password -->
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
      
            <div class="icon">
                <p>ATAU</p>
                <!-- Ikon sosial media -->
                <span><i class="fab fa-facebook"></i></span>
                <span><i class="fab fa-google"></i></span>
                <span><i class="fab fa-instagram"></i></span>
            </div>
            <!-- tombol submit -->
            <input type="submit" name="submit" class="button" value="SIGN IN">
            <h5>Forgot your login details? get help logging in<br>don't have an account?<a href="register.php"> sign up</a></h5>
        </form>
    </div>
    <?php
    // database login     
    // mengambil data dari form      
        if(isset($_POST['submit'])){
            $username  = $_POST["username"];
            $password  = md5($_POST["password"]);
                
            $cek = mysqli_query($conn, "SELECT * FROM tb_login WHERE username= '".$username."' AND password = '".$password."' ");
            $row = mysqli_fetch_array($cek);
                if(mysqli_num_rows($cek) > 0){
                
                    $_SESSION["status_login"]   = true;
                    $_SESSION["id"]             = $row["id"];
                    $_SESSION["user"]           = $row["username"];
            
                    echo "<script>window.location = 'homepage.php'</script>";
                                
                }else{
                    if($username == 1){
                    mysqli_query($row);

                    }else{
                        if($password){
                            if($row){ 
                                
                            }else{
                                echo "<script> alert('Data yang anda masukan tidak terdaftar!'); </script>";
                            }
                        }else{
                            echo "<script> alert('Username tidak terdaftar!'); </script>";
                        }    
                    }        
                }
            }
        ?>
</body>
</html>