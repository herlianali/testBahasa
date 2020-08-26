<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
<body>
  <div class="wrapper ">
    <?php $this->load->view("_partial/sidebar") ?>
    <div class="main-panel">
        <?php $this->load->view("_partial/navbar") ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h3 class="card-title">Sccore <?echo $this->session->userdata('jenisTest')?></h3>
                  <p class="card-category">All Test</p>
                </div>
                <div class="card-body">
                  <div class="container-fluid">                  
                    <p>
                      Telah selesai mengerjakan test yang diberikan dan mendapatkan skor sebesar
                    </p>
                    <div class="row">
                      <!-- <div class="col-md-1"></div> -->
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-9">                          
                            <h4>Multiple Choice</h4>
                            <h4>Listening</h4>
                            <h4>Essay</h4>
                          </div>
                          <div class="col-md-3">
                            <?php foreach ($raport as $rap) {
                            
                            ?>
                            <h4>: <?= $rap->nilaiSP ?></h4>
                            <h4>: <?= $rap->nilaiSL ?></h4>
                            <h4>: <?= $rap->nilaiSE ?></h4>
                            <?} ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="row">
                          <button class="btn btn-primary btn-round btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Ikut Pelatihan</button>
                        </div>
                        <div class="row">
                          <button class="btn btn-primary btn-round btn-sm" disabled="">Cetak Sertifikat</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Daftar Paket</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-header card-header-warning ">
                          <h4 class="card-title" align="center">Paket 1</h4>
                          <p class="category" align="center">Category subtitle</p>
                        </div>
                        <div class="card-body">
                          <h3 align="center">Rp 50.000</h3>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 1<br>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 2<br>
                          <a href="<?= base_url('pembayaran') ?>" class="btn btn-success btn-sm">Daftar</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-header card-header-danger ">
                          <h4 class="card-title" align="center">Paket 2</h4>
                          <p class="category" align="center">Category subtitle</p>
                        </div>
                        <div class="card-body">
                          <h3 align="center">Rp 100.000</h3>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 1<br>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 2<br>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 3<br>
                          <a href="<?= base_url('pembayaran') ?>" class="btn btn-success btn-sm">Daftar</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-header card-header-primary ">
                          <h4 class="card-title" align="center">Paket 3</h4>
                          <p class="category" align="center">Category subtitle</p>
                        </div>
                        <div class="card-body">
                          <h3 align="center">Rp 150.000</h3>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 1<br>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 2<br>
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 3<br>                          
                          <i class="material-icons" style="font-size: 18px">check_circle</i>kelebihan 4<br>                          
                          <a href="<?= base_url('pembayaran') ?>" class="btn btn-success btn-sm">Daftar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
            </div>

            <!-- <div class="col-md-4">
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
            </div> -->
          </div>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>