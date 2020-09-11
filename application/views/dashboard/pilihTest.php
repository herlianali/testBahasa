<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
<body>
    
  <div class="wrapper">  
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <br><br>
          <h2 class="display-3 text-center pb-2">Pilih Jenis Test</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h1 align="center">TOFLE</h1>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Test of English as Foreign Language</h4>
                  <div class="row">
                    <div class="col-md-8">
                      <p class="card-category">
                        <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 50% </span> multiple choice. <br>
                        <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 50% </span> listening. <br>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <br>
                      <a href="<?= base_url('login/tofle') ?>" class="btn btn-danger">Ikuti Test</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h1 align="center">IELTS</h1>
                </div>
                <div class="card-body">
                  <h4 class="card-title">International English Language Testing System</h4>
                  <div class="row">
                    <div class="col-md-8">
                      <p class="card-category">
                        <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 55% </span> multiple choice. <br>
                        <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 25% </span> listening. <br>
                        <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 25% </span> essay. <br>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <br>
                      <a href="<?= base_url('login/ielts') ?>" class="btn btn-warning">Ikuti Test</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>