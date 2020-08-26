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
                  <div class="jumbotron text-center" style="position: relative; padding-bottom: 40%; padding-top: 10px; height: 0; overflow: hidden;">
                    <img src="<?= base_url('asset/images/profile/') ?>zenitsu-agatsuma-kimetsu-no-yaiba-4K-44.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0" allowfullscreen></iframe>
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
                    <a href="<?= base_url(''); ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default col-md-12 text-left">Materi 1</a>
                    <a href="<?= base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 2</a>
                    <a href="<?= base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 3</a>
                    <a href="<?= base_url(''); ?>" class="btn btn-default col-md-12 text-left">Materi 4</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div>  
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons">clear</i>
                </button>
              </div>
              <div class="modal-body">
                <div class="video-container text-center" style="position: relative; padding-bottom: 50%; padding-top: 25px; height: 0; overflow: hidden;">
                  <iframe src="http://www.youtube.com/embed/tgbNymZ7vqY" style="position: absolute; top: 0; left: 0; height: 100%;" width="500" height="300" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-link">Nice Button</button>
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
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