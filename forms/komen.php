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
                        <button class="btn btn-danger" type="submit" name="komen"> Post Reply </button>
                      </div>
                    </form>
                    <?php include_once('core/komen.php'); ?>