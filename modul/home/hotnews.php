<?php
  $sql=$conn->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
  ?>
      <div class="col-sm-16 hot-news hidden-xs">
        <div class="row">
          <div class="col-sm-15"> <span class="ion-ios7-timer icon-news pull-left"></span>
            <ul id="js-news" class="js-hidden">
            <?php   
              while($row=$sql->fetch_array()){ 
                $b = $row['id_berita'];
                $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b "; ?>
              <li class="news-item"><a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"><?php echo $row['judul']; ?></a></li>
            <?php } ?>
            </ul>
          </div>
          <!-- <div class="col-sm-1 shuffle text-right"><a href="#"><span class="ion-shuffle"></span></a></div> -->
        </div>
      </div>