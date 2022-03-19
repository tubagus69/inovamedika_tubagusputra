<?php
include "../../koneksi.php";

$id = intval($_GET['id']);

            $sql = "delete from wilayah where id_wilayah = '$id'";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../../wilayah.php");
            }

?>