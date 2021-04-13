<?php
include "connect.php";
$nama = $_REQUEST['nama'];
$gender = $_REQUEST['gender'];
$kotalahir = $_REQUEST['kotalahir'];
$tgllahir = $_REQUEST['tgllahir'];
$alamat = $_REQUEST['alamat'];
$kota = $_REQUEST['kota'];
$photo = $_FILES['photo']['name'];

$temp = explode(".", $photo);
$newfilename = round(microtime(true)) . '.' . end($temp);

$tempname = $_FILES["photo"]["tmp_name"];
$folder = "img/" . $newfilename;

$insert = "INSERT Into person_012(nama, gender, kotalahir, tgllahir, alamat, kota, photo, pathphoto) values ('$nama','$gender','$kotalahir','$tgllahir','$alamat','$kota', '$photo', '$folder')";

$result = mysqli_query($conn, $insert);


if ($result) {
    if (move_uploaded_file($tempname, $folder)) {
        header("Location: person_012.php");
        exit();
    } else {
        echo $photo;
        echo $folder;
        echo 'Failed to submit. No Photo uploaded';
        echo "<br>";
        echo '<a href="add.php">Back</a>';
    }
} else {
    echo "failed to submit";
    link("add.php", "retry");
}

mysqli_close($conn);

?>