<?php
	if(isset($_GET['p'])){
		if($_GET['p'] == 'hukum'){
			include_once('modul/p/hukum.php');
		}
		else if($_GET['p'] == 'politik'){
			include_once('modul/p/politik.php');
		}
		else if($_GET['p'] == 'ekonomi'){
			include_once('modul/p/ekonomi.php');
		}
		else if($_GET['p'] == 'inter'){
			include_once('modul/p/inter.php');
		}
		else if($_GET['p'] == 'hiburan'){
			include_once('modul/p/hiburan.php');
		}
		else if($_GET['p'] == 'video'){
			include_once('modul/p/video.php');
		}
		else if($_GET['p'] == 'renungan'){
			include_once('modul/p/renungan.php');
		}
		else if($_GET['p'] == 'galeri'){
			include_once('modul/p/galeri.php');
		}
	}
	else if(isset($_GET['detail_berita'])){
		include_once('modul/detail_berita.php');
	}
	else if(isset($_GET['cari'])){
		include_once('modul/cari.php');
	}
	else if(isset($_GET['core'])){
		include_once('core/komen.php');
	}
	else if(isset($_GET['kategori'])){
		include_once('modul/p/kategori.php');
	}
	else{
		include_once('modul/home.php');
	}