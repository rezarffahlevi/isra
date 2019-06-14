        <div class="container">
          <div class="row">
            <div class="col-sm-16"> <a href="javascript:;" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php
          
  if(isset($_GET['p'])){
    if($_GET['p'] == 'hukum'){
      $d = "active";
    }
    else if($_GET['p'] == 'politik'){
      $d = "active";
    }
    else if($_GET['p'] == 'ekonomi'){
      $d = "active";
    }
    else if($_GET['p'] == 'inter'){
      $i = "active";
    }
    else if($_GET['p'] == 'hiburan'){
      $hi = "active";
    }
    else if($_GET['p'] == 'video'){
      $v = "active";
    }
    else if($_GET['p'] == 'renungan'){
      $r = "active";
    }
    else if($_GET['p'] == 'galeri'){
      $m = "active";
    }
  }
  else if(isset($_GET['home'])){
    $a = "active";
  }
          ?>
                <ul class="nav navbar-nav text-uppercase main-nav ">
                  <li class="<?php echo $a; ?>"><a href="?home">BERANDA</a></li>
                  <li class="dropdown <?php echo $d; ?>"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">NASIONAL<span class="ion-ios7-arrow-down nav-icn"></span></a>
                    <ul class="dropdown-menu text-capitalize" role="menu">
                      <!-- <li> -->
                        <!-- <div class="row"> -->
                         <!--  <div class="col-sm-16"> -->
                            <!-- <div class="row"> -->
                              <!-- <div class="col-xs-16 col-sm-16 col-md-6 col-lg-6"> -->
                                <!-- <ul class="mega-sub"> -->
                                  <li><a href="?p=hukum"><span class="ion-ios7-arrow-right nav-sub-icn"></span>HUKUM<!-- <span class="badge pull-right">Featured</span> --></a> </li>
                                  <li><a href="?p=politik"><span class="ion-ios7-arrow-right nav-sub-icn"></span>POLITIK</a> </li>
                                  <li><a href="?p=ekonomi"><span class="ion-ios7-arrow-right nav-sub-icn"></span>EKONOMI<!-- <span class="badge pull-right">New</span> --></a> </li>
  
                               <!--  </ul> -->
                              <!-- </div> -->
<!--                               <div class="col-sm-10 mega-sub-topics hidden-sm hidden-xs">
                                <div class="row">
                                  <div class="col-sm-8">
                                    <div class="vid-thumb">
                                      <h4>Buying a home: is it worth paying for a Homebuyer Report?</h4>
                                      <a class="popup-youtube" href="https://www.youtube.com/watch?v=TEnNaUg6Vm4">
                                      <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-2.jpg" width="300" height="132" alt=""/> </div>
                                      </a> </div>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="sub-topic-thumb">
                                      <h4>Sugar-free chocolate recipes: dark chocolate</h4>
                                      <a href="#">
                                      <div class="sub-box"><img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-1.jpg" width="300" height="132" alt=""/> </div>
                                      </a> </div>
                                  </div>
                                </div>
                              </div> -->
                           <!--  </div> -->
                        <!--   </div> -->
                       <!--  </div> -->
                      <!-- </li> -->
                    </ul>
                  </li>
                  <li class="<?php echo $i; ?>"><a href="?p=inter">INTERNASIONAL</a></li>
                  <li class="<?php echo $hi; ?>"><a href="?p=hiburan">HIBURAN</a></li>
                  <li class="<?php echo $v; ?>"><a href="?p=video">VIDEO</a></li>
                  <li class="<?php echo $r; ?>"><a href="?p=renungan">RENUNGAN</a></li>
                  <li class="<?php echo $m; ?>"><a href="?p=galeri">GALERI</a></li>
                  <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">KATEGORI</a>

                    <ul class="dropdown-menu text-capitalize" role="menu">
<?php
$k=$conn->query("SELECT * FROM kategori WHERE nama_kategori<>'Hukum' AND nama_kategori<>'Politik' AND nama_kategori<>'Ekonomi' AND nama_kategori<>'Renungan' AND nama_kategori<>'Hiburan' AND nama_kategori<>'Internasional' AND aktif='Y' ORDER BY nama_kategori ASC"); 
while($r=$k->fetch_array()) { ?>
                      <li style="font-size: 12px"><a href="?kategori=<?php echo $r['id_kategori']; ?>"><span class="ion-ios7-arrow-right nav-sub-icn"></span><?php echo $r['nama_kategori']; ?></a></li>
<?php } ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>