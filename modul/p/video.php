  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec start -->
        <div class="col-md-11 col-sm-11">
          <div class="row">
<?php
function tH($tabel, $limit, $target, $urut)
{
  include ('config/koneksi.php');
  $url=$_GET['p']="$target";
  $sql="SELECT COUNT(*) AS total FROM $tabel ORDER BY $urut DESC";
  $aksiQuery = $conn->query($sql);
  $hasil = mysqli_fetch_array($aksiQuery);
  $totalData = $hasil['total'];
  $totalHal = ceil($totalData / $limit);
  $hal = 1;
    while ($hal <= $totalHal) 
    {
      echo '<li class=""><a href="?p='.$url.'&hal='.$hal.'">'.$hal.'</a></li>';
        if ($hal <= $totalHal) 
          $hal++;
                      
    }
}
function aD($tabel, $urut, $hal=1, $limit)
{ include ('config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel ORDER BY $urut DESC LIMIT $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query))
  array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
}
$hal=1;
$perHalaman=6;
  if(isset($_GET['hal']) && !empty($_GET['hal']))
    $hal = (int)$_GET['hal'];

  $dt = aD('video', 'id_video', $hal, $perHalaman);
    foreach ($dt as $row) {
      $b = $row['id_video'];
      $cek="UPDATE video SET dilihat = dilihat + 1 WHERE id_video = $b ";
?>
            <div class="sec-topic col-sm-16 col-md-8 wow fadeInDown animated" data-wow-delay="0.5s"> <a href="<?php echo $row['youtube']; ?>" onclick="<?php mysqli_query($conn, $cek ) ?>"><img width="1000" height="606" alt="" src="<?php echo "img/img_video/".$row['gbr_video']; ?>" class="img-thumbnail">
              <div class="sec-info">
                <h3><?php echo $row['jdl_video']; ?></h3>
                <div class="text-danger sub-info-bordered">
                  <div class="time"><span class="ion-android-data icon"></span><?php echo $row['tanggal']; ?></div>
                  <div class="comments"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row['dilihat']; 
                    $jk=$conn->query("SELECT COUNT(*) AS jk FROM komentarvid WHERE id_video=$b")->fetch_array();
                    $jumlah=$jk['jk']; ?>
                  </div>
                  <div class="comments"> <span class="ion-chatbubbles"></span> <?php echo $jumlah ?>
                  </div>
                 <!--  <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div -->
                </div>
              </div>
              </a>
              <p><?php echo str_replace('nsbp;'," ", strip_tags(substr($row['keterangan'], 0, 350))); ?></p>
            </div>
<?php } ?>



            <div class="col-sm-16">
              <hr>
              <ul class="pagination">
                 <li><a href='#back'>&laquo;</a></li>
<?php
  echo tH('video', $perHalaman, 'video', 'id_video');
?>
                 <li><a href='#next'>&raquo;</a></li>
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