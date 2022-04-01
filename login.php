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
            /* background-color: #FBFDAC; */
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <h2 class="text-center"style="margin: 4% 0% 8% 0%">Login</h2>
        <form action="prosesLogin.php" class="d-flex justify-content-center" method="post">
            <div class="col-6" style="background-color: #985EFF;
                                        /* background-color: #ACE6FD; */
                                        padding: 30pt 70pt 20pt 70pt">
                <div class="row" style="margin-bottom: 20pt; align-items: center">
                    <div class="col-3">
                        <label for="usernameLogin" class="form-label" style="font-weight: 500; font-size:14pt; color: white">Username</label>    
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="usernameLogin" style="border: none; width:100%"
                        value="<?php if(isset($_SESSION["usernameLogin"])){ echo $_SESSION["usernameLogin"]; } else { echo ""; }?>" required>
                    </div>
                </div>
                <div class="row" style="align-items: center">
                    <div class="col-3">
                        <label for="passwordLogin" class="form-label" style="font-weight: 500; font-size:14pt; color: white">Password</label>    
                    </div>
                    <div class="col-9">
                        <input type="password" class="form-control" name="passwordLogin" style="border: none; width:100%" required>
                    </div>
                </div>

                <div class="row" style="align-items: center; margin-top: 5pt">
                    <div class="col-3"></div>
                    <div class="col-9">
                        <p style="color: #E2D4F1; font-weight: 500; font-size: 14pt; margin-top: 3%">
                            <?php
                                if(isset($_SESSION["error"])){
                                    echo $_SESSION["error"];
                                }
                                $_SESSION["error"] = "";
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-top: 8pt; align-items: center">
                    <div class="col-3"></div>
                    <div class="col-9">
                        <input type="submit" value="Login" name="submit" class="btn btn-primary"
                            style="background-color: #4B1989;
                                    /* background-color: #ADF59F; */
                                    width: 100pt;
                                    color: white;
                                    border: none;
                                    margin-left: 5pt;
                                    justify-content: center;
                                    font-size: 14pt;
                                    font-weight: 500">
                        <a class="btn btn-primary" href="welcome.php" 
                            style="background-color: #F2E7FE;
                                    /* background-color: #FDD7AC; */
                                    width: 110pt;
                                    color: black;
                                    border: none;
                                    margin-left: 30pt;
                                    justify-content: center;
                                    font-size: 14pt;
                                    font-weight: 500">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>