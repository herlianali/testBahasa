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
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Data Participant</h4>
                  <p class="card-category">Complate it your data</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="bmd-label-floating">First Name</label>
                      <input type="text" class="form-control" name="first_name">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control" name="last_name">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="text" class="form-control" name="email">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" class="form-control" name="address">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Date of Birth</label>
                      <input type="text" class="form-control" name="DOB">
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Education</label>
                      <input type="text" class="form-control" name="education">
                    </div><br>
                    <!-- <div class="form-control"> -->
                      <label>Photo</label><br>
                      <input type="file" name="" class="form-control">
                    <!-- </div> -->
                    <br><br>
                    <a href="" class="btn btn-danger btn-round">
                      Send Data <i class="material-icons">send</i>
                    </a>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>