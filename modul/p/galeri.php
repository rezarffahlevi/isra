<?php
function tampilHalaman($tabel, $limit, $target, $join, $pk, $urut)
{
	include ('config/koneksi.php');
	$url=$_GET['p']="$target";
	$sql="SELECT COUNT(*) AS total FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk  ORDER BY $urut DESC";
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
function ambilData($tabel, $join, $pk, $urut, $hal=1, $limit)
{ include ('config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk ORDER BY $urut DESC LIMIT $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query))
	array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
} //akhir
?>
<section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec start -->
        <div class="col-md-11 col-sm-11">
          <div class="row"> 	
			<div class="gallery">
              
<?php
$hal=1;
$perHalaman=8;
  if(isset($_GET['hal']) && !empty($_GET['hal']))
    $hal = (int)$_GET['hal'];

  $dt = ambilData('gallery', 'album', 'id_album', 'id_gallery', $hal, $perHalaman);
    foreach ($dt as $row) {
      $b = $row['id_gallery'];
      $cek="UPDATE berita SET dibaca = dibaca + 1 WHERE id_berita = $b ";
?>
              <div class="col-sm-8 wow fadeInDown animated "> <a class="gallery-item" href="<?php echo "img/img_galeri/".$row['gbr_gallery']; ?>" class="popup-img">
                <div class="thumb-box"><span class="ion-arrow-expand"></span>
                  <div class="carousel-caption"><?php echo htmlentities(str_replace('nsbp;'," ", strip_tags($row['jdl_gallery']))); ?></div>
                  <img width="1600" height="972" alt="" src="<?php echo "img/img_galeri/".$row['gbr_gallery']; ?>" class="img-thumbnail"></div>
                </a> </div>
   <?php } ?>
              </div>
            <div class="col-sm-16">
              <hr>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
<?php
  echo tampilHalaman('gallery', $perHalaman, 'galeri', 'album', 'id_album', 'id_gallery');
?>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
             </div>
            </div>
	



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
              <?php //include_once('modul/home/kalender.php'); ?>
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