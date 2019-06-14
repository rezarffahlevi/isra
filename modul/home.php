  <div class="container">
    <div class="row"> 
      <!-- hot news start -->
      <?php include('modul/home/hotnews.php'); ?>
      <!-- hot news end --> 
      <!-- banner outer start -->
      <div  class="col-sm-16 banner-outer wow fadeInLeft animated" data-wow-delay="1s" data-wow-offset="50">
        <div class="row">
          <div class="col-sm-16 col-md-10 col-lg-8"> 
            
            <!-- carousel start -->
            <?php include('modul/home/banner.php'); ?>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-8 hidden-sm hidden-xs">
            <?php include('modul/home/b.kanan.php'); ?>
          </div>
        </div>
      </div>
      <!-- banner outer end --> 
      
    </div>
  </div>
  <!-- top sec end --> 
  
  <!-- data start -->
  
  <div class="container ">
    <div class="row "> 
      <!-- left sec start -->
      <div class="col-md-11 col-sm-11">
        <div class="row"> 
          <!-- business start -->
          <?php include('modul/home/sekitar.php'); ?>
          <!-- business end --> 
          
          <!-- Science & Travel start -->
          <?php include('modul/home/politik.php'); ?>
          <!-- Scince & Travel end --> 
          <!-- lifestyle start-->
          <?php include('modul/home/daerah.php'); ?>
          <!-- lifestyle end --> 
          
          <!--Recent videos start-->
          <?php //include('modul/home/videos.php'); ?>
          <!--Recent videos end--> 

          <!--wide ad start-->
         <!--  <?php
           $sql=$conn->query("SELECT * FROM iklanatas WHERE id_iklanatas =37");
           $row=$sql->fetch_array();
           ?> -->
         <!--  <div class="col-sm-16 wow fadeInDown animated " data-wow-delay="0.5s" data-wow-offset="25"><img class="img-responsive" src="<?php echo "img/foto_iklanatas/".$row['gambar']; ?>" width="728" height="90" alt=""/></div> -->
          <!--wide ad end--> 
          
        </div>
      </div>
      <!-- left sec end --> 
      <!-- right sec start -->
          <!-- IKLAN DAN SOSMED -->
      <div class="col-sm-5 hidden-xs right-sec">
        <div class="bordered top-margin">
          <div class="row ">
         
          <?php include('modul/home/adsnsos.php'); ?>
          </div>
        </div>
            <!-- activities start -->
            <?php include('modul/home/aktivitas.php'); ?>
            <!-- activities end --> 
            <!-- radio start -->
            <?php include('modul/home/radio.php'); ?>
            <!-- radio end --> 
            
            <!-- calendar start -->
            <?php include('modul/home/kalender.php'); ?>
            <!-- calendar end --> 
            <!-- flicker imgs start -->
            <?php //include('modul/home/flicker.php'); ?>

            <!-- flicker imgs end --> 
          </div>
        </div>
      </div>
      <!-- right sec end --> 
    </div>
  </div>