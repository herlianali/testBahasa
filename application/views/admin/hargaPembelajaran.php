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
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h3 class="card-title">List Harga</h3>
                  <p class="card-category">Harga Pembelajaran</p>
                </div>
                <div class="card-body">
                  <div class="container-fluid"> 
                  <a class="btn btn-info btn-round btn-just-icon" type="button" data-toggle="modal" data-placement="right" title="Input Ner Learn" data-container="body" href="#Tambah"><i class="material-icons">add</i></a>  
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Paket Harga</th>
                          <th>Kelabihan</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php 
                      $no = 1;
                      foreach ($pembayaran as $pembayar) {
                        
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $pembayar->nama_paket ?></td>
                          <td><?= $pembayar->kelebihan ?></td>
                          <td><?= $pembayar->harga ?></td>
                          <td>
                            <a href="#Edit<?= $pembayar->id_harga;?>" class="btn btn-success btn-just-icon btn-sm text-white" data-toggle="modal"><i class="material-icons">edit</i></a>
                            <a href="<?= base_url('admin/hapusSetPembayaran/').$pembayar->id_harga ?>" class="btn btn-danger btn-just-icon btn-sm text-white"><i class="material-icons">delete_forever</i></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php } ?>               
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="modal fade" id="Tambah" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Input New Price Learn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="material-icons">clear</i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/inputSetPembayaran') ?>" method="post">
                      <div class="form-group">
                        <label for="nama">Nama Paket Harga</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>                    
                      <div class="form-group">
                        <label for="kelebihan">Kelebihan</label>
                        <input type="text" class="form-control" id="kelebihan" name="kelebihan">
                      </div>                    
                      <div class="form-group">
                        <label for="harga">Harga Pembelajran</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                    </form>
                </div>
              </div>
            </div>

            <?php 
            foreach ($pembayaran as $key) {
              
            ?>
            <div class="modal fade" id="Edit<?= $key->id_harga ?>" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Price Learn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="material-icons">clear</i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/editSetPembayaran/').$key->id_harga ?>" method="post">
                      <div class="form-group">
                        <label for="nama">Nama Paket Harga</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $key->nama_paket ?>">
                      </div>                    
                      <div class="form-group">
                        <label for="kelebihan">Kelebihan</label>
                        <input type="text" class="form-control" id="kelebihan" name="kelebihan" value="<?= $key->kelebihan ?>">
                      </div>                    
                      <div class="form-group">
                        <label for="harga">Harga Pembelajaran</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $key->harga ?>">
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