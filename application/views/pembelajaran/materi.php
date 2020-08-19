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
            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                  <div class="video-container text-center" style="position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden;">
                    <iframe src="http://www.youtube.com/embed/tgbNymZ7vqY" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" width="500" height="300" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Learning</h4>
                  <p class="card-category">Menu Pembelajaran</p>
                </div>
                <div class="card-body">
                  <div class="container">
                    <a href="<?php echo base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 1</a>
                    <a href="<?php echo base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 2</a>
                    <a href="<?php echo base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 3</a>
                    <a href="<?php echo base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 4</a>
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