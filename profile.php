<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengguna</title>
    <!-- link bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background: #CED9FF;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family:Poor Richard; font-size:50px; font-weight:400; margin-left:50px;" href="#">QuestEasy</a></h1>
        <!-- Toggler button for mobile menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
        </button>
        <!-- Navigation links -->
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
            </li>
             <!-- Dropdown menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MENU            
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="data-soal.php">Tambah soal</a>
                    <a class="dropdown-item" href="profile.php">Profile user</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" href="#">USER</a>
            </li>
        </ul>
      </div>
    </nav>
    <!-- text banner -->
    <div class="container" style="margin-top: 90px">
        <div style="font-family:Inter; font-size:15px; font-weight:700;">
            <div style="display:flex;">
                <img src="quiz.png" style=""><!-- Image -->
                <h5 style="margin:30px; margin-top:50px;">Ridho Majid</h5>
                <h5 style="margin-top:100px; margin-left: -130px;">+621234567890</h5>
            </div>
            <hr width="100%"> <!-- Garis horizontal -->
            <p><a href="notifikasi.php" style="color:#000; text-decoration: none;">NOTIFICATIONS</a></p>
            <p><a href="setting.php" style="color:#000; text-decoration: none;">SETTINGS</a></p>
            <p><a href="kuis.php" style="color:#000; text-decoration: none;">MY QUESTIONS</a></p>
        </div>
    </div>
    <!-- Tombol untuk kembali ke halaman beranda -->
    <div style="margin-left:120px;">
        <a href="home.php" type="button" style="border-radius:50px; border: 1px solid; text-align:center; background:#A183E2; width:136px; height:35px; padding:5px; margin-top:55px; color:#000; text-decoration: none;">BACK TO HOME</a>
    </div>


<!-- Link Bootstrap JavaScript (Add this at the end of the body) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>