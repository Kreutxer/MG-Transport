<?php
include 'koneksi.php';

$id_muatan=$_POST['id_muatan'];
$jenis_muatan=$_POST['jenis_muatan'];
$harga_per_truck=$_POST['harga_per_truck'];

$set = mysqli_query($db, "INSERT INTO t_muatan VALUES('$id_muatan','$jenis_muatan', '$harga_per_truck')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='cargo.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='cargo.php'>";
}

?>