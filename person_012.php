<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Person 081911633012</title>
    <link href="style.css?<?= filemtime("style.css") ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="header">
        <h1>Data Person</h1>
    </div>

    <div class="tambah">
        <form action="add.php">
            <input type="submit" name="submit" id="submit" value="Tambah">
        </form>
    </div>
    <br>
    <div class="table">
        <table class="table">
            <tr>
                <th class="idperson">IDPerson</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Control</th>
            </tr>

            <?php
            include("connect.php");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $indicator = $row["idperson"];
                    if ($row["status"] == 1) {
                        $status = "Active";
                    } else {
                        $status = "Deactive";
                    };
                    echo
                        "<tr><td>"
                            . $row["idperson"] . "</td><td>"
                            . $row["nama"] . "</td><td>"
                            . $row["alamat"] . "</td><td>";
                    if ($row["status"] == 1) {
                        echo
                            "<div class='control'>
                        <a href='detail.php?id=$indicator' id='detail' name='detail'>Detail</a>
                        <a href='edit.php?id=$indicator' id='edit'>Edit</a>
                        <a href='updatestatus.php?id=$indicator' id='status'>$status</a></td>
                        </div></tr>";
                    } else {
                        echo
                            "<div class='fcontrol'>
                        <a href='' id='fdetail' name='detail'>Detail</a>
                        <a href=''id='fedit'>Edit</a>
                        <a href='updatestatus.php?id=$indicator' id='fstatus'>$status</a></td>
                        </div></tr>";
                    }
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </table>

    </div>

    <div class="footer">
        <p>Halim Wildan Awalurahman (081911633012). 2021.</p>
    </div>

</body>



</html>