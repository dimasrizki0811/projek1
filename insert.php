<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Mahasiswa</title>
</head>
<body>
    <h3>Insert Data Mahasiswa</h3>
    <form action="aksi_insert.php" method="post">
        <div class="form-group">
            <label for="nim">Masukan NIM</label>
            <input type="text" value="" name="nim">
        </div>
        <div class="form-group">
            <label for="nama">Masukan Nama Mahasiswa</label>
            <input type="text" value="" name="nama">
        </div>
        <div class="form-group">
            <label for="jurusan">Masukan Jurusan</label>
            <input type="text" value="" name="jurusan">
        </div>
        <div class="form-group">
            <label for="kelas">Masukan Kelas</label>
            <input type="text" value="" name="kelas">
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
</body>
</html>