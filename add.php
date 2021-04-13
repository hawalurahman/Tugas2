<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Person 081911633012</title>
    <link href="style.css?<?= filemtime("style.css") ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="header">
        <h1>Tambah</h1>
    </div>

    <div class="form">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label for="nama">Nama</label>
            <input type="text" name="nama"><br>
            <label for="gender">Gender</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <label for="kotalahir">Kota Lahir</label>
            <input type="text" name="kotalahir"><br>
            <label for="tgllahir">Tanggal Lahir</label>
            <input type="date" name="tgllahir"><br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"><br>
            <label for="kota">Kota</label>
            <input type="text" name="kota" id="kota"><br>
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo"><br>
            <div class="button">
                <input type="submit" name="submit" id="submit" value="Tambah">
                <a href="person_012.php" id='cancel'>Cancel</a>
            </div>

        </form>
    </div>


</body>



</html>