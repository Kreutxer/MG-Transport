<?php 
include "koneksi.php";
$kode_truck = $_GET['kode_truck'];
mysqli_query($db,"DELETE FROM t_truck WHERE kode_truck='$kode_truck'");

header("location:trucks.php");
?>