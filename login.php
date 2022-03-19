<?php
require_once("./koneksi.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "select * from user where nama_user = '$user' and password = '$pass'";
$login = mysqli_query($con, $query);
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	session_start();
	if ($data['role'] == "pegawai") {

		$_SESSION['username'] = $user;
		$_SESSION['id'] = $data['id_user'];
		$_SESSION['level'] = "pegawai";

		header("location:./pegawai/dashboard.php");
	} else if ($data['role'] == "user") {
		$_SESSION['username'] = $user;
		$_SESSION['id'] = $data['id_user'];
		$_SESSION['level'] = "user";

		header("location:./user/index_user.php");
	}
} else {
	echo "
		<script>
			alert('Wrong Username / Password!');
			document.location='./index.php';
		</script>
	";
}


// SELECT user.nama_user,obat.nama_obat,obat.harga as "harga obat",tindakan.keterangan,tindakan.harga as "harga tindakan"
// FROM pelayanan 
// INNER JOIN user
// ON pelayanan.id_user = user.id_user
// INNER JOIN obat
// ON pelayanan.id_obat = obat.id_obat
// INNER JOIN tindakan
// ON pelayanan.id_tindakan = tindakan.id_tindakan;