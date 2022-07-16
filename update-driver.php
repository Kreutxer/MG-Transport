<?php 
 
include 'koneksi.php';
$id_driver=$_POST['id_driver'];
$nama_driver=$_POST['nama_driver'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
 
mysqli_query($db,"UPDATE t_driver SET nama_driver='$nama_driver', no_telp='$no_telp', alamat='$alamat' WHERE id_driver='$id_driver'");
 
header("location:driver.php?pesan=update");
 
?>