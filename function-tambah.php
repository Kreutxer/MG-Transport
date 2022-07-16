<?php
include 'koneksi.php';

$id_driver=$_POST['id_driver'];
$nama_driver=$_POST['nama_driver'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];

$set = mysqli_query($db, "INSERT INTO t_driver VALUES('$id_driver','$nama_driver', '$jenis_kelamin', '$no_telp', '$alamat')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='driver.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='tambah-driver.php'>";
}

?>