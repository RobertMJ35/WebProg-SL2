<?php
    session_start();
    sleep(1);
    session_destroy();
    header("Location: welcome.php");
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelola Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: 0%;
            width: 100%;
            height: 100%;
            background-color: #CAD1FF;
        }
    </style>
</head>
<body>
    <div class="nav nav-pills justify-content-end" style="background-color: #F9FFCA; padding: 5pt; align-items: center">
        <div class="nav-item" style="margin-right: 58%">
            <a class="nav-link text-reset fs-4" style="font-weight:500">Aplikasi Pengelola Keuangan</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" style="font-weight:500">Home</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-reset fs-5" style="font-weight:500">Profile</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link active fs-5" aria-current="page" href="logOut.php" style="background-color: #454D85; font-weight:500">Logout</a>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center"style="margin-top: 15%; font-size:30pt">
        You've been Logged Out
        <div class="fs-5" style="margin-top: 3%">
            Thanks for using Aplikasi Pengelola Keuangan
        </div>
        </h2>
    </div>
</body>
</html> -->