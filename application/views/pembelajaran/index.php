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
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-danger">
                  <img src="<?= base_url('asset/images/user.png') ?>" class="card-img">
                  <h4 class="card-title">Mentor 1</h4>
                  <p class="card-category">Nama Mentor</p>
                </div>
                <div class="card-body">
                  Keterangan Mentor dan video pembahasan
                  <br>
                  <a href="<?php echo base_url('/materi') ?>" class="btn btn-danger btn-sm">Watch lesson</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-danger">
                  <img src="<?= base_url('asset/images/user.png') ?>" class="card-img">
                  <h4 class="card-title">Mentor 2</h4>
                  <p class="card-category">Nama Mentor</p>
                </div>
                <div class="card-body">
                  Keterangan Mentor dan video pembahasan
                  <br>
                  <a href="<?php echo base_url('/materi') ?>" class="btn btn-danger btn-sm">Watch lesson</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-danger">
                  <img src="<?= base_url('asset/images/user.png') ?>" class="card-img">
                  <h4 class="card-title">Mentor 3</h4>
                  <p class="card-category">Nama Mentor</p>
                </div>
                <div class="card-body">
                  Keterangan Mentor dan video pembahasan
                  <br>
                  <a href="<?php echo base_url('/materi') ?>" class="btn btn-danger btn-sm">Watch lesson</a>
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