<?php
    $con = mysqli_connect("localhost","root","","klinik");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
?>