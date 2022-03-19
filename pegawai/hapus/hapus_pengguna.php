<?php
include "../../koneksi.php";

$id = intval($_GET['id']);

            $sql = "delete from user where id_user = '$id'";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../../user.php");
            }

?>