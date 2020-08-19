<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
<body>
  <div class="wrapper">
    <?php $this->load->view("_partial/sidebarAdmin") ?>
    <div class="main-panel">
        <?php $this->load->view("_partial/navbar") ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Mentor List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a class="btn btn-info btn-round btn-just-icon" type="button" data-toggle="modal" data-placement="right" title="Tambah Mentor" data-container="body" href="#Tambah"><i class="material-icons">add</i></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Telp Number</th>
                          <th>Photo</th>
                          <th>Act</th>
                        </tr>
                      </thead>
                      <?php foreach ($mentor as $key) {
                        
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $key->nama; ?></td>
                          <td><?php echo $key->alamat; ?></td>
                          <td><?php echo $key->nomer_tlp; ?></td>
                          <td><img style="height: 50px" src="<?php echo base_url('asset/images/profile/').$key->photo ?>"></td>
                          <td class="td-actions">
                            <a href="#Edit<?= $key->id;?>" class="btn btn-success btn-just-icon btn-sm text-white" data-toggle="modal"><i class="material-icons">edit</i></a>
                            <a href="<?= base_url('admin/hapusMentor/').$key->id?>" class="btn btn-danger btn-just-icon btn-sm text-white"><i class="material-icons">delete_forever</i></a>
                          </td>
                        </tr>
                      </tbody>
                      <? } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="modal fade" id="Tambah" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Input New Mentor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('admin/inputMentor') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>                    
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>                    
                    <div class="form-group">
                      <label for="nomorTelp">Nomor Telp</label>
                      <input type="text" class="form-control" id="nomorTelp" name="nomor">
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <?php 
          foreach ($mentor as $sd) {
          ?>
          <div class="modal fade" id="Edit<?= $sd->id?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Mentor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('admin/editMentor/').$sd->id;?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $sd->nama?>">
                    </div>                    
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $sd->alamat?>">
                    </div>                    
                    <div class="form-group">
                      <label for="nomorTelp">Nomor Telp</label>
                      <input type="text" class="form-control" id="nomorTelp" name="nomor" value="<?= $sd->nomer_tlp?>">
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="hidden" class="form-control" name="image_old" value="<?= $sd->photo?>">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>