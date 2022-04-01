<?php
    session_start();
    include 'config.php';

    if(isset($_POST['submit'])){
        $username = $_POST['usernameLogin'];
        $password = md5($_POST['passwordLogin']);
        $_SESSION["usernameLogin"] = $username;

        $str_query = "SELECT * FROM user WHERE username = '" . $username . "'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);

        if($data){
            // print_r($data); "</br>";
            if(($username == $data["username"]) && ($password == $data["password"])){
                $_SESSION["error"] = "";
                $_SESSION['key'] = $data["username"];
                header("Location: home.php");
            }
            else if(($username == $data["username"]) && ($password != $data["password"])){
                $_SESSION["error"] = "Password salah";
                header("Location: login.php");
            }
        }
        else{
            $_SESSION["error"] = "Username salah";
            header("Location: login.php");
        }
    }
?>