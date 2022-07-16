<?php
    include "koneksi.php";
    $id_muatan = $_GET['id_muatan'];
    $query_mysql = mysqli_query($db, "SELECT * FROM t_muatan WHERE id_muatan='$id_muatan'");
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
            <div class="asas"><p id="tambah-title">Edit Cargo</p></div>
        </div>
        <div class="form-content">        
            <form action="update-cargo.php" method="POST">
                <div class="form-input">
                    <table id="form-table">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td id="lbl">Jenis Muatan</td>
                            <input type="hidden" name="id_muatan" value="<?php echo $data['id_muatan']; ?>">
					        <td><input type="text" name="jenis_muatan" id="inpt" value="<?php echo $data['jenis_muatan'] ?>"></td>
                            <!-- <td id="lbl">Driver Name</td>
                            <td><input type="text" name="nama_driver" id="inpt"></td> -->
                        </tr>
                        <tr>
                            <td id="lbl">Harga</td>
                            <td><input type="text" name="harga_per_truck" id="inpt" value="<?php echo $data['harga_per_truck']?>"></td>
                        </tr>
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