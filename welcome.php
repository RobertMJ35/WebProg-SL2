<?php
    session_start();
    $_SESSION["namaDepan"] = "";
    $_SESSION["tempatLahir"] = "";
    $_SESSION["wargaNegara"] = "";
    $_SESSION["alamat"] = "";
    $_SESSION["username"] = "";

    $_SESSION["namaTengah"] = "";
    $_SESSION["tglLahir"] = "";
    $_SESSION["email"] = "";
    $_SESSION["kodePos"] = "";
    $_SESSION["password1"] = "";

    $_SESSION["namaBelakang"] = "";
    $_SESSION["nik"] = "";
    $_SESSION["noHP"] = "";
    $_SESSION["fotoProfil"] = "";
    $_SESSION["password2"] = "";

    $_SESSION["usernameLogin"] = "";
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
            /* background-color: #E5EDEB; */
            background-color: #F2E7FE;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column">
        <p class="text-center" style="font-size: 20pt; margin-top: 2%;">Aplikasi Pengelola Keuangan</p>
        <h2 class="text-center" style="font-size: 40pt; margin-top: 12%">Selamat Datang di Aplikasi Pengelola Keuangan</h2>
        <div class="d-flex justify-content-center" style="margin-top: 6%">
            <a class="btn btn-primary" href="login.php" 
                style="background-color: #985EFF; 
                        /* background-color: #99D6ED; */
                        color: white;
                        border: none;
                        padding: 20pt 30pt 20pt 30pt;
                        justify-content: center;
                        font-size: 30pt;
                        font-weight: 500">Login</a>
            <a class="btn btn-primary" href="register.php" 
                style="background-color: #3700B3; 
                        /* background-color: #C6ED99;  */
                        color: white;
                        border: none;
                        margin-left: 75pt;
                        padding: 20pt 30pt 20pt 30pt;
                        font-size: 30pt;
                        font-weight: 500">Register</a>
        </div>
        <p class="text-center" style="color: #6200EE; font-weight: 500; font-size: 14pt; margin-top: 3%">
            <?php
            if(isset($_SESSION["error"])){
                echo $_SESSION["error"];
            }
                $_SESSION["error"] = "";
            ?>
        </p>
    </div>
</body>
</html>