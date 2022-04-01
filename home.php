<?php
    session_start();
    include 'config.php';
    $str_query = "SELECT * FROM user WHERE username = '" . $_SESSION['key'] . "'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
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
            /* background-color: #CAD1FF; */
            background-color: #F2E7FE;
        }
    </style>
</head>
<body>
    <div class="nav nav-pills justify-content-end" style="background-color: #3700B3;
                                                            /* background-color: #F9FFCA; */
                                                            padding: 5pt; align-items: center; color: white;">
        <div class="nav-item" style="margin-right: 58%">
            <a class="nav-link text-reset fs-4" style="font-weight:500">Aplikasi Pengelola Keuangan</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link active fs-5" aria-current="page" href="home.php" style="font-weight:500; background-color: #F2E7FE; color: black">Home</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-reset fs-5" href="profile.php" style="font-weight:500">Profile</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" href="logOut.php" style="font-weight:500">Logout</a>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center"style="margin: 10% 0% auto 0%">
        Halo
            <strong>
            <?php
                $_SESSION["fullname"] =  $data["nama_depan"] . " " . $data["nama_tengah"] . " " . $data["nama_belakang"];
                echo $_SESSION["fullname"];
            ?>
            </strong>
        , Selamat datang di Aplikasi Pengelola Keuangan
        </h2>
    </div>
</body>
</html>