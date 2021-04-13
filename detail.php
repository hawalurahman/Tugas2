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
        <h1>Detail</h1>
    </div>

    <div class="form">
        <div class="info">
            <table class="detail">
                <tr class="detail">
                    <td class="row">ID Person</td>
                    <td class="row"><?php echo $id; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Nama</td>
                    <td class="row"><?php echo $nama; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Gender</td>
                    <td class="row"><?php echo $gender; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Kota Lahir</td>
                    <td class="row"><?php echo $kotalahir; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Tanggal Lahir</td>
                    <td class="row"><?php echo $tgllahir; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Alamat</td>
                    <td class="row"><?php echo $alamat; ?></td>
                </tr>
                <tr class="detail">
                    <td class="row">Kota</td>
                    <td class="row"><?php echo $kota; ?></td>
                </tr>
            </table>
        </div>

        <div class="photo-view">
            <img src=<?php echo $pathphoto ?> alt="">
        </div>


        </form>
    </div>
    <div class="button">
        <a href="person_012.php" id='cancel'>Back</a>
        <a href="edit.php?id=<?php echo $id; ?>" id='edit2'>Edit</a>
    </div>

    <div class="footer">
        <p>Halim Wildan Awalurahman (081911633012). 2021.</p>
    </div>



</body>



</html>