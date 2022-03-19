<?php
    include '../../koneksi.php';
    $name = $_POST['var_name'];
    $harga = $_POST['harga'];
            $sql = "insert into obat(nama_obat,harga) values('$name','$harga')";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../obat.php");
            }
    ?>