<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus Kata Jelek
if ($module=='katajelek' AND $act=='hapus'){
  mysqli_query($conn, "DELETE FROM katajelek WHERE id_jelek='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input kata jelek
elseif ($module=='katajelek' AND $act=='input'){
  mysqli_query($conn, "INSERT INTO katajelek(kata,username,ganti) VALUES('$_POST[kata]','$_SESSION[namauser]','$_POST[ganti]')");
  header('location:../../media.php?module='.$module);
}

// Update kata jelek
elseif ($module=='katajelek' AND $act=='update'){
  mysqli_query($conn, "UPDATE katajelek SET kata = '$_POST[kata]', ganti='$_POST[ganti]' WHERE id_jelek = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
