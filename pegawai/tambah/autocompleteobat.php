<?php
include "../../koneksi.php";
// $searchTerm = $_GET['term']; // Menerima kiriman data dari inputan pengguna

// $sql="SELECT * FROM obat WHERE nama_obat LIKE '%".$searchTerm."%' ORDER BY nama_obat ASC"; // query sql untuk menampilkan data mahasiswa dengan operator LIKE

// $hasil=mysqli_query($con,$sql); //Query dieksekusi

// //Disajikan dengan menggunakan perulangan
// while ($row = mysqli_fetch_array($hasil)) {
//     $data[] = $row['nama_obat'];
// }
// //Nilainya disimpan dalam bentuk json
// echo json_encode($data);

  
  if(isset($_POST["query"])){
    $output = '';
    $key = "%".$_POST["query"]."%";
    $query = "SELECT * FROM obat WHERE nama_obat LIKE '$key'";
    // $dewan1 = $db1->prepare($query);
    // $dewan1->bind_param('s', $key);
    // $dewan1->execute();
    // $res1 = $dewan1->get_result();
    $result=$con->query($query);
 
    $output = '<ul class="list-unstyled">';
    if($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        $output .= '<li>'.$row["nama_obat"].'</li>';  
      }
    } else {
      $output .= '<li>Tidak ada yang cocok.</li>';  
    }  
    $output .= '</ul>';
    echo $output;
  }
?>
