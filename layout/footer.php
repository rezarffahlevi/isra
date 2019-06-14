  <footer>
    
      <div class="container ">
        <div class="row match-height-container">
          <div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="row">
              <div class="col-sm-16">
                <div class="col-sm-16">
                  <div class="f-title"></div>
                  <br>
                  <img src="logo/isra.png" height="40%" width="80%">
                   <br><br>
                <h2><p style="color:white"><a href="http://isranewsindonesia.com/" style="color:white">http://isranewsindonesia.com/</a></p></div>
                </h2>

              <!--   <div class="f-title">subscribe to news letter</div>
                <form class="form-inline">
                  <input type="email" class="form-control" id="input-email" placeholder="Type your e-mail adress">
                  <button type="submit" class="btn"> <span class="ion-paper-airplane text-danger"></span> </button>
                </form> -->
              </div>
            </div>
          </div>
          <div class="col-sm-5 popular-tags  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">Kategori Sejenis</div>

            <ul class="tags list-unstyled pull-left">
<?php 
  $sql=$conn->query("SELECT * FROM kategori WHERE aktif='Y' ORDER BY rand() LIMIT 0, 10");
  while($row=$sql->fetch_array()){ 
     ?>
               <li><a href="?kategori=<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></a></li> 
  <?php } ?>
            </ul>
          </div>
          <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">

            <div class="f-title">Baca Juga</div>
            <ul class="list-unstyled">
<?php 
  $sql=$conn->query("SELECT * FROM berita WHERE gambar > 0 ORDER BY rand() LIMIT 0,2");
  while($row=$sql->fetch_array()){
    $b = $row['id_berita'];
    $cek = "UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
  ?>
              <li> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                <div class="row">
                  <div class="col-sm-4"><img class="img-thumbnail pull-left" src="<?php echo "img/foto_berita/".$row['gambar']; ?>"" width="70" height="70" alt=""/> </div>
                  <div class="col-sm-12">
                    <h4><?php echo $row['judul']; ?></h4>
                    <div class="f-sub-info">
                      <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span><?php echo $row['dibaca']; ?></div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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

    <div class="btm-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-16">
            <div class="row">
<!--               <div class="col-sm-10 col-xs-16 f-nav wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">
                <ul class="list-inline ">
                  <li> <a href="#"> Home </a> </li>
                  <li> <a href="#"> Business </a> </li>
                  <li> <a href="#"> Science </a> </li>
                  <li> <a href="#"> Lifestyle </a> </li>
                  <li> <a href="#"> Politics </a> </li>
                  <li> <a href="#"> Sport </a> </li>
                  <li> <a href="#">short codes</a> </li>
                  <li> <a href="#"> Contact </a> </li>
                </ul>
              </div> -->
              <div class="col-sm-6 col-xs-16 copyrights text-right wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">Copyright <a href="http://m2d.asia">M2D.Asia</a>© 2017.
            </div>
          </div>
          <div class="col-sm-16 f-social  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="10">
            <ul class="list-inline">
              <li> <a href="#"><span class="ion-social-twitter"></span></a> </li>
              <li> <a href="#"><span class="ion-social-facebook"></span></a> </li>
              <li> <a href="#"><span class="ion-social-instagram"></span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </footer>