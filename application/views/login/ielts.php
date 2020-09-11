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
          <!-- warning login salah password tidak bisa tampil -->
          <div class="alert alert-warning" <?= $display?> >
            <div class="container">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
              <?= $notif_message?>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-6">
                <div class="card-body">
                  <div class="text-center">                  
                    <img src="<?= base_url('asset/images/index.jpeg') ?>" class="rounded" style="max-width: 80%;">
                    <img src="<?= base_url('asset/images/sideform.svg') ?>" class="rounded" style="max-width: 80%; padding-top: 50px; padding-bottom: 80px;">
                  </div>
                </div>
              </div>
              <div class="col-md-6">            
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#register" data-toggle="tab">
                            <i class="material-icons">person_add</i> User Register
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#login" data-toggle="tab">
                            <i class="material-icons">account_box</i> User Login
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="register">
                      <form action="<?php echo base_url().'user/store'; ?>" method="post">
                        <div class="row">
                          <div class="col-md-12">
                            <br>
                            <div class="form-group">
                              <label class="bmd-label-floating">First Name</label>
                              <input type="text" class="form-control" name="first_name">
                              <input type="hidden" class="form-control" name="jenis" value="ielts">
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
                              <label class="bmd-label-floating">Nomer</label>
                              <input type="text" class="form-control" name="nomer">
                            </div><br>
                            <div class="form-group">
                              <label class="bmd-label-floating">Username</label>
                              <input type="text" class="form-control" name="username">
                            </div><br>
                            <div class="form-group">
                              <label class="bmd-label-floating">Password</label>
                              <input type="password" class="form-control" name="password">
                            </div><br>
                            <button type="submit" class="btn btn-danger pull-right">Regist</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="login">
                      <form action="<?php echo base_url('login/auth'); ?>" method="POST">
                        <div class="row">
                          <div class="col-md-12">
                            <br><br><br>
                            <div class="form-group">
                              <label class="bmd-label-floating">Username</label>
                              <input type="text" class="form-control" name="username">
                              <input type="hidden" class="form-control" name="jenis" value="ielts">
                            </div><br>
                            <div class="form-group">
                              <label class="bmd-label-floating">Password</label>
                              <input type="password" class="form-control" name="password">
                            </div><br>
                            <button type="submit" class="btn btn-danger pull-right">Login</button>
                          </div>
                        </div>
                      </form>
                    </div>
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