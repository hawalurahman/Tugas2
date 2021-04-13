<?php
include "connect.php";
$id = $_GET['id'];
$nama = $_REQUEST['nama'];
$gender = $_REQUEST['gender'];
$kotalahir = $_REQUEST['kotalahir'];
$tgllahir = $_REQUEST['tgllahir'];
$alamat = $_REQUEST['alamat'];
$kota = $_REQUEST['kota'];
$photo = $_FILES['photo']['name'];

$query = "SELECT * from person_012 where idperson='" . $id . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $pathphoto = $row['pathphoto'];
    $photoawal = $row['photo'];
}

$temp = explode(".", $photo);
$newfilename = round(microtime(true)) . '.' . end($temp);

$tempname = $_FILES['photo']['tmp_name'];
$folder = "img/". $newfilename;

if($photo=="null"){} else {unlink($pathphoto);};

$update = "UPDATE person_012 SET nama='$nama', gender='$gender', kotalahir='$kotalahir', tgllahir='$tgllahir', alamat='$alamat', kota='$kota', photo='$photo', pathphoto='$folder' WHERE idperson='$id'";
$result = mysqli_query($conn, $update);


if ($result) {
    if (move_uploaded_file($tempname, $folder)) {
        echo $id, $nama, $gender, $kotalahir, $tgllahir, $alamat, $kota, $photo;
        echo $tempname;
        echo $photo;
        echo $folder;
        echo $pathphoto;
        echo realpath($photoawal);
       // header("Location: person_012.php");
        exit();
    } else {
        echo $id, $nama, $gender, $kotalahir, $tgllahir, $alamat, $kota, $photo;
        echo $tempname;
        echo $photo;
        echo $folder;
        echo 'Failed to submit. No Photo uploaded';
        echo "<br>";
        echo '<a href="add.php">Back</a>';
    }
} else {
    echo $photoawal;
    echo $pathphoto;
    echo $tempname;
    echo "failed to submit";
    link("add.php", "retry");
}

mysqli_close($conn);
