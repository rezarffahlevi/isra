          <div class="col-sm-16 recent-vid wow fadeInDown animated " data-wow-delay="0.5s" data-wow-offset="50">
            <div class="main-title-outer pull-left">
              <div class="main-title">recent videos</div>
              <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span></span> </div>
            </div>
            <div class="row">
              <div class="col-sm-11 col-xs-16"> 
                <!-- Tab panes -->
                <div class="tab-content">
<?php 
  $sql=$conn->query("SELECT * FROM video ORDER BY rand() LIMIT 0,3");
  $row=$sql->fetch_array();
    $b = $row['id_video'];
    $cek = "UPDATE video SET dilihat = dilihat + 1 WHERE id_video = $b ";
  ?>
                  <div id="vid-first" class="tab-pane embed-responsive embed-responsive-16by9 active">
                    <iframe width="514" height="289" src="<?php echo $row['youtube']; ?>" frameborder="0" allowfullscreen onclick="<?php mysqli_query($conn, $cek ) ?>"></iframe>
                  </div>
                  <div id="vid-second" class="tab-pane embed-responsive embed-responsive-16by9">
                    <iframe width="514" height="289" src="<?php echo "kecil_".$row['youtube']; ?>" frameborder="0" allowfullscreen onclick="<?php mysqli_query($conn, $cek ) ?>"></iframe>
                  </div>
                  <div id="vid-third" class="tab-pane embed-responsive embed-responsive-16by9">
                    <iframe width="514" height="289" src="<?php echo $row['youtube']; ?>" frameborder="0" allowfullscreen onclick="<?php mysqli_query($conn, $cek ) ?>"></iframe>
                  </div>

                </div>
              </div>
              <div class="col-sm-5 col-xs-2"> <!-- required for floating --> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-right hidden-xs">
<?php 
  $sql=$conn->query("SELECT * FROM video ORDER BY rand() LIMIT 3");
  $row=$sql->fetch_array();
    $b = $row['id_video'];
    $cek = "UPDATE video SET dilihat = dilihat + 1 WHERE id_video = $b ";
  ?>
                  <li class="active"><a data-toggle="tab" href="#vid-first">
                    <div class="vid-thumb">
                      <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-1.jpg" width="234" height="87" alt=""/> </div>
                    </div>
                    </a></li>
                  <li class=""><a data-toggle="tab" href="#vid-second">
                    <div class="vid-thumb">
                      <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-2.jpg" width="234" height="87" alt=""/> </div>
                    </div>
                    </a></li>
                  <li class=""><a data-toggle="tab" href="#vid-third">
                    <div class="vid-thumb">
                      <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-3.jpg" width="234" height="87" alt=""/> </div>
                    </div>
                    </a></li>
                </ul>
              </div>
            </div>
            <hr>
          </div>