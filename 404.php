<?php
$requestUri = $_SERVER['REQUEST_URI'];
$fullPath=str_replace("/","",$requestUri);

$id=$fullPath;
if($id!=""){
    $jsonFile = './data/1.json';

    $jsonData = file_get_contents($jsonFile);
    $dataObject = json_decode($jsonData,true);
    
    foreach($dataObject as $value){
        if($value['link-name']==$id){
            $linkName=$value['link-name'];
            
            header("Location: works.php?id=".$linkName);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { font-size: 50px; }
        p { font-size: 20px; }
    </style>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist.</p>
    <a href="/">Return to Home</a>
</body>
</html>
