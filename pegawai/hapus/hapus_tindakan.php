<?php
include "../../koneksi.php";

$id = intval($_GET['id']);

            $sql = "delete from tindakan where id_tindakan = '$id'";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../../tindakan.php");
            }

?>