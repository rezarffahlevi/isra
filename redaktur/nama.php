<?php
include "../config/koneksi.php";
$a=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username='$_SESSION[namauser]'"));
echo "<div class='nama_user'>$a[nama_lengkap]</div>"; 

?>
