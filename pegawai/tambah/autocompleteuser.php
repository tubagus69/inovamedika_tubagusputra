<?php
include "../../koneksi.php"; //Include file koneksi

if(isset($_POST["queryuser"])){
    $output = '';
    $key = "%".$_POST["queryuser"]."%";
    $query = "SELECT * FROM user WHERE role = 'user' && nama_user LIKE '$key'";
    // $dewan1 = $db1->prepare($query);
    // $dewan1->bind_param('s', $key);
    // $dewan1->execute();
    // $res1 = $dewan1->get_result();
    $result=$con->query($query);
 
    $output = '<ul class="list-unstyled">';
    if($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        $output .= '<li>'.$row["nama_user"].'</li>';  
      }
    } else {
      $output .= '<li>Tidak ada yang cocok.</li>';  
    }  
    $output .= '</ul>';
    echo $output;
  }
?>