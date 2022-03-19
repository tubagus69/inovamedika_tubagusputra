<?php
include '../../koneksi.php';
$name = $_POST['var_name'];
$harga = $_POST['harga'];
$id = intval($_GET['id']);
$sql = "update tindakan set keterangan = '$name', harga = '$harga' where id_tindakan = '$id'";
$q = mysqli_query($con, $sql);
if ($q) {
    header("location:../tindakan.php");

}
?>