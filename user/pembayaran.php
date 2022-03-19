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
                    <a href="../user/index_user.php">
                        <i class=""></i>
                        <span>Dashboard</span>
                        
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../user/daftar_pasien.php">
                        <i class=""></i>
                        <span>Daftar Pasien</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../user/obat.php">
                        <i class=""></i>
                        <span>Obat</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../user/tindakan.php">
                        <i class=""></i>
                        <span>Tindakan</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../user/pembayaran.php">
                        <i class=""></i>
                        <span>Pembayaran</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../user/grafik.php">
                        <i class=""></i>
                        <span>Laporan Grafik</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="containerContent">
        <!-- <a href="./tambah/form_tambah_user.php">
    <button class="btn btn-ijo">
        <i class="fas fa-plus"></i>
        <span>Add Data</span>
    </button> -->
            <?php
            require_once("../koneksi.php");
            $sql = 'SELECT * FROM user WHERE role="user"';
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                echo '<table class="table table-dark table-hover ">
                <tr>
                    <th>Nomor Antrian</th>
                    <th>Nama</th>
                   
                      
                      </tr>';
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<tr>
                  <td>'.$row["id_user"].'</td>
                  <td>'.$row["nama_user"].'</td>';
                  
                  
  
                
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