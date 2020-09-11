<div class="row">
  <h3>Ielts Edit Soal</h3>
  <div class="card card-nav-tabs">
    <div class="card-header card-header-success">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#pilihanIelts" data-toggle="tab">
                <i class="material-icons">face</i>
                Multiple Choice
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#essayIelts" data-toggle="tab">
                <i class="material-icons">face</i>
                Essay
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#listeningIelts" data-toggle="tab">
                <i class="material-icons">face</i>
                Listening
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#voiceIelts" data-toggle="tab">
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
          <div class="tab-pane active" id="pilihanIelts">
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
                  $noI = 1;
                  foreach ($pilihanIelts as $pi) {
                    
                  ?>
                  <tr>
                    <td><?= $noI++ ?></td>
                    <td><?= $pi->isi_soal ?></td>
                    <td><?= $pi->a ?></td>
                    <td><?= $pi->b ?></td>
                    <td><?= $pi->c ?></td>
                    <td><?= $pi->d ?></td>
                    <td><?= $pi->jawaban ?></td>
                    <td><?= $pi->point ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="#MCIelts<?= $pi->id?>" data-toggle="modal">Edit</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusSP/').$pi->id ?>">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          
          <div class="tab-pane" id="listeningIelts">
            <div class="container-fluid">
              <table class="table">
                <thead>
                  <th>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>point</td>
                    <td>jawaban</td>
                    <td>Aksi</td>
                  </th>
                </thead>
                <tbody>
                  <?php
                  $nomorI = 1;
                  foreach ($listeningIelts as $li) {
                    
                  ?>
                  <tr>
                    <td><?= $nomorI++ ?></td>
                    <td><?= $li->a ?></td>
                    <td><?= $li->b ?></td>
                    <td><?= $li->c ?></td>
                    <td><?= $li->d ?></td>
                    <td><?= $li->point ?></td>
                    <td><?= $li->jawaban ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="#LIelts<?= $li->id?>" data-toggle="modal">Edit</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusL/').$li->id ?>">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane" id="essayIelts">
            <div class="container-fluid">
              <table class="table">
                <thead>
                  <th>
                    <td>Soal</td>
                    <td>Jawaban</td>
                    <td>Point</td>
                    <td>Hapus</td>
                  </th>
                </thead>
                <tbody>
                  <?php 
                  $numI = 1;
                  foreach ($essayIelts as $ei) {
                  ?>
                  <tr>
                    <td><?= $numI++ ?></td>
                    <td><?= $ei->soal ?></td>
                    <td><?= $ei->jawaban ?></td>
                    <td><?= $ei->point ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="#EIelts<?= $ei->id?>" data-toggle="modal">Edit</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusE/').$ei->id ?>">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane" id="voiceIelts">
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
                  $numberI = 1;
                  foreach ($voiceIelts as $vi) {
                    
                  ?>
                  <tr>
                    <td><?= $numberI++ ?></td>
                    <td><?= $vi->voice ?></td>
                    <td>
                      <?php 
                      if ($vi->status == "aktif") {
                      ?>
                        <form action="<?= base_url('admin/statusVoi/').$vi->id ?>" method="post">
                          <input type="hidden" name="status" value="tidak aktif">
                          <button class="btn btn-success btn-sm" type="submit">Aktif</button>
                        </form>
                      <?php }else{?>
                        <form action="<?= base_url('admin/statusVoi/').$vi->id ?>" method="post">
                          <input type="hidden" name="status" value="aktif">
                          <button class="btn btn-primary btn-sm" type="submit">Tidak Aktif</button>
                        </form>
                      <?php } ?>
                    </td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapusVoi/').$vi->id ?>">hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php 
  $this->load->view("admin/modalSoalEdit/modalEsaiIel");
  $this->load->view("admin/modalSoalEdit/modalListenIel");
  $this->load->view("admin/modalSoalEdit/modalMultiIel");
  $this->load->view("admin/modalSoalEdit/modalVoiceIel");
?>