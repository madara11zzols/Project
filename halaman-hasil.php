<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Include Font Awesome (for icons) CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Internal CSS styles -->
    <style>
        .kotak {
            background-color: #A183E2;
            width: 500px;
            height: 400px;
            margin: auto; 
            margin-top: 50px;
            border: 1px solid black;                                                                  
        }
            
        .up h3 {
            font-family: Poor Richard;
            font-size: 30px;
            text-align: center;
            margin-top: 10px;
        }

        .up p {
            font-size: 15px;
            text-align: end;
            margin-right: 30px;
        }

        .soal label {
            margin-left: 50px;
            margin-bottom: 10px;
        }

        .soal input {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin-left: 65px;
            margin-bottom: 10px;
        }

        .soal p {
            margin-left: 12px;
            color: white;
        }

        .tombol {
            display: flex;
            justify-content: flex-end;
        }

        .tombol input {
            width: 60px;
            margin-right: 25px;
            display: flex;
            margin-left: 18px;
            margin-top: -40px;
        }

    </style>
</head>
<body style="background:#CED9FF; width:1307px; height:3274px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family:Poor Richard; font-size:50px; font-weight:400; margin-left:50px;" href="#">QuestEasy</a></h1>
        <!-- Toggler button for mobile menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> <!-- The mobile menu icon -->
        </button>
        <!-- Navigation links -->
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" href="#">USER</a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- Kotak dengan kelas "kotak" -->
    <div class="kotak">
        <div class="up">
            <h3>QuestEasy<h3> <!-- Judul QuestEasy -->
            <p>SCORE ANDA : 0</p> <!-- Skor pengguna -->
            <hr> <!-- Garis horizontal -->
        </div>    
            
        <div class="soal">
            <div>                
                <label for="#">1. SOAL PERTANYAAN....</label> <!-- Label untuk pertanyaan -->
            </div>
            <div>
                <input type="submit" value="A"> <!-- Pilihan jawaban A -->
                <input type="submit" value="B"> <!-- Pilihan jawaban B -->
                <input type="submit" value="C"> <!-- Pilihan jawaban C -->
                <input type="submit" value="D"> <!-- Pilihan jawaban D -->
                <hr> <!-- Garis horizontal -->
                <p>1 of 5 Question</p> <!-- Informasi jumlah pertanyaan -->

                <div class="tombol">
                    <input type="submit" value="NEXT"> <!-- Tombol "NEXT" -->
                    <input type="submit" value="DONE"> <!-- Tombol "DONE" -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>