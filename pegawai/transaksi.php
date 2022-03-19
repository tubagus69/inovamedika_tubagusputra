<?php
// include("../config/protectAdmin.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="container_body">
        <div class="sidebar">
            <div class="sidebar_item">
                MENU
            </div>
            <div class="sidebar_container">
                <div class="sidebar_item">
                    <a href="dashboard.php">
                        <i class=""></i>
                        <span>Dashboard</span>
                        
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="wilayah.php">
                        <i class=""></i>
                        <span>Wilayah</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="obat.php">
                        <i class=""></i>
                        <span>Obat</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="tindakan.php">
                        <i class=""></i>
                        <span>Tindakan</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="pengguna.php">
                        <i class=""></i>
                        <span>Pegawai</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="user.php">
                        <i class=""></i>
                        <span>User</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="transaksi.php">
                        <i class=""></i>
                        <span>Transaksi</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="containerContent">
        <a href="./tambah/form_tambah_transaksi.php">
    <button class="btn btn-ijo">
        <i class="fas fa-plus"></i>
        <span>Add Data</span>
    </button>
            <?php
            require_once("../koneksi.php");
            $sql = 'SELECT pelayanan.id_pelayanan, user.nama_user,obat.nama_obat,obat.harga as "harga_obat",tindakan.keterangan as "tindakan_keterangan",tindakan.harga as "harga_tindakan", pelayanan.status,obat.harga + tindakan.harga as "total"
            FROM pelayanan 
            INNER JOIN user
            ON pelayanan.id_user = user.id_user
            INNER JOIN obat
            ON pelayanan.id_obat = obat.id_obat
            INNER JOIN tindakan
            ON pelayanan.id_tindakan = tindakan.id_tindakan';
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
                      <th>Total</th>
                      <th>Status</th>
                      <th>Action</th>

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



  
                  echo '<td>';
                    echo '<a href="./edit/edit_transaksi.php?id='.$row["id_pelayanan"].'">';
                        echo '<button class="btn btn-kuning">';
                            echo '<i class="fas fa-pen"></i>';
                        echo '</button>';
                    echo '</a>';
                    echo '&nbsp';          
                    echo '<a href="./hapus/hapus_transaksi.php/?id='.$row["id_pelayanan"].'">';
                        echo '<button class="btn btn-abang">';
                            echo '<i class="fas fa-trash"></i>';
                        echo '</button>';
                    echo '</a>';
  
                    
                echo '</td>';
            echo '</tr>';
                }
              echo "</table>";
            } else {
              echo "0 results";
            }
            ?>
        </div>
    </div>
</body>

</html>