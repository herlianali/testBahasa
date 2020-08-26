<div class="row">
  <h3>Tofle Edit Soal</h3>
  <div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#pilihan" data-toggle="tab">
                <i class="material-icons">face</i>
                Multiple Choice
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#listening" data-toggle="tab">
                <i class="material-icons">face</i>
                Listening
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#voice" data-toggle="tab">
                <i class="material-icons">face</i>
                Listening Audio
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-body ">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="pilihan">
            <div class="container-fluid">
              <table class="table">
                <thead>
                  <th>
                    <td>Isi Soal</td>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>Jawaban Benar</td>
                    <td>Point</td>
                    <td>Aksi</td>
                  </th>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($pilihanTofle as $pt) {
                  
                ?>
                  <tr>
                    <td><?=$no++ ?></td>
                    <td><?= $pt->isi_soal ?></td>
                    <td><?= $pt->a ?></td>
                    <td><?= $pt->b ?></td>
                    <td><?= $pt->c ?></td>
                    <td><?= $pt->d ?></td>
                    <td><?= $pt->jawaban ?></td>
                    <td><?= $pt->point ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="#MCTofle<?= $pt->id ?>" data-toggle="modal">Edit</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusSP/').$pt->id ?>">Hapus</a>
                    </td>
                  </tr>
                <? } ?>
                </tbody>
              </table>
            </div>
          </div>
          
          <div class="tab-pane" id="listening">
            <div class="container-fluid">
              <table class="table">
                <thead>
                  <th>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>Point</td>
                    <td>Jawaban</td>
                    <td>Aksi</td>
                  </th>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                foreach ($listeningTofle as $lt) {
                  
                ?>
                  <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $lt->a ?></td>
                    <td><?= $lt->b ?></td>
                    <td><?= $lt->c ?></td>
                    <td><?= $lt->d ?></td>
                    <td><?= $lt->point ?></td>
                    <td><?= $lt->jawaban ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="#LTofle<?= $lt->id ?>" data-toggle="modal">Edit</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusL/').$lt->id ?>">Hapus</a>
                    </td>
                  </tr>
                <? } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane" id="voice">
            <div class="container-fluid">
              <table class="table">
                <thead>
                  <th>
                    <td>Voice File</td>
                    <td>Status</td>
                    <td>Hapus</td>
                  </th>
                </thead>
                <tbody>
                  <?php
                  $number = 1;
                  foreach ($voiceTofle as $vt) {
                    
                  ?>
                  <tr>
                    <td><?= $number++ ?></td>
                    <td><?= $vt->voice ?></td>
                    <td>
                      <?php 
                      if ($vt->status == "aktif") {
                      ?>
                        <form action="<?= base_url('admin/statusVoi/').$vt->id ?>" method="post">
                          <input type="hidden" name="status" value="tidak aktif">
                          <button class="btn btn-success btn-sm" type="submit">Aktif</button>
                        </form>
                      <?}else{?>
                        <form action="<?= base_url('admin/statusVoi/').$vt->id ?>" method="post">
                          <input type="hidden" name="status" value="aktif">
                          <button class="btn btn-primary btn-sm" type="submit">Tidak Aktif</button>
                        </form>
                      <?}?>
                    </td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusVoi/').$vt->id ?>">hapus</a>
                    </td>
                  </tr>
                  <? } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php
  $this->load->view("admin/modalSoalEdit/modalListenTof");
  $this->load->view("admin/modalSoalEdit/modalMultiTof");
  $this->load->view("admin/modalSoalEdit/modalVoiceTof");
?>