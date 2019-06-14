<?php include_once('config/paging.php'); ?>
  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec start -->
        <div class="col-md-11 col-sm-11">
          <div class="row">
<?php
$hal=1;
$perHalaman=6;
  if(isset($_GET['hal']) && !empty($_GET['hal']))
    $hal = (int)$_GET['hal'];

  $dt = ambilData('berita', 'kategori', 'id_kategori', 'nama_kategori', 'Hukum', 'id_berita', $hal, $perHalaman);
    foreach ($dt as $row) {
      $b = $row['id_berita'];
      $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
            <div class="sec-topic col-sm-16 wow fadeInDown animated " data-wow-delay="0.5s">
             <div class="row">
              <div class="col-sm-7"><img width="1000" height="606" alt="" src="<?php echo "img/foto_berita/".$row['gambar']; ?>" class="img-thumbnail"></div>
                <div class="col-sm-9"> <a href="?detail_berita=<?php echo $row['id_berita']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>">
                  <div class="sec-info">
                    <h3><?php echo $row['judul']; ?></h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                      <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dibaca']; 
                        $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentar WHERE id_berita=$b")->fetch_array();
                        $jumlah=$jk['jk']; ?> </div>
                      <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                      </div>
                    </div>
                  </div>
                  </a>
                  <p><?php echo str_replace('nsbp;'," ", strip_tags(substr($row['isi_berita'], 0, 250))); ?></p>
                </div>      
               </div>
              </div>
<?php } ?>


            <div class="col-sm-16">
              <hr>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
<?php
  echo tampilHalaman('berita', $perHalaman, 'hukum', 'kategori', 'id_kategori', 'nama_kategori', 'Hukum', 'id_berita');
?>
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
            <?php include_once('modul/home/adsnsos.php'); ?>
              <!-- activities start -->
              <?php include_once('modul/home/aktivitas.php'); ?>
              <!-- activities end --> 
              <!-- radio start -->
              <?php include_once('modul/home/radio.php'); ?>
              <!-- radio end --> 
              
              <!-- calendar start -->
              <?php include_once('modul/home/kalender.php'); ?>
              <!-- calendar end --> 
              <!-- flicker imgs start -->
              <?php //include_once('modul/home/flicker.php'); ?>
              <!-- flicker imgs end --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>