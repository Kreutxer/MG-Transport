<?php
include 'koneksi.php';

$kode_truck=$_POST['kode_truck'];
$nama_truck=$_POST['nama_truck'];
$max_GVW=$_POST['max_GVW'];

$set = mysqli_query($db, "INSERT INTO t_truck VALUES('$kode_truck','$nama_truck', '$max_GVW')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='trucks.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='trucks.php'>";
}

?>