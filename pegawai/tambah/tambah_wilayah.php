<?php
    include '../../koneksi.php';
    $name = $_POST['var_name'];
            $sql = "insert into tindakan(nama_wilayah) values('$name')";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../wilayah.php");
            }
    ?>