<?php
$conn = new mysqli("localhost", "root", "", "k0945350_isra");
if($conn -> connect_errno){
	echo "Koneksi gagal";
}