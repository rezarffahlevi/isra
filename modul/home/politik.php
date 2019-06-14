          <div class="col-sm-16">
            <div class="row">
              <div class="col-xs-16 col-sm-8  wow fadeInLeft animated science" data-wow-delay="0.5s" data-wow-offset="130">
                <div class="main-title-outer pull-left">
                  <div class="main-title">POLITIK</div>
                  <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span></span> </div>
                </div>

                <div class="row">
<?php 
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori WHERE nama_kategori='Politik' ORDER BY id_berita DESC LIMIT 0, 1");
  $row=$sql->fetch_array();
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                  <div class="topic col-sm-16"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"><img class=" img-thumbnail" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="600" height="227" alt=""/>
                    <h3><?php echo $row['judul']; ?></h3>
                    <div class="text-danger sub-info-bordered ">
                      <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                      <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?> </div>
                            <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?></div>
                      <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                    </div>
                    </a>
                    <p><?php echo str_replace('nsbp;'," ", strip_tags(substr($row['isi_berita'], 0, 450))); ?></p>
                  </div>
                </div>
                 <div class="col-sm-16">
                    <ul class="list-unstyled top-bordered ex-top-padding">
<?php 
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori WHERE nama_kategori='Politik' ORDER BY a.id_berita DESC LIMIT 1, 2");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                      <li> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4><?php echo $row['judul']; ?></h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                              <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                                $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                                $jumlah=$jk['jk']; ?> </div>
                              <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                              </div>
                              <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                            </div>
                          </div>
                        </div>
                        </a> </li>
<?php } ?>
                    </ul>
                  </div>
              </div>

              <div class="col-sm-8 col-xs-16 wow fadeInRight animated" data-wow-delay="0.5s" data-wow-offset="130">
                <div class="main-title-outer pull-left">
                  <div class="main-title">HUKUM</div>
                  <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span></span> </div>
                </div>
<?php 
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori WHERE nama_kategori='Hukum' ORDER BY rand() LIMIT 0, 1");
  $row=$sql->fetch_array();
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                <div class="row left-bordered">
                  <div class="topic col-sm-16"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"> <img  class="img-thumbnail" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="600" height="227" alt=""/>
                    <h3><?php echo $row['judul']; ?></h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                      <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                        $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                        $jumlah=$jk['jk']; ?> </div>
                      <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                      </div>
                      <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                    </div>
                    </a>
                    <p><?php echo str_replace('nsbp;'," ", strip_tags(substr($row['isi_berita'], 0, 450))); ?>
                  </div>

                  <div class="col-sm-16">
                    <ul class="list-unstyled top-bordered ex-top-padding">
<?php 
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori WHERE nama_kategori='Hukum' ORDER BY rand() LIMIT 0, 2");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                      <li> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4><?php echo $row['judul']; ?></h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                              <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                                $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                                $jumlah=$jk['jk']; ?> </div>
                              <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                              </div>
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
            </div>
            <hr>
          </div>