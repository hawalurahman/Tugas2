<?php
include("connect.php");
$id = $_GET['id'];
$query = "SELECT * from person_012 where idperson='" . $id . "'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $status = $row['status'];
}
$active = 1;
$deactive = 0;

if($status==1){
    $updatestatus = "UPDATE person_012 SET `status`='$deactive' WHERE idperson='$id'";
} else {
    $updatestatus = "UPDATE person_012 SET `status`='$active' WHERE idperson='$id'";
}

$result = mysqli_query($conn, $updatestatus);
    

    if($result){
        header("Location: person_012.php");
        exit();
    } else {
        echo "failed to submit";
        link("add.php", "retry");
    }

    mysqli_close($conn);
?>