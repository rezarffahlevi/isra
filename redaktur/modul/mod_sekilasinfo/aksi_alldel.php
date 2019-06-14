<?php
session_start();
include "../../../config/koneksi.php";


$cek=$_POST[cek];
$jumlah=count($cek);

  for($i=0;$i<$jumlah;$i++){
  $data=mysqli_fetch_array(mysqli_query($conn, "SELECT gambar FROM sekilasinfo WHERE id_sekilas='$cek[$i]'"));
   if ($data[gambar]!=''){       
     mysqli_query($conn, "DELETE FROM sekilasinfo WHERE id_sekilas='$cek[$i]'");
     unlink("../../../foto_info/$data[gambar]");   
     unlink("../../../foto_info/kecil_$data[gambar]");  
      }
      else{ 
           mysqli_query($conn, "DELETE FROM sekilasinfo WHERE id_sekilas='$cek[$i]'");
       }
     header('location:../../media.php?module=sekilasinfo');
	 }
?>