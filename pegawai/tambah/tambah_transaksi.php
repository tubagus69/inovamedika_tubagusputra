<?php
    include '../../koneksi.php';
    $namaUser = $_POST['namauser'];
    $namaObat = $_POST['namaobat'];
    $namaTindakan = $_POST['namatindakan'];

    $idUser = 0;
    $idObat = 0;
    $idTindakan = 0;

    // ========================================

    $sqluser = "SELECT * FROM user where nama_user='$namaUser'";
    $resultuser = mysqli_query($con, $sqluser);
    
    if ($resultuser->num_rows > 0) {        
        $dataUser = mysqli_fetch_assoc($resultuser);
        $idUser=$dataUser['id_user'];
    }

    // ========================================

    $sqlobat = "SELECT * FROM obat where nama_obat='$namaObat'";
    $resultobat = mysqli_query($con, $sqlobat);
    
    if ($resultobat->num_rows > 0) {
        $dataObat = mysqli_fetch_assoc($resultobat);
        $idObat=$dataObat['id_obat'];
    }

    // ========================================

    $sqltindakan = "SELECT * FROM tindakan where keterangan='$namaTindakan'";
    $resulttindakan = mysqli_query($con, $sqltindakan);
    
    if ($resulttindakan->num_rows > 0) {
        $dataTindakan = mysqli_fetch_assoc($resulttindakan);
        $idTindakan=$dataTindakan['id_tindakan'];
    }


    $sql = "insert into pelayanan(id_user,id_obat,id_tindakan,status) values('$idUser','$idObat','$idTindakan','belum lunas')";
    echo "id _obat : ".$idObat."<br>";
    echo "id _tindakan : ".$idTindakan."<br>";
    echo "id User : ".$idUser."<br>";
    $finalresult = mysqli_query($con, $sql);
    echo $finalresult;
    if ($finalresult) {
        header("location:../transaksi.php");
    }else{
        echo 'kk';
        mysqli_error($con);
    }
    ?>