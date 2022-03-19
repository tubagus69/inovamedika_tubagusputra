<?php
include '../../koneksi.php';
$name = $_POST['var_name'];
$id = intval($_GET['id']);
$sql = "update wilayah set nama_wilayah = '$name' where id_wilayah = '$id'";
$q = mysqli_query($con, $sql);
if ($q) {
    header("location:../wilayah.php");

}
?>