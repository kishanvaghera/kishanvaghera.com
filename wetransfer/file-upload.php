<?php
session_start();
if(!isset($_SESSION['iUserId'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form id="uploadForm">
        <label>Email ids</label>
        <input type="text" id="vEmails"><br/><br/>
        <input type="file" id="fileInput" name="file"><br/><br/>
        <button type="submit">Upload</button>
    </form>

    <div id="response"></div>

    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const vEmails=document.getElementById("vEmails").value;

            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('file', file);
            formData.append('vEmails', vEmails);
            formData.append('iCreatedBy', '<?=$_SESSION['iUserId']?>');

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('response').innerText = data.message;
                window.location.href = "index.php";

            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('response').innerText = 'An error occurred while uploading the file';
            });
        });
    </script>
</body>
</html>
