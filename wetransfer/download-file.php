<?php
include("./connect.php");
session_start();

if(!isset($_SESSION['iUserId'])){
    header("Location: login.php");
}

$_SESSION['fileErr']="";
$requestedUrl = $_SERVER['REQUEST_URI'];
$urlStr=explode("/",$requestedUrl);

$filePath="";
if($requestedUrl=="" || empty($urlStr)){
    $_SESSION['fileErr']="Url Not Exist";
}else{
    $vPath=$urlStr[count($urlStr)-1];
    $sql = "SELECT * FROM links WHERE vPath='" . $vPath . "' AND eStatus='y' AND (FIND_IN_SET('".$_SESSION['vUserName']."', tPermission) OR iCreatedBy=".$_SESSION['iUserId'].")";
    // echo $sql;exit;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(empty($row)){
        $_SESSION['fileErr']="Url Not Exist";
    }else{
        $filePath=$row['tFileName'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download</title>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_SESSION['fileErr']) && $_SESSION['fileErr']!=""){
                echo "Url Not Exits.";
            }else{
        ?>
                <button id="download">Download</button>
        <?php
            }
        ?>
    </div>

    <script>
        document.getElementById('download').onclick = function(){
            // Create FormData object and append the file path
            const formData = new FormData();
            formData.append('file', '<?=$filePath?>');

            // Fetch API call to read-file.php
            fetch('read-file.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.blob(); // Get the response as Blob data
            })
            .then(blob => {
                // Create a temporary URL for the Blob
                const url = window.URL.createObjectURL(blob);

                // Create a temporary anchor element and click it to trigger download
                const a = document.createElement('a');
                a.href = url;
                a.download = '<?=$filePath?>'; // Set the default file name here
                document.body.appendChild(a);
                a.click();

                // Clean up
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle errors as needed
            });
        }
    </script>
</body>
</html>
