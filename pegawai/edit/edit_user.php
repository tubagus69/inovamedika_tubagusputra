<?php
include '../../koneksi.php';
$name = $_POST['var_name'];
$password = $_POST['password'];
$id = intval($_GET['id']);
$sql = "update user set nama_user = '$name', password = '$password' where id_user = '$id'";
$q = mysqli_query($con, $sql);
if ($q) {
    header("location:../user.php");

}
?>