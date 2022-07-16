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
    <?php 
    include "koneksi.php";
    $query = mysqli_query($db, "SELECT MAX(id_driver) as idTerbesar FROM t_driver");
    $d = mysqli_fetch_array($query);
    $id_driver = $d['idTerbesar'];

    $urutan = (int) substr($id_driver,3,3);

    $urutan++;

    $huruf = "DR-";
    $id_driver = $huruf . sprintf("%02s", $urutan);
    ?>
    <div class="nav">
        <div class="logo"></div>
        <div class="empty"></div>
        <div class="list">
            <div class="wrap">
                <a href="driver.php">Drivers</a>
            </div>
            <div class="wrap">
                <a href="trucks.php">Trucks</a>
            </div>
            <div class="wrap">
                <a href="">Customers</a>
            </div>
        </div>
        <div class="blank"></div>
    </div>
    <div class="form-tambah">
        <div class="form-head">
            <div class="asas"><p id="tambah-title">Tambah Driver</p></div>
        </div>
        <div class="form-content">
            <form action="function-tambah.php" method="POST">

                <div class="form-input">
                    <table id="form-table">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td id="lbl">ID Driver</td>
                            <td>
                                <input type="text" id="inpt" name="id_driver" required="required" value="<?php echo $id_driver?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td id="lbl">Driver Name</td>
                            <td><input type="text" name="nama_driver" id="inpt"></td>
                        </tr>
                        <tr>
                            <td id="lbl">Gender</td>
                            <td>
                                <select name="jenis_kelamin">
                                    <option value="Unspecified">Choose</option>
                                    <option value="Pria">Male</option>
                                    <option value="Wanita">Female</option>
                                </select>
                                <!-- <input type="text" name="jenis_kelamin" id="inpt"> -->
                            </td>
                        </tr>
                        <tr>
                            <td id="lbl">Phone</td>
                            <td><input type="text" name="no_telp" id="inpt"></td>
                        </tr>
                        <tr>
                            <td id="lbl">Address</td>
                            <td><input type="text" name="alamat" id="inpt"></td>
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