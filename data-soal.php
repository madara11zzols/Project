<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Link Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-16">
                <div class="card-body">
                    <a  class="btn btn-primary" href="tambah.html" style="margin-bottom: 30px; margin-top: 30px;">+ tambah data soal</a> <!-- Button to add data -->

                    <table border="1" class="table table-bordered" style="text-align: center;">
                        <tr>
                            <th>NO</th>
                            <th>SOAL</th>
                            <th>JAWABAN</th>
                            <th>OPTION</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>AYAM</td>
                            <td>KUCING</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary" href="edit.php">Edit</a> <!-- Edit button -->
                                    <form action=""  method="post">
                                        <input class="btn btn-danger" type="submit" value="delete"> <!-- Delete button -->
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JavaScript (Add this at the end of the body) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>