            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="100">
              <div class="main-title-outer pull-left">
                <!-- <div class="main-title">Iklan</div> -->
              </div>
<?php
$sql=$conn->query("SELECT * FROM iklantengah ORDER BY id_iklantengah DESC LIMIT 0, 2");
while($row=$sql->fetch_array())
{
	?>
	             <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <a href="<?php echo $row['url']; ?>" class="sponsored"><img class="img-responsive" src="<?php echo "img/foto_iklantengah/".$row['gambar'] ?>" width="336" height="280" alt=""/><?php echo $row['judul']; ?></a> </div>
            <div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150"></div>
<?php } ?>
</div>