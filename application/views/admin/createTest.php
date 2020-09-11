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
          <h2>Create Tofle Test</h2>
          <div class="row">
            <div class="col-md-4">
              <a href="#MCTofle" data-toggle="modal">
                <div class="card bg-primary">
                  <div class="card-body">
                    <h3 class="text-center">Multiple Choice</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#LTofle" data-toggle="modal">            
                <div class="card bg-warning">
                  <div class="card-body">
                    <h3 class="text-center">Listening</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#LTofleAudio" data-toggle="modal">
                <div class="card bg-success">
                  <div class="card-body">
                    <h3 class="text-center">Listening Audio</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <br>
          <h2>Create Ielts Test</h2>
          <div class="row">
            <div class="col-md-4">
              <a href="#MCIelts" data-toggle="modal">            
                <div class="card bg-primary">
                  <div class="card-body">
                    <h3 class="text-center">Multiple Choice</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#EIelts" data-toggle="modal">
                <div class="card bg-info">
                  <div class="card-body">
                    <h3 class="text-center">Essay</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#LIelts" data-toggle="modal">
                <div class="card bg-warning">
                  <div class="card-body">
                    <h3 class="text-center">Listening</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#LIeltsAudio" data-toggle="modal">
                <div class="card bg-success">
                  <div class="card-body">
                    <h3 class="text-center">Listening Audio</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <!-- modal view -->
          <!-- modal tofle multiple choice-->
          <?php $this->load->view("admin/modalSoal/modalMultiTof") ?>
          <!-- modal tofle listening-->
          <?php $this->load->view("admin/modalSoal/modalListenTof") ?>
          <!-- modal tofle voice upload -->
          <?php $this->load->view("admin/modalSoal/modalVoiceTof") ?>

          <!-- modal ielts multiple choice -->
          <?php $this->load->view("admin/modalSoal/modalMultiIel") ?>
          <!-- modal ielts listen choice -->
          <?php $this->load->view("admin/modalSoal/modalListenIel") ?>
          <!-- modal ielts voide listen -->
          <?php $this->load->view("admin/modalSoal/modalVoiceIel") ?>
          <!-- modal ielts essay -->
          <?php $this->load->view("admin/modalSoal/modalEsaiIel") ?>

        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>