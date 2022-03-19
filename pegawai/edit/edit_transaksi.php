<?php
include '../../koneksi.php';
$id = intval($_GET['id']);
$sql = "update pelayanan set status = 'lunas' where id_pelayanan = '$id'";
$q = mysqli_query($con, $sql);
if ($q) {
    header("location:../transaksi.php");

}
?>