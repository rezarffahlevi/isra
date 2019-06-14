<?php 
  $sql=$conn->query("SELECT * FROM pasangiklan ORDER BY id_pasangiklan DESC");
  while($row=$sql->fetch_array()){
  ?>


            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <a href="<?php echo $row['url']; ?>" class="sponsored"><img class="img-responsive" src="<?php echo "img/foto_pasangiklan/".$row['gambar'] ?>" width="336" height="280" alt=""/><?php echo $row['judul']; ?></a> </div>
            <div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150">
 <?php } ?>
              <div class="table-responsive">
 				
              </div>
            </div>