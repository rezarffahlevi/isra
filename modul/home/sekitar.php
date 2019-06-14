<?php
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori = b.id_kategori WHERE tag='Sekitar Kita' OR nama_kategori='Nasional' OR tag='Daerah' ORDER BY rand() DESC LIMIT 1");
  $row=$sql->fetch_array(); 
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
  ?>
          <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50">
            <div class="main-title-outer pull-left">
              <div class="main-title">SEKITAR KITA</div>
              <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span></span> </div>
            </div>
            <div class="row">
              <div class="col-md-11 col-sm-16">
                <div class="row">
                  <div class="col-md-8 col-sm-9 col-xs-16">
                    <div class="topic"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"><img class="img-thumbnail" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="600" height="398" alt=""/>
                      <h3><?php echo $row['judul']; ?></h3>
                      <div class="text-danger sub-info-bordered">
                        <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                        <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?> </div>
                            <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?></div>
                        <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                      </div>
                      </a>
                      <p><?php echo str_replace('nsbp;'," ", strip_tags(substr($row['isi_berita'], 0, 150))); ?></p>
                    </div>
                  </div>

                  <div class="col-md-8 col-sm-7 col-xs-16">
                    <ul class="list-unstyled">
<?php
 $sql1=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='Sekitar Kita' OR nama_kategori='Nasional' OR tag='Daerah' AND id_berita<> ".$row['id_berita']." ORDER BY id_berita DESC LIMIT 3");
  while ($row1=$sql1->fetch_array()) 
    { 
      $b = $row['id_berita'];
      $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
      ?>
                      <li> <a href="?detail_berita=<?php echo $row1['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="row">
                          <div class="col-sm-5 hidden-sm hidden-md"><img class="img-thumbnail pull-left" src="<?php echo "img/foto_berita/".$row1['gambar']; ?>" width="76" height="76" alt=""/> </div>
                          <div class="col-sm-16 col-md-16 col-lg-11">
                            <h4><?php echo $row1['judul']; ?></h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span><?php echo $row1['tanggal']; ?></div>
                              <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?> </div>
                            <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?></div>
                              <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                            </div>
                          </div>
                        </div>
                        </a> </li>
<?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-16 hidden-sm hidden-xs  left-bordered">
                <div id="vid-thumbs" class="owl-carousel">
                  <div class="item">
                    <div class="vid-thumb-outer">
<?php
  $sql2=$conn->query("SELECT * FROM video WHERE gbr_video > 0 ORDER BY rand() LIMIT 0, 2");
  while($row2=$sql2->fetch_array())
    { 
      $b = $row['id_berita'];
      $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
      ?>
                      <div class="vid-thumb"><a class="popup-youtube" href="<?php echo $row2['youtube']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="<?php echo "img/img_video/kecil_".$row2['gbr_video']; ?>" width="250" height="143" alt=""/> </div>
                        <h4><?php $row2['jdl_video']; ?></h4>
                        </a> </div>
<?php } ?>
                    </div>
                  </div>
                  <div class="item">
                    <div class="vid-thumb-outer">
<?php
  $sql2=$conn->query("SELECT * FROM video WHERE gbr_video > 0 ORDER BY rand() LIMIT 2, 2");
  while($row2=$sql2->fetch_array())
    { 
      $b = $row['id_berita'];
      $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
      ?>
                      <div class="vid-thumb"><a class="popup-youtube" href="<?php echo $row2['youtube']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="<?php echo "img/img_video/kecil_".$row2['gbr_video']; ?>" width="250" height="143" alt=""/> </div>
                        <h4><?php $row2['jdl_video']; ?></h4>
                        </a> </div>
<?php } ?>
                    </div>
                  </div>
                  <div class="item">
                    <div class="vid-thumb-outer">
<?php
  $sql2=$conn->query("SELECT * FROM video WHERE gbr_video > 0 ORDER BY rand() LIMIT 2, 2");
  while($row2=$sql2->fetch_array())
    { 
      $b = $row['id_berita'];
      $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
      ?>
                      <div class="vid-thumb"><a class="popup-youtube" href="<?php echo $row2['youtube']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="<?php echo "img/img_video/kecil_".$row2['gbr_video']; ?>" width="250" height="143" alt=""/> </div>
                        <h4><?php $row2['jdl_video']; ?></h4>
                        </a> </div>
<?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>