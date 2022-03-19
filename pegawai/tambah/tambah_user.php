<?php
    include '../../koneksi.php';
    $name = $_POST['nama'];
    $password = $_POST['password'];
    $role = "user";
            $sql = "insert into user(nama_user,password,role) values('$name','$password','$role')";
            $q = mysqli_query($con, $sql);
            if ($q) {
                header("location:../user.php");
            }
    ?>