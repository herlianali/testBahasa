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
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Data Participant</h4>
                  <p class="card-category">Complate it your data for your registration</p>
                </div>
                <div class="card-body">
                  <?php foreach ($userData as $data) {

                  ?>
                  <form action="<?php echo base_url('') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="bmd-label-floating">First Name</label>
                      <input type="text" class="form-control" name="first_name" value="<?= $data->firstName ?>" id="firstName" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control" name="last_name" value="<?= $data->lastName?>" id="lastName" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="text" class="form-control" name="email" value="<?= $data->email ?>" id="email" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" class="form-control" name="address" value="<?= $data->address ?>" id="address" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" value="<?= $data->phone ?>" id="phone" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Date of Birth</label>
                      <input type="text" class="form-control" name="DOB" value="<?= $data->dateBirth ?>" id="dob" >
                    </div><br>
                    <div class="form-group">
                      <label class="bmd-label-floating">Education</label>
                      <input type="text" class="form-control" name="education" value="<?= $data->education ?>" id="education" >
                    </div><br>
                    <!-- <div class="form-control"> -->
                      <label>Photo</label><br>
                      <input type="file" name="photo" class="form-control">
                    <!-- </div> -->
                    <br><br>
                    <button type="submit" name="send" id="pay-button" class="btn btn-danger btn-round">
                      Send Data
                    </button>
                  </form>
                  <?php } ?>
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

    <script type="text/javascript">
        $('#pay-button').click(function(event) {
            event.preventDefault();
            $(this).attr("disabled", "disabled");

            var telp = $("#telp").val();
            var telp = $("#telp").val();
            var telp = $("#telp").val();
            var email = $("#email").val();

            $.ajax({
                method: 'POST',
                url: '<?= site_url() ?>snap/token',
                data: {
                    telp: telp,
                    email: email
                },
                cache: false,

                success: function(data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                        onSuccess: function(result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>