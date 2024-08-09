<?php
include("./connect.php");
session_start();
if (!isset($_SESSION['iUserId'])) {
    header("Location: login.php");
}

function getRemainDays($dateStr){
    $givenDate = $dateStr;
    $date = new DateTime($givenDate);
    $date->modify('+7 days');
    $dateAfter7Days = $date->format('Y-m-d H:i:s');
    $currentDate = new DateTime();
    $interval = $currentDate->diff($date);
    $remainingDays = $interval->format('%a');

    return $remainingDays." Days Left";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="./file-upload.php">File Upload</a>
    <a href="./logout.php">Logout</a>

    <table>
        <thead>
            <tr>
                <th>Path</th>
                <th>Permissions</th>
                <th>Expired</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM links WHERE iCreatedBy='" . $_SESSION['iUserId'] . "' AND eStatus='y' ORDER BY iLinkId DESC";
                $result = $conn->query($sql);
                    $i=0;
                while($row = $result->fetch_assoc()) {
            ?>
                <tr style="--zi: <?=$i?>">
                    <td><?=$_SERVER['SERVER_NAME']."/wetransfer/".$row['vPath']?></td>
                    <td><?=$row['tPermission']?></td>
                    <td><?=getRemainDays($row['dCreatedDate'])?></td>
                </tr>
            <?php
                $i--;
                }    
            ?>
        </tbody>
    </table>
</body>

</html>