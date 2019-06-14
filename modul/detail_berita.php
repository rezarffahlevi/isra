<?php 
$id=$_GET['detail_berita'];
$sql=$conn->query("SELECT * FROM berita WHERE id_berita = '$id'");
$row=$sql->fetch_array();
?>
 <div class="container">
    <div class="page-header">
      <h1><?php echo $row['judul']; ?></h1>
      <ol class="breadcrumb">
        <li><a href="?home">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li class="active">Topic Details</li>
      </ol>
    </div>
  </div>

   <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec Start -->
        <div class="col-md-11 col-sm-11">
          <div class="row"> 
            <!-- post details start -->
            <div class="col-sm-16">
              <div class="row">
                <div class="sec-topic col-sm-16  wow fadeInDown animated " data-wow-delay="0.5s">
                  <div class="row">
                    <div class="col-sm-16"> <img width="1000" height="606" alt="" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" class="img-thumbnail"> </div>
                    <div class="col-sm-16 sec-info">
                      <h3><?php echo $row['sub_judul']; ?></h3>
                      <div class="text-danger sub-info-bordered">
                        <div class="author"><span class="ion-person icon"></span><?php echo $row['username']; ?></div>
                        <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                        <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                          $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$id")->fetch_array();
                          $jumlah=$jk['jk']; ?> </div>
                        <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                        </div>
                        <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                      </div>
                      <p><span class="letter-badgep"></span><?php echo $row['isi_berita']; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-16 author-box">
                  <div class="row">
                    <div class=" col-xs-4 col-sm-2"><img class="img-thumbnail" src="logo/logo.png" width="128" height="128" alt=""/></div>
                    <div class="col-xs-12 col-sm-14">
                      <h4><a href="#"><?php echo $row['username']; ?></a></h4>
                      <p>Quote</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-16 related">
                  <div class="main-title-outer pull-left">
                    <div class="main-title">related topics</div>
                  </div>
                  <div class="row">
<?php
$sql=$conn->query("SELECT * FROM berita ORDER BY rand() LIMIT 3");
while($row=$sql->fetch_array()){
  $b = $row['id_berita'];
  $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
  ?>
                    <div class="item topic col-sm-5 col-xs-16"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>"  onclick="<?php mysqli_query($conn, $cek ) ?>"> <img class="img-thumbnail" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="1000" height="606" alt=""/>
                      <h4><?php echo $row['judul']; ?></h4>
                      <div class="text-danger sub-info-bordered remove-borders">
                        <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span><?php echo $row['dibaca']; ?></div>
                        <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                      </div>
                      </a>
                     </div>
<?php } ?>
                  </div>
                </div>
                <div class="col-sm-16 comments-area">
                  <?php include_once('fea/komen_dberita.php'); ?>
                </div>
                <div class="col-sm-16">
                  <div class="main-title-outer pull-left">
                    <div class="main-title">leave a comment</div>
                  </div>
                  <div class="col-xs-16 wow zoomIn animated">
                  <?php include_once('forms/komen.php'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
 
            <!-- post details end --> 
        <div class="col-sm-5 hidden-xs right-sec">
          <div class="bordered">
            <div class="row ">
              <?php include_once('home/adsnsos.php'); ?>
              <!-- activities start -->
              <?php include_once('home/aktivitas.php'); ?>
              <?php include_once('home/kalender.php'); ?>
              <?php include_once('home/aktivitas.php'); ?>
              <?php include_once('home/radio.php'); ?>
              <?php include_once('home/kalender.php'); ?>
              <?php //include_once('home/flicker.php'); ?>
                </div>
              </div>
            </div>
     </div>
    </div>
  </section>