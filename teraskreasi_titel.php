<?php
if (isset($_GET['judul'])){
   $sql = mysqli_query($conn, "select judul from berita where judul_seo='$_GET[judul]'");
    $j   = mysqli_fetch_array($sql);
    if ($j) {
        echo "$j[judul]";
    } else{
      $sql2 = mysqli_query($conn, "select nama_website from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
  }
}
else{
      $sql2 = mysqli_query($conn, "select nama_website from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
}
?>
