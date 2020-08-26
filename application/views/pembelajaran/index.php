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
            <?php foreach ($mentor as $ment) {
              
            ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-danger">
                  <img src="<?= base_url('asset/images/profile/').$ment->photo ?>" class="card-img">
                  <h4 class="card-title">Mentor <?= $ment->id ?></h4>
                  <p class="card-category"><?= $ment->nama ?></p>
                </div>
                <div class="card-body">
                  <br>
                  <a href="<?= base_url('/materi/name/').$ment->nama ?>" class="btn btn-danger btn-sm">Watch lesson</a>
                </div>
              </div>
            </div>
            <? } ?>
          </div>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>