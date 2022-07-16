<?php 
 
include 'koneksi.php';
$kode_truck=$_POST['kode_truck'];
$nama_truck=$_POST['nama_truck'];
$max_GVW=$_POST['max_GVW'];
 
mysqli_query($db,"UPDATE t_truck SET kode_truck='$kode_truck', nama_truck='$nama_truck', max_GVW='$max_GVW' WHERE kode_truck='$kode_truck'");



header("location:trucks.php?pesan=update");
 
?>