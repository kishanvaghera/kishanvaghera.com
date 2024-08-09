<?php
include("./connect.php");

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getDuplicate($conn,$str){
    $sql = "SELECT * FROM links WHERE vPath='" . $str . "' AND eStatus='y'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(empty($row)){
        return $str;
    }else{
        getDuplicate($conn,generateRandomString());
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $uploadDirectory = 'uploads/';
        
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        $uploadFile = $uploadDirectory . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            $vEmails = mysqli_real_escape_string($conn,$_POST['vEmails']);
            $iCreatedBy = mysqli_real_escape_string($conn,$_POST['iCreatedBy']);
            
            $vStringPath=getDuplicate($conn,generateRandomString(10));

            $sql="INSERT INTO links (`vPath`, `tPermission`,`iCreatedBy`,`dCreatedDate`,`tFileName`) VALUES ('".$vStringPath."','".$vEmails."',".$iCreatedBy.",NOW(),'".$file['name']."')";
            $result = $conn->query($sql);

            echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'File upload failed']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No file uploaded']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
