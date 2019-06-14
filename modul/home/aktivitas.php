            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified " role="tablist">
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
                <li><a href="#comments" role="tab" data-toggle="tab">comments</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
<?php 
  $sql=$conn->query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 5 ");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                    <li> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                      <div class="row">
                        <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4><?php echo $row['judul']; ?></h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
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

                <div class="tab-pane" id="recent">
                  <ul class="list-unstyled">
<?php 
  $sql=$conn->query("SELECT * FROM berita ORDER BY rand() LIMIT 5");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                    <li> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4><?php echo $row['judul']; ?></h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
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
                <div class="tab-pane" id="comments">
<?php 
  $sql=$conn->query("SELECT * FROM komentar ORDER BY id_komentar LIMIT 5");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
                  <ul class="list-unstyled">
                    <li> <a href="?detail_komentar=<?php echo $row['id_komentar']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4><?php echo $row['nama_komentar']; ?></h4>
                          <p><?php echo $row['isi_komentar']; ?></p>
                        </div>
                      </div>
                      </a> </li>
<?php } ?>
                  </ul>
                </div>
              </div>
            </div>