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
                  Learn List
                </div>
                <div class="card-body">
                  <a class="btn btn-info btn-round btn-just-icon" type="button" data-toggle="modal" data-placement="right" title="Input Ner Learn" data-container="body" href="#Tambah"><i class="material-icons">add</i></a>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Mentor Name</th>
                        <th>Information</th>
                        <th>Act</th>
                      </tr>
                    </thead>
                    <?php foreach ($learn as $key) {
                      
                    ?>
                    <tbody>
                      <tr>
                        <td><?= $key->judul ?></td>
                        <td><?= $key->nama_mentor ?></td>
                        <td><?= $key->keterangan ?></td>
                        <td>
                          <a href="<?= $key->link ?>" class="btn btn-just-icon btn-youtube btn-link btn-danger"><i class="fab fa-youtube fa-lg" title="Tonton di youtube"> </i></a>
                          <a href="#Edit<?= $key->id;?>" class="btn btn-success btn-just-icon btn-sm text-white" data-toggle="modal"><i class="material-icons">edit</i></a>
                          <a href="<?= base_url('admin/hapusLearn/').$key->id ?>" class="btn btn-danger btn-just-icon btn-sm text-white"><i class="material-icons">delete_forever</i></a>
                        </td>
                      </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="modal fade" id="Tambah" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Input New Learn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="material-icons">clear</i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/inputLearn') ?>" method="post">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                      </div>                    
                      <div class="form-group">
                        <label for="mentor">Mentor Name</label>
                        <input type="text" class="form-control" id="mentor" name="mentor">
                      </div>                    
                      <div class="form-group">
                        <label for="information">Information About Learn</label>
                        <input type="text" class="form-control" id="information" name="information">
                      </div>
                      <div class="form-group">
                        <label for="link">Link Youtube</label>
                        <input type="text" class="form-control" id="link" name="link">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                    </form>
                </div>
              </div>
            </div>

            <?php foreach ($learn as $lm) {
              # code...
              echo $lm->id 
            ?>
            <div class="modal fade" id="Edit<?= $lm->id ?>" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Learn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="material-icons">clear</i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/editLearn/').$lm->id ?>" method="post">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $lm->judul ?>">
                      </div>                    
                      <div class="form-group">
                        <label for="mentor">Mentor Name</label>
                        <input type="text" class="form-control" id="mentor" name="mentor" value="<?= $lm->nama_mentor ?>">
                      </div>                    
                      <div class="form-group">
                        <label for="information">Information About Learn</label>
                        <input type="text" class="form-control" id="information" name="information" value="<?= $lm->keterangan ?>">
                      </div>
                      <div class="form-group">
                        <label for="link">Link Youtube</label>
                        <input type="text" class="form-control" id="link" name="link" value="<?= $lm->link ?>">
                      </div>
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
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
</body>
</html>