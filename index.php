<?php 
session_start();
include('config/koneksi.php');
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Isra, Isra News, Isra News Indonesia, isranews, isranewsindonesia"/>
<title>Isra News Indonesia</title>
<link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
<link rel="icon" href="logo/logo.png" type="image/x-icon">
<!-- bootstrap styles-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- google font -->
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'> -->
<!-- ionicons font -->
<link href="css/ionicons.min.css" rel="stylesheet">
<!-- animation styles -->
<link rel="stylesheet" href="css/animate.css" />
<!-- custom styles -->
<link href="css/custom-red.css" rel="stylesheet" id="style">
<!-- owl carousel styles-->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- magnific popup styles -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- preloader start -->
<div id="preloader">
  <div id="status"></div>
</div>
<!-- preloader end --> 
<!-- style switcher start -->
<!-- <div class="switcher" style="left:-50px;"> <a id="switch-panel" class="hide-panel"> <i class="ion-gear-a"></i> </a>
  <div id="switcher">
    <ul class="colors-list">
      <li><a href="#" class="red" id="custom-red"></a></li>
      <li><a href="#" class="green" id="custom-green"></a></li>
      <li><a href="#" class="purple" id="custom-purple"></a></li>
      <li><a href="#" class="blue" id="custom-blue"></a></li>
    </ul>
  </div>
</div> -->
<!-- style switcher end --> 
<!-- wrapper start -->
<div class="wrapper"> 
  <!-- header toolbar start -->
  <?php include('layout/atas.php'); ?>
  <!-- header toolbar end --> 
  
  <!-- sticky header start -->
  <div class="sticky-header"> 
    <!-- header start -->
    <div class="container header">
      <div class="row">
        <div class="col-sm-8 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="#"></a></div>
<?php
$sql=$conn->query("SELECT * FROM iklantengah ORDER BY id_iklantengah DESC LIMIT 0, 1");
while($row=$sql->fetch_array())
{
  ?>    
        <div class="col-sm-5 col-md-6 owl-item hidden-sm hidden-xs"><a href="<?php echo $row['url']; ?>"><img src="<?php echo "img/foto_iklantengah/".$row['gambar']; ?>" width="400" height="70" alt=""/></a></div>
<?php } ?>
        <div class="col-sm-4 col-md-2 hidden-xs"><a href="http://viid.me/qgwt1u">
        <img src="logo/m2dlogo.jpg" width="350" height="80" alt=""/></a></div>
      </div>
    </div>
    <!-- header end --> 
    <!-- nav and search start -->
    <div class="nav-search-outer"> 
      <!-- nav start -->
      <nav class="navbar navbar-inverse" role="navigation">
       <?php include('layout/nav.php'); ?>
      <!-- nav end --> 
        <!-- search start -->
        
        <div class="search-container ">
          <div class="container">
            <form action="?cari" method="" role="search">
              <input name="cari" id="search-bar" placeholder="Cari Berita" autocomplete="off">
            </form>
          </div>
        </div>
        <!-- search end --> 
      </nav>
      <!--nav end--> 
    </div>
    <!-- nav and search end--> 
  </div>
  <!-- sticky header end --> 
  <!-- top sec start -->
  
  <?php include('url.php'); ?>
  <!-- data end --> 
  
  <!-- Footer start -->
    <?php include('layout/footer.php'); ?>
  <!-- Footer end -->
  <?php //include_once('forms/register.php'); ?>
  <!-- FORM LOGIN -->
  <?php //include_once('forms/login.php'); ?>

</div>
<!-- wrapper end --> 

<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!--jQuery easing--> 
<script src="js/jquery.easing.1.3.js"></script> 
<!-- bootstrab js --> 
<script src="js/bootstrap.js"></script> 
<!--style switcher--> 
<script src="js/style-switcher.js"></script> <!--wow animation--> 
<script src="js/wow.min.js"></script> 
<!-- time and date --> 
<script src="js/moment.min.js"></script> 
<!--news ticker--> 
<script src="js/jquery.ticker.js"></script> 
<!-- owl carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- magnific popup --> 
<script src="js/jquery.magnific-popup.js"></script> 
<!-- weather --> 
<script src="js/jquery.simpleWeather.min.js"></script> 
<!-- calendar--> 
<script src="js/jquery.pickmeup.js"></script> 
<!-- go to top --> 
<script src="js/jquery.scrollUp.js"></script> 
<!-- scroll bar --> 
<script src="js/jquery.nicescroll.js"></script> 
<script src="js/jquery.nicescroll.plus.js"></script> 
<!--masonry--> 
<script src="js/masonry.pkgd.js"></script> 
<!--media queries to js--> 
<script src="js/enquire.js"></script> 
<!--custom functions--> 
<script src="js/custom-fun.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKk5TRG13Aw2oKaK6beDNnpZQe%2bxC%2f03uLABH136X%2fyCD1G67jU87EUTCJLvAbXTRlu3qerLxynalMOj%2b0CsvpgOo2OHlS8G%2brvccM699AGzApCyA76WySz2kyqRUZ8%2b2esQqaalUn39eIxoR71tywmEW49Pbv4cgk7Gu0jXRa8IInc1wqI%2b6KUh%2bgk4IYbhO7ywVfggSLpqbu71ta%2b4Oxc8Y2pn%2bY9hK4d1ZnrQNh6wEpyIWdu12azKO4GfG5pANfG8lvmZ3%2fbCUwc1l64SQ57tbSVZ6xM%2bYQ9lxb2Zt2iqUtH7fsqQFXPHgZh6mSVvyWGEB%2bMkK3MqBaQRcS%2b3sbFCwXqZlLDo4gwmlyTAhf5di%2fYeZxcj5Jl2ghjVZyU7P6vZSQtGQGZPCpgIPJwkn3dG3H0uUyKEj1inr4%2bC5ZBDPwDslKTot1DsN4DNdHSWihGgTPRkJ8JV43RtaS10GLvO5sSuXaRCphDemmhuiGe2c%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from webyzona.com//templates/themeforest/globalnews/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 05:29:56 GMT -->
</html>