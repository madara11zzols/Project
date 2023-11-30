<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link font awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background:#CED9FF; width:1307px; height:3274px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family:Poor Richard; font-size:50px; font-weight:400; margin-left:50px;" href="#">QuestEasy</a></h1>
        <!-- Toggler button for mobile menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation links -->
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <!-- nama user ketika login -->
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" href="#nama user">USER</a>
            </li>
            <!-- logout untuk keluar dari halaman dashboard -->
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" href="login.php">LOGOUT</a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- Section: Home -->
    <section class="home" id="home" style="width:100%; min-height:90vh; display:grid; grid-template-columns:repeat(2, 1fr); grid-gap:1.5rem; align-items:center;" >
        <div class="home-text" style="font-family:Poppins; font-size:30px; font-weight:600; margin-left:90px;">
        <div style="color:#34A1DE;">
          <h1>WELCOME</h1>
        </div>
        <P style="color:#371DD4; font-size:25px; font-weight:800;">Cari pengalaman seru dan<br>isi waktu luangmu dengan<br>kuis-kuis menyenangkan</P>
        <a href="register.php" style="color:#466CF4; font-size:20px; font-weight:600;">daftarkan akunmu sekarang!</a>
        </div>
        
        <div class="home-img">
            <img src="quiz.png" alt="" style="width:395px; height:390px; margin-left:80px;">
        </div>
    </section>

    <!-- Section: About -->
    <section class="about" id="about" style="width:100%; min-height:90vh; display:grid; grid-template-columns:repeat(2, 1fr); grid-gap:1.5rem; align-items:center;" >
      <div class="home-img">
        <img src="quiz.png" alt="" style="width:395px; height:390px; margin-left:80px;">
      </div>
      <div class="about-text" style="font-family:Poppins; font-size:30px; font-weight:600; margin-left:50px;">
      <div style="color:#34A1DE;">
        <h1>About Us</h1>
      </div>
        <p style="color:#371DD4; font-size:25px; font-weight:800;">Hello, Kenalan sama kita yuk!<br>QuestEasy adalah website atau aplikasi kuis yang bisa kamu akses untuk kamu belajar!</p>
        <a href="#" style="color:#466CF4; font-size:20px; font-weight:600;">learn more</a>
      </div>
    </section>

    <div class="text-center" style="color:#371DD4; text-align:center; font-family:Poppins; font-size:25px; font-weight:800; margin-top:30px;">
        <p>Hallo Sobat lovers...<br>Ayo Tes pengetahuan dan kemampuan kamu dengan QuestEasy</p>
    </div>
    <div style="width:1000px; margin-left:170px; display:flex; justify-content:space-between;">
      <a href="dashboard.php"><button style="width:400px; height:420px; border:1px solid #000; background:#A183E2; box-shadow:0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
        <img src="Test Pengetahuan.png" style="width:270px; height:271px;">
        <p style="color:#000; text-align:center; font-family:Poppins; font-size:30px; font-weight:600;">Tes Pengetahuan</p>
      </button></a>
      <a href="dashboard.php"><button style="width:400px; height:420px; border:1px solid #000; background:#A183E2; box-shadow:0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
        <img src="Test Kemampuan.png" style="width:290px; height:271px;">
        <p style="color:#000; text-align:center; font-family:Poppins; font-size:30px; font-weight:600;">Tes Kemampuan</p>
      </button></a>
    </div>

    <!-- Section: Services -->
    <section class="services" id="service" style="margin:100px;">
      <div class="text-center">
        <div class="about-text" style="font-family:Poppins; font-size:30px; font-weight:600; margin-left:50px;">
        <div style="color:#34A1DE;">
          <h1>Service</h1>
        </div>
        <div style="color:#371DD4; font-size:25px; font-weight:800;">
          <p>
              Telah hadir!<br>
              sebuah web atau aplikasi kuis yang bisa diakses oleh seluruh orang, siswa/siswi, serta guru diberbagai daerah di Indonesia<br>
              Melalui website ini seorang guru bisa memberikan pertanyaan kepada siswa-siswi nya,<br>
              Jangan lupa Download aplikasinya sekarang juga!
          </p>
        </div>
      </div>
    </section>

    <!-- Section: Quality Performance -->
    <section style="width:845px; height:269px; text-align:center; margin:100px auto; padding:70px 0; border-radius:10px; 
      border:1px solid #000; background:#A183E2; box-shadow:0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
        <h2>We make quality performance<br>Everyday</h2>
        <br>
        <a href="" style="border:1px solid; border-radius:10px; padding:5px 16px; color:#000; text-decoration: none; background-color:#FF0000; font-size:16px;">Learn more</a>
    </section>
      
    <!-- Footer -->
    <!-- halaman bawah website -->
    <div class="contact" style="color:#FFF;">
        <div class="footer" style="width:1351px; height:690px; background:#A183E2;">
            <div class="main" style="margin-left:70px; margin-top:151px; padding-top:100px; display:flex;"> 
                <div class="col">
                    <h4>Ikuti kami</h4>
                  <div class="social" style="width:115px; display:flex; line-height:80px; justify-content:space-between;"><br>
                    <div style="">
                        <a href="#" style="color:#FFF;"><i class="fa-brands fa-facebook" style="height:35px; width:35px; background:rgba(14, 64, 161, 1); 
                        display:inline-flex; justify-content:center; align-items:center; font-size:16px; border-radius:50%;"></i></a>

                        <a href="#" style="color:#FFF;"><i class="fa-brands fa-instagram" style="height:35px; width:35px; background:rgba(14, 64, 161, 1); 
                        display:inline-flex; justify-content:center; align-items:center; font-size:16px; border-radius:50%;"></i></a>

                        <a href="#" style="color:#FFF;"><i class="fa-brands fa-twitter" style="height:35px; width:35px;; background:rgba(14, 64, 161, 1); 
                        display:inline-flex; justify-content:center; align-items:center; font-size:16px; border-radius:50%;"></i></a>
                    </div>
                  </div>
                </div>       
                <div class="col" >
                    <h4>Jelajahi</h4><br>
                    <div style="line-height:40px; text-transform:capitalize;">
                        <a href="#" style="color:#FFF; text-decoration: none;">Tentang kami</a><br>
                        <a href="#" style="color:#FFF; text-decoration: none;">Kebijakan privasi</a><br>
                        <a href="#" style="color:#FFF; text-decoration: none;">Kontak media</a><br>
                        <a href="#" style="color:#FFF; text-decoration: none;">Bantuan</a>
                    </div>
                </div>
                <div class="col">
                    <h4>Hubungi kami</h4><br>
                        <p>Telp: 0274-28845930</p>
                        <p>WA: 0895326474852</p>
                </div>
                <div class="col">
                    <h4>Random quote</h4><br>
                      <p style="line-height:30px;">kesalahan hari ini bukan untuk diulangi
                        <br>pada hari esok,namun untuk diperbaiki
                        <br> di masa yang mendatang
                      </p>
                </div>
            </div>
            <div class="footer" style="margin-top:300px">
              <div class="text-center">
                  Copyright &copy; 2023 - QuestEasy<br>majid-ridho-maulida-amel
              </div>
            </div>
        </div>      
    </div>
</body>
</html>
