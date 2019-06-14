            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="35">
              <div class="main-title-outer pull-left">
                <!-- <div class="main-title">Client</div> -->
              </div>
              <ul class="list-inline">
<?php 
  $sql=$conn->query("SELECT * FROM pasangiklan ORDER BY rand() LIMIT 10");
  while($row=$sql->fetch_array()){
  ?>
                <li><a href="<?php echo $row['url']; ?>" target="_blank"><img class="img-responsive" src="<?php echo "img/foto_pasangiklan/".$row['gambar']; ?>" width="100%" height="100%" alt=""/></a></li>
<?php } ?>
              </ul>
            </div>