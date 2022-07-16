<?php 
include "koneksi.php";
$id_muatan = $_GET['id_muatan'];
mysqli_query($db,"DELETE FROM t_muatan WHERE id_muatan='$id_muatan'");

header("location:cargo.php");
?>