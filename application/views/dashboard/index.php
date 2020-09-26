<!doctype html>
<html lang="en">
  <?php $this->load->view("_partial/head") ?>
  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="<SB-Mid-client-AlTjkFbcOyPRGVv7>"></script>
<body>
  <div class="wrapper ">
    <?php $this->load->view("_partial/sidebar") ?>
    <div class="main-panel">
        <?php $this->load->view("_partial/navbar") ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <form id="payment-form" method="post" action="<?=site_url()?>snap/finish">
              <input type="hidden" name="result_type" id="result-type" value=""></div>
              <input type="hidden" name="result_data" id="result-data" value=""></div>
            </form>

            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h3 class="card-title">Reporting your sccore <?php echo $this->session->userdata('jenisTest')?></h3>
                  <p class="card-category">All Test</p>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <p>
                      Has finished working on the test given and got a score of
                    </p>
                    <div class="row">
                      <div class="col-md-7">
                        <div class="row">
                            <?php
                             foreach ($raport as $rap) {
                            
                            ?>
                          <div class="col-md-9">                          
                            <h4>Multiple Choice</h4>
                            <h4>Listening</h4>
                            <?php if ($rap->jenis == 'ielts') {

                            ?>
                            <h4>Essay</h4>
                            <?php }else{

                            } ?>
                          </div>
                          <div class="col-md-3">
                            <h4>: <?= $rap->nilaiSP ?></h4>
                            <h4>: <?= $rap->nilaiSL ?></h4>
                            <?php if ($rap->jenis == 'ielts') {
                              
                            ?>
                              <h4>: <?= $rap->nilaiSE ?></h4>
                            <?php }else{

                            } ?>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <br>
                        <button class="btn btn-info btn-lg" disabled="">Print Certificate</button>
                      </div>
                    </div>
                    <br>
                    <p>
                      If you want to get tips and tricks, check the prices below to get access to learning videos
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
           
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h3 class="card-title">Promotion Price Of Learning Lession</h3>
                    <p class="card-category">Category</p>
                  </div>
                  <div class="card-body">
                    <div class="container-fluid">
                      <h5>Please select the appropriate package and immediately complete the payment on the existing payment pop-up. Payment confirmation will be made one day after payment</h5>
                      <div class="row">
                        <?php 
                          $no = 1;
                          foreach ($harga as $har) {
                        ?>
                          <div class="col-md-4">
                            <div class="card">
                              <div class="card-header card-header-warning ">
                                <h4 class="card-title" align="center"><?= $har->nama_paket ?></h4>
                                <p class="category" align="center">Category <?= $no++ ?></p>
                              </div>
                              <div class="card-body">
                                <h3 align="center">Rp <?= $har->harga ?></h3>
                                <span><?= $har->kelebihan ?></span>
                                <button id="pay-button<?php echo $har->id_harga?>" class="btn btn-success btn-sm text-white">Daftar</button>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php $this->load->view("_partial/footer") ?>
    </div>
  </div>
    <?php $this->load->view("_partial/js") ?>
<?php
foreach ($harga as $a) {
?>

    <script type="text/javascript">
  
      $('#pay-button<?php echo $a->id_harga?>').click(function (event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");
      
      $.ajax({
        url: '<?=site_url()?>snap/token/<?php echo $a->id_harga?>',
        cache: false,

        success: function(data) {
          //location = data;

          console.log('token = '+data);
          
          var resultType = document.getElementById('result-type');
          var resultData = document.getElementById('result-data');

          function changeResult(type,data){
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
            //resultType.innerHTML = type;
            //resultData.innerHTML = JSON.stringify(data);
          }

          snap.pay(data, {
            
            onSuccess: function(result){
              changeResult('success', result);
              console.log(result.status_message);
              console.log(result);
              $("#payment-form").submit();
            },
            onPending: function(result){
              changeResult('pending', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            },
            onError: function(result){
              changeResult('error', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            }
          });
        }
      });
    });

    </script>
<?php } ?>
</body>
</html>