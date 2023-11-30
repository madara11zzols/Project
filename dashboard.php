<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link  href="https://unpkg.com/boxicons@latest/css/boxicon.min.css">
</head>
<body style="background: #CED9FF;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family: Poor Richard; font-size: 50px; font-weight: 400;" href="#">QuestEasy</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- tombol menu -->
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
            </li>
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
                <a class="nav-link disabled" aria-disabled="true">USER</a>
            </li>
            
        </ul>
      </div>
    </nav>
    <!-- text banner -->
   <div class="container" style="margin-top: 70px;">
   <center>
        <div style="font-family:Poor Richard; font-size:30px; ">
            <p>QUESTIONS ANSWER</p>
        </div>
        <div style="font-family: inter;">
            <P>HELLO, USER</P>
            <P>Apakah anda akan memulai Aplikasi kuis ini?</P>
            <p>Klik disini untuk memulai kuis!</p>
        </div>
        <!-- tombol -->
        <div style="center">
        <a href="start-soal.php" type="submit" style="border-radius:50px; border:1px solid; background:#A183E2; width:136px; height:38px; padding:5px; color:#000; text-decoration:none;">MULAI KUIS</a>
        </div>
    </div>
   </center>

   <!-- Link Bootstrap JavaScript (Add this at the end of the body) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>