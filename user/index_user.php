<?php
// include("../config/protectAdmin.php");

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- JS Locals -->
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <!-- Font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <!-- Local Files -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
    
    <link rel="stylesheet" href="../assets/js/jquery-ui-1.12.1/jquery-ui.min.css" />

    <script src="../assets/js/app.js"></script>

    <title>Sistem Informasi Klinik</title>
</head>


<body>
    <div class="navbar">
        <img src="../assets/img/sik.jpg" alt="logo" id="hideSidebar" style="cursor:pointer;">
        <div>
            <a href="../index.php" id="linkLogout">
                <i class="fas fa-power-off    "></i>
                <span>Logout</span>
            </a>
        </div>
    </div>
    
        
    <div class="containerContentuser">
    <?php
            require_once("../koneksi.php");
            $idUser = $_SESSION["id"];
            $sql = 'SELECT pelayanan.id_pelayanan, user.nama_user,obat.nama_obat,obat.harga as "harga_obat",tindakan.keterangan as "tindakan_keterangan",tindakan.harga as "harga_tindakan", pelayanan.status,obat.harga + tindakan.harga as "total"
            FROM pelayanan 
            INNER JOIN user
            ON pelayanan.id_user = user.id_user
            INNER JOIN obat
            ON pelayanan.id_obat = obat.id_obat
            INNER JOIN tindakan
            ON pelayanan.id_tindakan = tindakan.id_tindakan where pelayanan.id_user ='.$idUser;
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                echo '<table class="table table-dark table-hover ">
                <tr>
                      <th>No. Transaksi</th>
                      <th>Nama</th>
                      <th>Obat</th>
                      <th>Harga Obat</th>
                      <th>Keterangan</th>
                      <th>Biaya Administrasi</th>
                      <th>Total Pembayaran</th>
                      <th>Status</th>

                      

                      </tr>';
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<tr>
                  <td>'.$row["id_pelayanan"].'</td>
                  <td>'.$row["nama_user"].'</td>
                  <td>'.$row["nama_obat"].'</td>
                  <td>'.$row["harga_obat"].'</td>
                  <td>'.$row["tindakan_keterangan"].'</td>
                  <td>'.$row["harga_tindakan"].'</td>
                  <td>'.$row["total"].'</td>
                  <td>'.$row["status"].'</td>';

                }
            }
                  ?>
    </div>
    
    </body>

</html>