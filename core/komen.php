 <?php
 include ('config/library.php');

if(isset($_POST['komen'])){

$nama_komentar= strip_tags(htmlentities(htmlspecialchars($_POST['nama_komentar'])));
$v_text = strip_tags(htmlentities(htmlspecialchars($_POST['isi_komentar'])));
$url = $_GET['detail_berita'];
	if(empty($_SESSION['namalengkap']) AND $nama_komentar == 'admin' OR $nama_komentar == 'Admin' OR $nama_komentar == 'ADMIN'){
		echo "<script>alert('Hanya Admin yg boleh menggunakan nama Admin');</script>
	 	<meta http-equiv='refresh' content='0;URL=?detail_berita=$url'>";	
	}
	else{
 $sql = mysqli_query($conn, "INSERT INTO komentar(nama_komentar, isi_komentar, id_berita, tgl, jam_komentar) 
                        VALUES('$nama_komentar','$v_text','$url','$tgl_sekarang','$jam_sekarang')");
   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   
   $kepada = "isra@yahoo.com"; 
   $judul = "Ada komentar di detail_berita=$url";
   $pesan = "Baru saja ada yang kirim komentar di $actual_link\n"; 
   $pesan .= "Cek Komentar: $actual_link"; 
   $kr = mail($kepada,$judul,$pesan,"From: $nama_komentar\r\n");


 if($sql){
 	echo "<script>alert('Komentar Terkirim');</script>
 	<meta http-equiv='refresh' content='0;URL=?detail_berita=$url'>";
 }
 else{
 	echo "<script>alert('Komentar Gagal');</script>
 	<meta http-equiv='refresh' content='0;URL=?detail_berita=$url'>";
 }
 }
}
else if(isset($_POST['balas'])){

$nama_komentar= strip_tags(htmlentities(htmlspecialchars($_POST['nama_komentar'])));
$v_text = strip_tags(htmlentities(htmlspecialchars($_POST['isi_komentar'])));
$url = $_GET['detail_berita'];


 $sql = mysqli_query($conn, "INSERT INTO komentar(nama_komentar, isi_komentar, id_berita, tgl, jam_komentar) 
                        VALUES('$nama_komentar','$v_text','$url','$tgl_sekarang','$jam_sekarang')");
 if($sql){
 	echo "<script>alert('Komentar Terkirim');</script>
 	<meta http-equiv='refresh' content='0;URL=?detail_berita=$url'>";
 }
 else{
 	echo "<script>alert('Komentar Gagal');</script>
 	<meta http-equiv='refresh' content='0;URL=?detail_berita=$url'>";
 }
}

?>