<?php
    include "koneksi.php";
    $kode_truck = $_GET['kode_truck'];
    $query_mysql = mysqli_query($db, "SELECT * FROM t_truck WHERE kode_truck='$kode_truck'");
    $data = mysqli_fetch_array($query_mysql);
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

    <div class="nav">
        <div class="logo"></div>
        <div class="empty"></div>
        <div class="list">
            <div class="wrap">
                <a href="home.php">Home</a>
            </div>
            <div class="wrap">
                <a href="trucks.php">Trucks</a>
            </div>
            <div class="wrap">
                <a href="cargo.php">Cargo</a>
            </div>
        </div>
        <div class="blank"></div>
    </div>

        <div class="form-tambah">
        <div class="form-head">
            <div class="asas"><p id="tambah-title">Tambah Driver</p></div>
        </div>
        <div class="form-content">        
            <form action="update-truck.php" method="POST">
                <div class="form-input">
                    <table id="form-table">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td id="lbl">Truck Name</td>
                            <input type="hidden" name="kode_truck" value="<?php echo $data['kode_truck']; ?>">
					        <td><input type="text" name="nama_truck" id="inpt" value="<?php echo $data['nama_truck'] ?>"></td>
                        </tr>
                        <tr>
                            <td id="lbl">Max GVW</td>
                            <td><input type="text" name="max_GVW" id="inpt" value="<?php echo $data['max_GVW']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="simpan" id="" value="Simpan"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="reset" name="" id=""></td>
                        </tr>
                    </table>
                    <!-- <div class="input">
                        <label>ID Driver</label>
                            <input type="text">
                    </div> -->
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="foot-wrapper">
            <div class="contact">
                <div class="contain">
                    <div class="icon-address"></div>
                    <div class="t">JL. Jend. Sudirman No. 3, Pekanbaru</div>
                </div>
                <div class="contain">
                    <div class="icon-phone"></div>
                    <div class="t">+62 852-3381-807</div>
                </div>
                <div class="contain">
                    <div class="icon-email"></div>
                    <div class="t">cs@mgtransport.com</div>
                </div>
            </div>
            <div class="company">
                <div class="company-name">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>