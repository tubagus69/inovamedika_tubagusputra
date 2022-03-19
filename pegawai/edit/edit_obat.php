<?php
include '../../koneksi.php';
$name = $_POST['var_name'];
$harga = $_POST['harga'];
$id = intval($_GET['id']);
$sql = "update obat set nama_obat = '$name', harga = '$harga' where id_obat = '$id'";
$q = mysqli_query($con, $sql);
if ($q) {
    header("location:../obat.php");

}
?>
