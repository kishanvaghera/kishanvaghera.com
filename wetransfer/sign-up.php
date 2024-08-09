<?php
include("./connect.php");
session_start();
if(isset($_SESSION['iUserId']) && $_SESSION['iUserId']>0){
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $_SESSION['vErrorMsg'] = "";
    $vUserName = mysqli_real_escape_string($conn,$_POST['vUserName']);
    $vPassword = mysqli_real_escape_string($conn,$_POST['vPassword']);

    $sql = "SELECT * FROM user WHERE vUserName='" . $vUserName . "' AND eStatus='y'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!empty($row)){
        $_SESSION['vErrorMsg'] = "Email is already exist.";
    }else{
        $sql="INSERT INTO user (`vUserName`, `vPassword`) VALUES ('".$vUserName."','".sha1($vPassword)."')";
        $result = $conn->query($sql);
        $_SESSION['vErrorSuccs'] = "Account has been created sucessfully.";
        header("Location: login.php");
    }
}
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="msapplication-TileColor" content="#0ed3cf" />
    <meta name="theme-color" content="#0ed3cf" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">
    <form method="post" action="">
        <div class="bg-black before:animate-pulse before:bg-gradient-to-b before:from-gray-900 overflow-hidden before:via-[#00FF00] before:to-gray-900 before:absolute">
            <div id="myDIV">
                <div class="w-[100vw] h-[100vh] px-3 sm:px-5 flex items-center justify-center absolute">
                    <div class="w-full sm:w-1/2 lg:2/3 px-6 bg-gray-500 bg-opacity-20 bg-clip-padding backdrop-filter backdrop-blur-sm text-white z-50 py-4 rounded-lg">
                        <?php
                        if (isset($_SESSION['vErrorMsg'])) {
                        ?>
                            <span style="color:red;"><?= $_SESSION['vErrorMsg'] ?></span>
                        <?php
                            $_SESSION['vErrorMsg']="";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['vErrorSuccs'])) {
                        ?>
                            <span style="color:red;"><?= $_SESSION['vErrorSuccs'] ?></span>
                        <?php
                            $_SESSION['vErrorSuccs']="";
                        }
                        ?>
                        <div class="w-full flex justify-center text-[#00FF00] text-xl mb:2 md:mb-5">
                            Sign Up
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-xs font-medium text-white">Your email</label>
                            <input type="email" name="vUserName" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@alchems.net" required="" />
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-xs font-medium text-white">Your password</label>
                            <input type="password" name="vPassword" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" placeholder="**********" />
                        </div>
                        <button type="submit" name="submit" class="mt-4 md:mt-10 w-full flex justify-center text-sm md:text-xl bg-[#00FF00] py-2 rounded-md">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>
<script src="./login.js"></script>

</html>