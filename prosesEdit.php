<?php
    session_start();
    include 'config.php';

    $validation = true;
    function countDigits($numbers){
        $numbers = (int)$numbers;
        if($numbers != 0)
            return 1 + countDigits($numbers/10);
        else
            return 0;
    }

    if(isset($_POST['submit'])){
        $namaDepan = $_POST['namaDepan'];
        $email = $_POST['email'];
// COL 1
        if($_POST['namaDepan'] == ""){
            $_SESSION["error"] = "Nama Depan harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            // $namaDepan = $_POST['namaDepan'];
        }

        if($_POST['tempatLahir'] == ""){
            $_SESSION["error"] = "Tempat Lahir harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $tempatLahir = $_POST['tempatLahir'];
        }

        if($_POST['wargaNegara']==""){
            $_SESSION["error"] = "Warga Negara harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $wargaNegara = $_POST['wargaNegara'];
        }

        if($_POST['alamat']==""){
            $_SESSION["error"] = "Alamat harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $alamat = $_POST['alamat'];
        }

// COL 2
        if($_POST['namaTengah'] == ""){
            $_SESSION["error"] = "Nama Tengah harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $namaTengah = $_POST['namaTengah'];
        }

        if($_POST['tglLahir'] == ""){
            $_SESSION["error"] = "Tanggal Lahir harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $tglLahir = $_POST['tglLahir'];
        }

        if($_POST['email']==""){
            $_SESSION["error"] = "Email harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION["error"] = "Email Invalid";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $email = $_POST['email'];
        }

        if($_POST['kodePos']==""){
            $_SESSION["error"] = "Kode Pos harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else if(countDigits($_POST['kodePos'])!=5){
            $_SESSION["error"] = "Kode Pos harus 5 digit";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $kodePos = $_POST['kodePos'];
        }

// COL 3
        if($_POST['namaBelakang'] == ""){
            $_SESSION["error"] = "Nama Belakang harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $namaBelakang = $_POST['namaBelakang'];
        }

        if($_POST['nik']==""){
            $_SESSION["error"] = "NIK harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(countDigits($_POST['nik'])!=16){
            $_SESSION["error"] = "NIK harus 16 digit";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $nik = $_POST['nik'];
        }  

        if($_POST['noHP']==""){
            $_SESSION["error"] = "No HP harus di isi";
            $validation = false;
            header("Location: editProfile.php");
        }
        else if(countDigits($_POST['noHP'])<10 || countDigits($_POST['noHP'])>13){
            $_SESSION["error"] = "No HP tidak valid";
            $validation = false;
            header("Location: editProfile.php");
        }
        else{
            $noHP = $_POST['noHP'];
        }

        $namaFile = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $dirUpload = "fotoProfil/";
        if($namaFile!=""){
            $uploadFoto = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $fotoProfil = $namaFile;
        }
        else{
            $fotoProfil = $_SESSION["fotoProfil"];
        }

// UPDATE
        if($validation == true){
            $namaDepan = $_SESSION["namaDepan"];
            $tempatLahir = $_SESSION["tempatLahir"];
            $wargaNegara = $_SESSION["wargaNegara"];
            $alamat = $_SESSION["alamat"];

            $namaTengah = $_SESSION["namaTengah"];
            $tglLahir = $_SESSION["tglLahir"];
            $email = $_SESSION["email"];
            $kodePos = $_SESSION["kodePos"];

            $namaBelakang = $_SESSION["namaBelakang"];
            $nik = $_SESSION["nik"];
            $noHP = $_SESSION["noHP"];

            $str_query = 'UPDATE user SET nik = "'.$nik.'", nama_depan = "'.$namaDepan.'", nama_tengah = "'.$namaTengah.'", nama_belakang = "'.$namaBelakang.'", tempat_lahir = "'.$tempatLahir.'", tgl_lahir = "'.$tglLahir.'", warga_negara = "'.$wargaNegara.'", email = "'.$email.'", no_hp = "'.$noHP.'", alamat = "'.$alamat.'", kode_pos = "'.$kodePos.'", foto_profil = "'.$fotoProfil.'" WHERE username = "'.$_SESSION['key'].'"';
            $query = mysqli_query($connection, $str_query);
            if (!$query) {
                echo 'Gagal Update'.mysqli_error($connection);
            }
            header("Location: home.php");
        }
    }
?>
