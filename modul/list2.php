  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec start -->
        <div class="col-md-11 col-sm-11">
          <div class="row">
<?php
  $sql=$conn->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 10");
  while($row=$sql->fetch_array())
    { ?>
            <div class="sec-topic col-sm-16 wow fadeInDown animated " data-wow-delay="0.5s">
              <div class="row">
                <div class="col-sm-7"><img width="1000" height="606" alt="" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" class="img-thumbnail"></div>
                <div class="col-sm-9"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>">
                  <div class="sec-info">
                    <h3><?php echo $row['judul']; ?></h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span><?php echo $row['dibaca']; ?></div>
                      <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                    </div>
                  </div>
                  </a>
                  <p><?php echo str_replace('nbsp;'," ", strip_tags(substr($row['isi_berita'], 0, 250))); ?></p>
                </div>
              </div>
            </div>
<?php } ?>
            <div class="col-sm-16">
              <hr>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- left sec end --> 
        
        <!-- right sec start -->
        <div class="col-sm-5 hidden-xs right-sec">
          <div class="bordered">
            <div class="row ">
            <?php include_once('home/adsnsos.php'); ?>
              <!-- activities start -->
             <?php include_once('home/aktivitas.php'); ?>
              <!-- activities end --> 
              <!-- radio start -->
              <?php include_once('home/radio.php'); ?>
              <!-- radio end --> 
              
              <!-- calendar start -->
              <?php include_once('home/kalender.php'); ?>
              <!-- calendar end --> 
              <!-- flicker imgs start -->
              <?php include_once('home/flicker.php'); ?>
              <!-- flicker imgs end --> 
              <!-- flicker imgs end --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>