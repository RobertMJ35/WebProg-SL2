<?php
    session_start();
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
            /* background-color: #C2F0F7; */
            background-color: #985EFF;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center"style="margin: 2% 0% 6% 0%; color: white">Register</h2>
        <form action="prosesRegis.php" enctype="multipart/form-data" method="post">
            <div class="row" style="color: white">
                <div class="col" style="padding-left: 20pt">
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="namaDepan" class="form-label" style="font-weight: 500">Nama Depan</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="namaDepan" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["namaDepan"])){ echo $_SESSION["namaDepan"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="tempatLahir" class="form-label" style="font-weight: 500">Tempat Lahir</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="tempatLahir" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["tempatLahir"])){ echo $_SESSION["tempatLahir"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="wargaNegara" class="form-label" style="font-weight: 500">Warga Negara</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="wargaNegara" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["wargaNegara"])){ echo $_SESSION["wargaNegara"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="alamat" class="form-label" style="font-weight: 500">Alamat</label>    
                        </div>
                        <div class="col-8">
                            <input type="textarea" class="form-control" name="alamat" style="border: none; width:100%; height: 90pt"
                                value="<?php if(isset($_SESSION["alamat"])){ echo $_SESSION["alamat"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="username" class="form-label" style="font-weight: 500">Username</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="username" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["username"])){ echo $_SESSION["username"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="namaTengah" class="form-label" style="font-weight: 500">Nama Tengah</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="namaTengah" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["namaTengah"])){ echo $_SESSION["namaTengah"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="tglLahir" class="form-label" style="font-weight: 500">Tgl Lahir</label>    
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tglLahir" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["tglLahir"])){ echo $_SESSION["tglLahir"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="email" class="form-label" style="font-weight: 500">Email</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="email" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["email"])){ echo $_SESSION["email"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 90pt; align-items: center">
                    <div class="col-4">
                            <label for="kodePos" class="form-label" style="font-weight: 500">Kode Pos</label>    
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="kodePos" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["kodePos"])){ echo $_SESSION["kodePos"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="password1" class="form-label" style="font-weight: 500">Password 1</label>    
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control" name="password1" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["password1"])){ echo $_SESSION["password1"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                </div>

                <div class="col" style="padding-right: 25pt">
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="namaBelakang" class="form-label" style="font-weight: 500">Nama Belakang</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="namaBelakang" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["namaBelakang"])){ echo $_SESSION["namaBelakang"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="nik" class="form-label" style="font-weight: 500">NIK</label>    
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="nik" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["nik"])){ echo $_SESSION["nik"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="noHP" class="form-label" style="font-weight: 500">No HP</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="noHP" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["noHP"])){ echo $_SESSION["noHP"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 90pt; align-items: center">
                    <div class="col-4">
                            <label for="foto" class="form-label" style="font-weight: 500">Foto Profil</label>    
                        </div>
                        <div class="col-8">
                            <input type="file" class="form-control" name="foto" style="border: none; width:100%" accept="image/png, image/jpeg" required>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                            <label for="password2" class="form-label" style="font-weight: 500">Password 2</label>    
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control" name="password2" style="border: none; width:100%"
                                value="<?php if(isset($_SESSION["password2"])){ echo $_SESSION["password2"]; } else { echo ""; }?>" required>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-end" style="color: #E2D4F1; font-weight: 500; font-size: 14pt; margin-right: 30pt">
                <?php
                    if(isset($_SESSION["error"])){
                        echo $_SESSION["error"];
                    }
                    $_SESSION["error"] = "";
                ?>
            </p>

            <div class="d-flex flex-row-reverse" style="margin-top:10pt">
                <input type="submit" value="Register" name="submit" class="btn btn-primary"
                    style="background-color: #4B1989;
                            /* background-color: #ADF59F; */
                            width: 150pt;
                            color: white;
                            border: none;
                            margin: 0pt 25pt 0pt 25pt;
                            font-weight: 500">
                <a class="btn btn-primary" href="welcome.php" 
                    style="background-color: #F2E7FE;
                            /* background-color: #FDD7AC; */
                            width: 150pt;
                            color: black;
                            border: none;
                            margin: 0pt 25pt 0pt 25pt;
                            justify-content: center;
                            font-weight: 500">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>