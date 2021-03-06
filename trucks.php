<?php
    include "session.php";
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
    <div class="nav">
        <div class="logo"></div>
        <div class="empty"></div>
        <div class="list">
            <div class="wrap">
                <a href="driver.php">Drivers</a>
            </div>
            <div class="wrap">
                <a href="home.php">Home</a>
            </div>
            <div class="wrap">
                <a href="cargo.php">Cargo</a>
            </div>
        </div>
        <div class="blank"></div>
    </div>
    <div class="table-container">
        <div class="driver-title">
            <h1>Drivers</h1>
        </div>
        <div class="table-nav">
            <div class="add">
                <a href="tambah-truck.php" id="a-add">
                    Add +
                </a>
            </div>
            <div class="search">
                <input type="text" name="cari" id="inp-search" placeholder="cari">
                <div class="search-image">
                    <form action="truck.php" method="get">
                        <a href="cari-truck.php" id="search-img"></a>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-content">
            <table>
                <tr>
                    <th id="id">Code</th>
                    <th id="name">Truck Name</th>
                    <th id="gender">Max GVW</th>
                    <th id="act-trucks"></th>
                </tr>
                <?php
                    $no=1;
                    $query=mysqli_query($db, 'SELECT * FROM t_truck');
                    while($data = mysqli_fetch_array($query)):
                    ?>
                    <tr>
                        <td><?= $data['kode_truck'] ?></td>
                        <td><?= $data['nama_truck'] ?></td>
                        <td><?= $data['max_GVW'] ?></td>
                        <td class="act-img">
                            <a id= "tbl" href="hapus-truck.php?kode_truck=<?php echo $data['kode_truck']?>">
                                <div class="hapus"></div>
                            </a>
                            <a id="tbl" href="edit-truck.php?kode_truck=<?php echo $data['kode_truck']?>">
                                <div class="edit"></div>
                            </a>
                        </td>
                        
                    </tr>
                    <?php
                    endwhile;
                ?>
            </table>
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