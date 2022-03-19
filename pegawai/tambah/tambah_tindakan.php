<?php
    include '../../koneksi.php';
    $name = $_POST['var_name'];
    $harga = $_POST['harga'];
            $sql = "insert into tindakan(keterangan,harga) values('$name','$harga')";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../tindakan.php");
            }
    ?>