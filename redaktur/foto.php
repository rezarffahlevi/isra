 <?php
include "../config/koneksi.php";
$a=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username='$_SESSION[namauser]'"));
echo "<img class='img-left framed' width=60 src='../img/foto_user/$a[foto]' border=0 class>"; 
?>