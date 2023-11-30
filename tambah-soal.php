<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body style="background:#CED9FF; width:1307px; height:3274px;">
<!-- navbar -->
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1><a class="navbar-brand" style="font-family: Poor Richard; font-size: 50px; font-weight: 400; color: #000" href="#">QuestEasy</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="container">
        <h1>Tambah Soal</h1>
        <form>
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="pilihan-a">Pilihan A</label>
                <input type="text" class="form-control" id="pilihan-a" name="pilihan-a">
            </div>
            <div class="form-group">
                <label for="pilihan-b">Pilihan B</label>
                <input type="text" class="form-control" id="pilihan-b" name="pilihan-b">
            </div>
            <div class="form-group">
                <label for="pilihan-c">Pilihan C</label>
                <input type="text" class="form-control" id="pilihan-c" name="pilihan-c">
            </div>
            <div class="form-group">
                <label for="pilihan-d">Pilihan D</label>
                <input type="text" class="form-control" id="pilihan-d" name="pilihan-d">
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban</label>
                <select class="form-control" id="jawaban" name="jawaban">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Tambahkan script jQuery dan Bootstrap JS (opsional, tergantung kebutuhan) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
