<?php
    session_start();
    include 'config.php';

    $str_query = "SELECT * FROM user WHERE username = '" . $_SESSION['key'] . "'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);

    $_SESSION["fotoProfil"] = $data["foto_profil"];
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
            background-color: #F2E7FE;
        }
    </style>
</head>
<body>
    <div class="nav nav-pills justify-content-end" style="background-color: #3700B3;
                                                            /* background-color: #F9FFCA; */
                                                            padding: 5pt; align-items: center; color: white">
        <div class="nav-item" style="margin-right: 58%">
            <a class="nav-link text-reset fs-4" style="font-weight:500">Aplikasi Pengelola Keuangan</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" href="home.php" style="font-weight:500">Home</a>
        </div>
        <div class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="profile.php" style="font-weight:500; background-color: #F2E7FE; color: black">Profile</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" href="logOut.php" style="font-weight:500">Logout</a>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center"style="margin: 2% 0% 3% 0%; color: black">Edit Profile</h2>
        <form action="prosesEdit.php" enctype="multipart/form-data" method="post">
            <div class="row" style="color: black">
                <div class="col" style="padding-left: 20pt">
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="namaDepan" class="form-label" style="font-weight: 500">Nama Depan</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="namaDepan" style="border: none; width:100%"
                                value="<?php echo $data["nama_depan"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="tempatLahir" class="form-label" style="font-weight: 500">Tempat Lahir</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="tempatLahir" style="border: none; width:100%"
                                value="<?php echo $data["tempat_lahir"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="wargaNegara" class="form-label" style="font-weight: 500">Warga Negara</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="wargaNegara" style="border: none; width:100%"
                                value="<?php echo $data["warga_negara"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="alamat" class="form-label" style="font-weight: 500">Alamat</label>    
                        </div>
                        <div class="col-8">
                            <input type="textarea" class="form-control" name="alamat" style="border: none; width:100%; height: 90pt"
                                value="<?php echo $data["alamat"]; ?>">
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
                                value="<?php echo $data["nama_tengah"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="tglLahir" class="form-label" style="font-weight: 500">Tgl Lahir</label>    
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tglLahir" style="border: none; width:100%"
                                value="<?php echo $data["tgl_lahir"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="email" class="form-label" style="font-weight: 500">Email</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="email" style="border: none; width:100%"
                                value="<?php echo $data["email"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 90pt; align-items: center">
                        <div class="col-4">
                            <label for="kodePos" class="form-label" style="font-weight: 500">Kode Pos</label>    
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="kodePos" style="border: none; width:100%"
                                value="<?php echo $data["kode_pos"]; ?>">
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
                                value="<?php echo $data["nama_belakang"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="nik" class="form-label" style="font-weight: 500">NIK</label>    
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" name="nik" style="border: none; width:100%"
                                value="<?php echo $data["nik"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25pt; align-items: center">
                        <div class="col-4">
                            <label for="noHP" class="form-label" style="font-weight: 500">No HP</label>    
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="noHP" style="border: none; width:100%"
                                value="<?php echo $data["no_hp"]; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10pt; align-items: center">
                        <div class="col-4">
                            <label for="foto" class="form-label" style="font-weight: 500">Foto Profil</label>    
                        </div>
                        <div class="col-8">
                            <div class="row justify-content-center">
                                <img src="<?php echo "fotoProfil/" . $data["foto_profil"] ?>" alt="" style="width: auto; max-height: 150pt">
                            </div>
                            <div class="row justify-content-center" style="margin-top: 10pt">
                            <input type="file" class="form-control" name="foto" style="border: none; width:100%" accept="image/png, image/jpeg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-end" style="color: #BB86FC; font-weight: 500; font-size: 14pt; margin-right: 30pt">
                <?php
                    if(isset($_SESSION["error"])){
                        echo $_SESSION["error"];
                    }
                    $_SESSION["error"] = "";
                ?>
            </p>

            <div class="d-flex justify-content-center" style="margin-top:10pt">
                <a class="btn btn-primary" href="profile.php" 
                    style="background-color: #FFFFFF;
                            /* background-color: #FDD7AC; */
                            width: 150pt;
                            color: black;
                            border: none;
                            margin: 0pt 25pt 0pt 25pt;
                            justify-content: center;
                            font-weight: 500">Kembali</a>
                <input type="submit" value="Save Changes" name="submit" class="btn btn-primary"
                    style="background-color: #3700B3;
                            /* background-color: #ADF59F; */
                            width: 150pt;
                            color: white;
                            border: none;
                            margin: 0pt 25pt 0pt 25pt;
                            font-weight: 500">
            </div>
        </form>
    </div>
</body>
</html>