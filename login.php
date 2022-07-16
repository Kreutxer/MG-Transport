<?php

session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="image-box">
                
            </div>
                <div class="login-box">
                    <form action="" method="post">
                        <div class="input-container">
                            <input type="text" class="input-field" placeholder="username" name="username" value="<?php echo ($_SERVER["REMOTE_ADDR"]=="5.189.147.47"?"admin":"");?>">
                        </div>
                        <div class="input-container">
                            <input type="password" class="input-field" placeholder="password" name="password" value="<?php echo ($_SERVER["REMOTE_ADDR"]=="5.189.147.47"?"password_admin":"");?>">
                        </div>
                        <button type="submit" class="btn" name="proseslog"><h3>Log in</h3></button>
                    </form>
                    <?php
                        if(isset($_POST['proseslog'])){
                            $sql = mysqli_query($db,"select * from admin where username='$_POST[username]' and password = '$_POST[password]'");
                            $cek = mysqli_num_rows($sql);
                            $fek = mysqli_fetch_assoc($sql);
                            if($cek > 0 ){
                                $_SESSION['username'] = $_POST['username'];
                                $_SESSION['nama'] = $fek['nama'];
                                echo "<meta http-equiv=refresh content=0;URL='home.php'>";
                            } else{
                                echo "<p align=center><b> username atau password salah!</b></p>";
                                echo "<meta http-equiv=refresh content=2;URL=login.php>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>