<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "person_012";
    $conn = mysqli_connect($host, $user, $pass, $db) or die("failed to connect"); 
    $data = "SELECT * FROM person_012";
    $result = mysqli_query($conn, $data);
?>