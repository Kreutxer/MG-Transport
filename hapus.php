<?php 
include "koneksi.php";
$id_driver = $_GET['id_driver'];
mysqli_query($db,"DELETE FROM t_driver WHERE id_driver='$id_driver'");

header("location:driver.php");
?>