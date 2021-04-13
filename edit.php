<?php
include("connect.php");
$UserID = $_GET['id'];
$query = "SELECT * from person_012 where idperson='" . $UserID . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['idperson'];
    $nama = $row['nama'];
    $gender = $row['gender'];
    $kotalahir = $row['kotalahir'];
    $tgllahir = $row['tgllahir'];
    $alamat = $row['alamat'];
    $kota = $row['kota'];
    $photo = $row['photo'];
    $pathphoto = $row['pathphoto'];
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Person 081911633012</title>
    <link href="style.css?<?= filemtime("style.css") ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="header">
        <h1>Edit</h1>
    </div>

    <div class="edit-page">
        <div class="form">
            <form action="update.php?id=<?php echo $UserID ?>" method="POST" enctype="multipart/form-data">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
                <label for="gender">Gender</label>
                <input type="radio" id="male" name="gender" value="Male" <?php echo ($gender=="Male" or $gender=="male") ? 'checked' : ''; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" <?php echo ($gender=="Female" or $gender=="female") ? 'checked' : ''; ?>>
                <label for="female">Female</label><br>
                <label for="kotalahir">Kota Lahir</label>
                <input type="text" name="kotalahir" value="<?php echo $kotalahir; ?>"><br>
                <label for="tgllahir">Tanggal lahir</label>
                <input type="date" name="tgllahir" value="<?php echo $tgllahir; ?>"><br>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>"><br>
                <label for="kota">Kota</label>
                <input type="text" name="kota" id="kota" value="<?php echo $kota; ?>"><br>
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo"><br>

                <div class="button">
                    <input type="submit" name="update" id="update" value="Update">
                    <a href="person_012.php" id='cancel'>Cancel</a>
                </div>
            </form>
        </div>
        <div class="container-view">
            <p>Current photo</p>
            <div class="photo-view">
                <img src=<?php echo $pathphoto ?> alt="">
            </div>
        </div>
    </div>



    <div class="footer">
        <p>Halim Wildan Awalurahman (081911633012). 2021.</p>
    </div>


</body>



</html>