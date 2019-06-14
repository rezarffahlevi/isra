<?php 
  $sql=$conn->query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 0, 1");
  $row=$sql->fetch_array();  
  $b = $row['id_berita'];
  $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
            <div class="row">
              <div class="col-lg-6 hidden-md"><a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                <div class="box">
                  <div class=" carousel-caption"><?php echo $row['judul']; ?></div>
                  <img class="match-height" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="236" height="480"  alt="" />
                  <div class="overlay"></div>
                  <div class="overlay-info">
                    <div class="cat">
                      <p class="cat-data"><span class=""></span><?php echo $row['tag']; ?></p>
                    </div>
                    <div class="info">
                      <p><span class="ion-android-data"></span><?php echo $row['tanggal']; ?><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?><span class="ion-chatbubbles"></span> <?php echo $jumlah ?></p>
                    </div>
                  </div>
                </div>
                </a> </div>
<?php 
  $sql1=$conn->query("SELECT * FROM berita WHERE id_berita != ".$row['id_berita']." ORDER BY dibaca DESC LIMIT 1, 1");
  $row1=$sql1->fetch_array();  
  $b = $row1['id_berita'];
  $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>                
              <div class="col-md-16 col-lg-10">
                <div class="row">
                  <div class="col-sm-16 right-img-top "> <a href="?detail_berita=<?php echo $row1['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                    <div class="box">
                      <div class="carousel-caption"><?php echo $row1['judul']; ?></div>
                      <img class="img-responsive" src="<?php echo "img/foto_berita/".$row1['gambar']; ?>" width="440" height="292" alt=""/>
                      <div class="overlay"></div>
                      <div class="overlay-info">
                        <div class="cat">
                          <p class="cat-data"><span class=""></span><?php echo $row1['tag']; ?></p>
                        </div>
                        <div class="info">
                          <p><span class="ion-android-data"></span><?php echo $row1['tanggal']; ?><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?><span class="ion-chatbubbles"></span> <?php echo $jumlah ?></p>
                        </div>
                      </div>
                    </div>
                    </a> </div>
<?php 
  $sql2=$conn->query("SELECT * FROM berita WHERE id_berita != ".$row['id_berita']." || ".$row1['id_berita']." ORDER BY dibaca DESC LIMIT 3, 1");
  $row2=$sql2->fetch_array();  
  $b = $row2['id_berita'];
  $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                  <div class="col-sm-16 right-img-btm "> <a href="?detail_berita=<?php echo $row2['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                    <div class="box">
                      <div class="carousel-caption"><?php echo $row2['judul']; ?></div>
                      <img class="img-responsive" src="<?php echo "img/foto_berita/".$row2['gambar']; ?>" alt=""/>
                      <div class="overlay"></div>
                      <div class="overlay-info">
                        <div class="cat">
                          <p class="cat-data"><span class=""></span><?php echo $row2['tag']; ?></p>
                        </div>
                        <div class="info">
                          <p><span class="ion-android-data"></span><?php echo $row1['tanggal']; ?><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?><span class="ion-chatbubbles"></span> <?php echo $jumlah ?></p>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
            </div>