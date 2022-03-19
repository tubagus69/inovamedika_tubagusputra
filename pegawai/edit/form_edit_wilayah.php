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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <!-- Local Files -->
    <link rel="stylesheet" href="../../assets/css/styles.css" />
    <link rel="stylesheet" href="../../assets/css/admin.css" />

    <link rel="stylesheet" href="../../assets/js/jquery-ui-1.12.1/jquery-ui.min.css" />

    <script src="../../assets/js/app.js"></script>

    <title>Sistem Informasi Klinik</title>
</head>


<body>
    <div class="navbar">
        <img src="../../assets/img/sik.jpg" alt="logo" id="hideSidebar" style="cursor:pointer;">
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
                    <a href="../../pegawai/dashboard.php">
                        <i class=""></i>
                        <span>Dashboard</span>

                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../../pegawai/wilayah.php">
                        <i class=""></i>
                        <span>Wilayah</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../../pegawai/obat.php">
                        <i class=""></i>
                        <span>Obat</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../../pegawai/tindakan.php">
                        <i class=""></i>
                        <span>Tindakan</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../../pegawai/pengguna.php">
                        <i class=""></i>
                        <span>Pegawai</span>
                    </a>
                </div>
                <div class="sidebar_item">
                    <a href="../../pegawai/user.php">
                        <i class=""></i>
                        <span>User</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="containerContent">
        <?php
            require_once("../../koneksi.php");
$id = intval($_GET['id']);

            $sql = "SELECT * FROM wilayah where id_wilayah=$id";
            $result = $con->query($sql);
            while ($row = mysqli_fetch_array($result)) {
               
                ?>
            
            <form action="./edit_wilayah.php?id=<?php echo $row[0]?>" method="post">
                <div class="form-item">
                    <label for="var_name">Kota</label>
                    <input type="text" name="var_name" value = "<?php echo $row[1] ?> "class="form-input" required>
                </div>
                <div class="form-item">
                    <button type="submit" class="btn btn-ijo">
                        <i class="fas fa-plus    "></i>
                        <span>Submit</span>
                    </button>
                </div>
            </form>
            <?php

}
?>
        </div>
    </div>

</body>

</html>