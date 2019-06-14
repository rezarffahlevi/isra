<?php 
$sql=$conn->query("SELECT * FROM komentar WHERE id_berita = $id");
?>
                  <div class="main-title-outer pull-left">
                    <div class="main-title">comments</div>
                  </div>
                  <div class="opinion pull-left">
<?php while($row=$sql->fetch_array()) { ?>
                    <div class="media"> <a href="#" class="pull-left"> <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="logo/logo.png"> </a>

                      <div class="media-body">
                        <div>
                          <h4 class="media-heading"><?php echo $row['nama_komentar']; ?></h4>
                          <div class="time text-danger"><span class="ion-android-data icon"></span><?php echo $row['tgl']."&nbsp;&nbsp;&nbsp;".$row['jam_komentar']; ?></div>
                        </div>
                        <?php echo $row['isi_komentar']; ?>
                        <!-- <div class="col-sm-16"><a class="open-popup-link" href="#log-in"><span class="reply pull-right ion-ios7-compose" style="font-size: 11px">Balas</span></a></div> -->
<?php 
$sql1=$conn->query("SELECT * FROM komentar WHERE url = $row[id_komentar] LIMIT 1");
while($row1=$sql1->fetch_array()) { ?>
                      <div class="media nested-rep pull-left"> <a href="#" class="pull-left"> <img alt="64x64" class="media-object" style="width: 64px; height: 64px;" src="images/comments/com-1.jpg"> </a>
                          <div class="media-body ">
                            <div>
                              <h4 class="media-heading"><?php echo $row1['nama_komentar']; ?></h4>
                              <div class="time text-danger"><span class="ion-android-data icon"></span><?php echo $row1['tgl']; ?></div>
                            </div>
                            <?php echo $row1['isi_komentar']; ?>
                          </div>
                        </div>
 <?php } ?>   
                      </div>
                    </div>
<?php } ?>
                  </div>

  <div id="log-in" class="white-popup mfp-with-anim mfp-hide">
                    <form action="" method="post" name="" class="comment-form">
                      <div class="row">
                        <div class="form-group col-sm-8 name-field">
                          <input name="nama_komentar" type="text" placeholder="Nama*" required="" class="form-control">
                        </div>
<!--                         <div class="form-group col-sm-8 email-field">
                          <input type="email" placeholder="Email*" required="" class="form-control" >
                        </div> -->
                        <div class="form-group col-sm-16">
                          <textarea placeholder="Komentar" rows="8" class="form-control" required id="message" name="isi_komentar"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-danger" type="submit" name="balas"> Post Reply </button>
                      </div>
                    </form>
                    <?php include_once('core/komen.php'); ?>
  </div>