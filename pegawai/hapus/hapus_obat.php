<?php
include "../../koneksi.php";

$id = intval($_GET['id']);

            $sql = "delete from obat where id_obat = '$id'";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../../obat.php");
            }

?>