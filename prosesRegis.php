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
// COL 1
        if($_POST['namaDepan'] == ""){
            $_SESSION["error"] = "Nama Depan harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["namaDepan"] = $_POST['namaDepan'];
        }

        if($_POST['tempatLahir'] == ""){
            $_SESSION["error"] = "Tempat Lahir harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["tempatLahir"] = $_POST['tempatLahir'];
        }

        if($_POST['wargaNegara']==""){
            $_SESSION["error"] = "Warga Negara harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["wargaNegara"] = $_POST['wargaNegara'];
        }

        if($_POST['alamat']==""){
            $_SESSION["error"] = "Alamat harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["alamat"] = $_POST['alamat'];
        }
        
        if($_POST['username']==""){
            $_SESSION["error"] = "Username harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $str_query = "SELECT * FROM user WHERE username = '" . $_POST['username'] . "'";
            $query = mysqli_query($connection, $str_query);
            $data = mysqli_fetch_array($query);

            if(!ctype_alnum($_POST['username'])){
                $_SESSION["error"] = "Username harus Alpha-Numeric";
                $validation = false;
                header("Location: register.php");
            }
            else if($data){
                $_SESSION["error"] = "Username sudah ada";
                $validation = false;
                header("Location: register.php");
            }
            else{
                $_SESSION["username"] = $_POST['username'];
            }
        }

// COL 2
        if($_POST['namaTengah'] == ""){
            $_SESSION["error"] = "Nama Tengah harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["namaTengah"] = $_POST['namaTengah'];
        }

        if($_POST['tglLahir'] == ""){
            $_SESSION["error"] = "Tanggal Lahir harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["tglLahir"] = date("dd-mm-yyyy");
            $_SESSION["tglLahir"] = $_POST['tglLahir'];
        }

        if($_POST['email']==""){
            $_SESSION["error"] = "Email harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION["error"] = "Email Invalid";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["email"] = $_POST['email'];
        }

        if($_POST['kodePos']==""){
            $_SESSION["error"] = "Kode Pos harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(countDigits($_POST['kodePos'])!=5){
            $_SESSION["error"] = "Kode Pos harus 5 digit";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["kodePos"] = $_POST['kodePos'];
        }

        if($_POST['password1']==""){
            $_SESSION["error"] = "Password 1 harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(!preg_match('/[^a-z]/i', $_POST['password1']) || !preg_match('/[^0-9]/i', $_POST['password1'])){
            $_SESSION["error"] = "Password 1 harus terdiri dari huruf dan angka";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["password1"] = $_POST['password1'];
        }

// COL 3
        if($_POST['namaBelakang'] == ""){
            $_SESSION["error"] = "Nama Belakang harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["namaBelakang"] = $_POST['namaBelakang'];
        }

        if($_POST['nik']==""){
            $_SESSION["error"] = "NIK harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(countDigits($_POST['nik'])!=16){
            $_SESSION["error"] = "NIK harus 16 digit";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["nik"] = $_POST['nik'];
        }  

        if($_POST['noHP']==""){
            $_SESSION["error"] = "No HP harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if(countDigits($_POST['noHP'])<10 || countDigits($_POST['noHP'])>13){
            $_SESSION["error"] = "No HP tidak valid";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["noHP"] = $_POST['noHP'];
        }

        if($_POST['password2']==""){
            $_SESSION["error"] = "Password 2 harus di isi";
            $validation = false;
            header("Location: register.php");
        }
        else if($_POST['password2']!=$_POST['password1']){
            $_SESSION["error"] = "Password 2 tidak cocok";
            $validation = false;
            header("Location: register.php");
        }
        else{
            $_SESSION["password2"] = $_POST['password2'];
        }

        $namaFile = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $dirUpload = "fotoProfil/";
        if($namaFile==""){
            $_SESSION["error"] = "Silahkan upload foto profil";
            $validation = false;
            header("Location: register.php");
        }

// INSERT
        if($validation == true){
            $namaDepan = $_SESSION["namaDepan"];
            $tempatLahir = $_SESSION["tempatLahir"];
            $wargaNegara = $_SESSION["wargaNegara"];
            $alamat = $_SESSION["alamat"];
            $username = $_SESSION["username"];

            $namaTengah = $_SESSION["namaTengah"];
            $tglLahir = $_SESSION["tglLahir"];
            $email = $_SESSION["email"];
            $kodePos = $_SESSION["kodePos"];
            $password = md5($_SESSION["password1"]);

            $namaBelakang = $_SESSION["namaBelakang"];
            $nik = $_SESSION["nik"];
            $noHP = $_SESSION["noHP"];

            $uploadFoto = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $fotoProfil = $namaFile;
            
            $str_query = 'INSERT INTO user VALUES("'.$nik.'", "'.$username.'", "'.$password.'", "'.$namaDepan.'", "'.$namaTengah.'", "'.$namaBelakang.'", "'.$tempatLahir.'", "'.$tglLahir.'", "'.$wargaNegara.'", "'.$email.'", "'.$noHP.'", "'.$alamat.'", "'.$kodePos.'", "'.$fotoProfil.'")';
            $query = mysqli_query($connection, $str_query);
            if (!$query) {
                echo 'Gagal Register'.mysqli_error($connection);
            }
            header("Location: welcome.php");
        }
    }
?>