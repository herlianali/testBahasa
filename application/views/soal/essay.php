<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
<body>
  <div class="wrapper ">
    <?php $this->load->view("_partial/sidebar") ?>
    <div class="main-panel">
        <?php $this->load->view("_partial/navbar") ?>
          <!-- your content here -->

          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header card-header-danger text-center">
                      <h4 class="card-title">Test Tofle</h4>
                      <p class="card-category"><?php echo $titleEssay." ".$test; ?></p>
                    </div>
                    <div class="card-body">
                      <form action="<?= base_url().'Soal/tofleEssayProses'; ?>" method="post">
                        <p>
                          <?php
                            $no = 1;
                            foreach ($soalEssay as $value) {
                              
                          ?>
                          <div class="form-group">
                            <?php 
                              echo "<br>".$no++ .".) ";
                              echo $value->soal 
                            ?>
                            <input type="text" class="form-control" name="jawaban<?= $value->id?>">
                          </div><br>
                        <?php } ?>
                        </p>
                        <button type="submit" class="btn btn-danger btn-sm">
                          Next Test <i class="material-icons">keyboard_arrow_right</i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="javascript:;">
                        <img class="img" src="<?php echo base_url('asset/images/user.png') ?>" />
                      </a>
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-gray">Arjuna Operation <br>Student</h6>
                      <h4 class="card-title">Herlian Aliyasa Almaj Duddin</h4>
                      <p class="card-description">
                        Jl. Raya Sumorame, Kerawean, Sumorame, rt.1 rw.4 Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61271 kos aziza kamar nomer 4
                      </p>
                      <a href="javascript:;" class="btn btn-danger btn-round">Get Sccore</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>