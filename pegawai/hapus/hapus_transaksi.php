<?php
include "../../koneksi.php";

$id = intval($_GET['id']);

            $sql = "delete from pelayanan where id_pelayanan = '$id'";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../../transaksi.php");
            }

?>