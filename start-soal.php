<?php
// Koneksi ke database MySQL
session_start();
include 'koneksi.php';

// // Ambil pertanyaan dari database
// $sql = "SELECT * FROM questions";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "Pertanyaan: " . $row["question_text"] . "<br>";

//         // Ambil jawaban untuk pertanyaan
//         $sql2 = "SELECT * FROM answers WHERE question_id = " . $row["id"];
//         $result2 = mysqli_query($conn, $sql2);

//         if (mysqli_num_rows($result2) > 0) {
//             echo "Jawaban:<br>";
//             while ($row2 = mysqli_fetch_assoc($result2)) {
//                 echo '<input type="submit" value="' . $row2["answer_text"] . '"> ';
//             }
//             echo "<br>";
//         } else {
//             echo "Tidak ada jawaban untuk pertanyaan ini.<br>";
//         }
//         echo "<hr>";
//     }
// } else {
//     echo "Tidak ada pertanyaan dalam database.";
// }

// mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <!-- Menambahkan stylesheet dari berkas eksternal -->
   
    <!-- Menambahkan stylesheet dari Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Menambahkan stylesheet dari Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style type="text/css">
    .kotak {
        background-color: #A183E2;
        width: 500px;
        height: 380px;
        margin: auto;
        margin-top: 50px;
        border: 1px solid black;
        /* Menghapus properti border */
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

    .next {
        display: flex;
        justify-content: flex-end;
    }

    .next input {
        width: 60px;
        margin-right: 25px;
        display: flex;
        margin-left: 18px;
        margin-top: -40px;
    }

    </style>
</head>
<body style="background:#CED9FF; width:1307px; height:3274px;">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family:Poor Richard; font-size:50px; font-weight:400; margin-left:50px;" href="#">QuestEasy</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
        </button>

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
            <h3>QuestEasy</h3>
            <p>SCORE ANDA : 0</p>
            <hr>
        </div>    
            
        <div class="soal">
            <div>                
                <label for="#">1.
                    <?php
                    // Query SQL untuk mengambil pertanyaan dari database
                $sql = "SELECT question_text FROM questions WHERE id = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $question_text = $row["question_text"];
                    echo "<label for='#'>$question_text</label>";
                } else {
                    echo "Tidak ada pertanyaan.";
                }

                mysqli_close($conn);
                    ?>
                </label> <!-- Label untuk pertanyaan -->
            </div>
            <div>
                <?php
                //  // Query SQL untuk mengambil jawaban dari database
                //  $sql2 = "SELECT answer_text FROM answers WHERE question_id = 1";
                //  $result2 = mysqli_query($conn, $sql2);
 
                //  if (mysqli_num_rows($result2) > 0) {
                //      while ($row2 = mysqli_fetch_assoc($result2)) {
                //          $answer_text = $row2["answer_text"];
                //          echo '<input type="submit" value="' . $answer_text . '"> ';
                //      }
                //  } else {
                //      echo "Tidak ada jawaban untuk pertanyaan ini.";
                //  }
 
                //  mysqli_close($conn);
                ?>
                <input type="submit" value="A"> <!-- Pilihan jawaban A -->
                <input type="submit" value="B"> <!-- Pilihan jawaban B -->
                <input type="submit" value="C"> <!-- Pilihan jawaban C -->
                <input type="submit" value="D"> <!-- Pilihan jawaban D -->
                <hr> <!-- Garis horizontal -->
                <p>1 of 5 Question</p> <!-- Informasi jumlah pertanyaan -->
                
                <div class="next">
                    <input type="submit" value="NEXT"> <!-- Tombol "NEXT" -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
