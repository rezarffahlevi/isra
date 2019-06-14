<?php
$module=$_GET['module'];
if($module=='detailberita'){
	$sql2 = @mysqli_query($conn, "select isi_berita from berita where judul_seo='$_GET[judul]'");
	$k   = @mysqli_fetch_array($sql2);
	$deskripsi = htmlentities(strip_tags($k['isi_berita']));
}else{
	$deskripsi="$meta_deskripsi";
}
echo"$deskripsi";

?>


<?php
$module=$_GET['module'];
if($module=='halamanstatis'){
	$sql2 = @mysqli_query($conn, "select isi_halaman from halamanstatis where judul_seo='$_GET[judul]'");
	$k   = @mysqli_fetch_array($sql2);
	$halaman = htmlentities(strip_tags($k['isi_halaman']));
}
echo"$halaman";

?>


<?php
$module=$_GET['module'];
if($module=='detailagenda'){
	$sql2 = @mysqli_query($conn, "SELECT * FROM agenda WHERE tema_seo='$_GET[tema]'");
	$k   = @mysqli_fetch_array($sql2);
	$agenda = htmlentities(strip_tags($k['isi_agenda']));
}
echo"$agenda";

?>
