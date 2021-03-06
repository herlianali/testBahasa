<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
<body>
  <div class="wrapper ">
    <?php $this->load->view("_partial/sidebarAdmin") ?>
    <div class="main-panel">
        <?php $this->load->view("_partial/navbar") ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h3 class="card-title">Sccore Tofle</h3>
                  <p class="card-category">Semua Test</p>
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
                            <h4>Listening comprehension</h4>
                            <h4>Gramer</h4>
                            <h4>Reading comprehension</h4>
                          </div>
                          <div class="col-md-3">
                            <h4>: 500</h4>
                            <h4>: 500</h4>
                            <h4>: 500</h4>
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
          </div>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>