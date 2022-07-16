<?php 
 
include 'koneksi.php';
$id_muatan=$_POST['id_muatan'];
$jenis_muatan=$_POST['jenis_muatan'];
$harga_per_truck=$_POST['harga_per_truck'];
 
mysqli_query($db,"UPDATE t_muatan SET jenis_muatan='$jenis_muatan', harga_per_truck='$harga_per_truck' WHERE id_muatan='$id_muatan'");



header("location:cargo.php?pesan=update");
 
?>