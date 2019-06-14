            <div id="sync1" class="owl-carousel">
<?php

$sql=$conn->query("SELECT * FROM berita ORDER BY id_berita  DESC LIMIT 0, 8");
  while($row=$sql->fetch_array()){
   $b = $row['id_berita'];
   $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
              <div class="box item"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                <div class="carousel-caption"><?php echo $row['judul']; ?></div>
                  <img class='img-responsive' src="<?php echo "img/foto_berita/".$row['gambar'] ?>" width='1600' height='' alt=''/>

                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class=""></span><?php echo $row['tag']; ?></p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span><?php echo $row['tanggal']; ?><span class="glyphicon glyphicon-eye-open"></span><?php echo $row['dibaca']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?><span class="ion-chatbubbles"></span><?php echo $jumlah ?></p>
                  </div>
                </div>
                </a></div>
<?php } ?>
           </div>
            <div class="row">
              <div id="sync2" class="owl-carousel">
<?php 
$sql1=$conn->query("SELECT * FROM berita WHERE gambar > 0 ORDER BY id_berita  DESC LIMIT 0, 8");
while($row1=$sql1->fetch_array()){
?>
                <div class="item"><img class=" img-responsive" src="<?php echo "img/foto_berita/".$row1['gambar']; ?>"  width="1600" height="972" alt=""/></div>
<?php } ?>
              </div>
            </div>

