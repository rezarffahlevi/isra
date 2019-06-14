          <div class="col-sm-16 wow fadeInUp animated " data-wow-delay="0.5s" data-wow-offset="100">
            <div class="main-title-outer pull-left">
              <div class="main-title">Renungan</div>
              <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span></span> </div>
            </div>
            <div class="row">
              <div id="owl-lifestyle" class="owl-carousel owl-theme lifestyle pull-left">
<?php 
  $sql=$conn->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori WHERE tag='Khotbah' OR tag='renungan' OR nama_kategori='Renungan' OR nama_kategori='Khotbah' AND gambar > 0 ORDER BY rand() LIMIT 0, 7");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";

?>
                <div class="item topic"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"> <img class="img-thumbnail" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" width="300" height="132" alt=""/>
                  <h4><?php echo $row['judul']; ?></h4>
                  <div class="text-danger sub-info-bordered remove-borders">
                    <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                    <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?> </div>
                            <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?></div>
                    <!-- <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div> -->
                  </div>
                  </a> </div>
<?php } ?>
              </div>
            </div>
            <hr>
          </div>
          