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
                  <h4 class="card-title">Payment Status</h4>
                  <p class="card-category">cek your payment status below</p>
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <tr>
                      <td>Student Name</td>
                      <td>:</td>
                      <td><?php echo $payment->name_student ?></td>
                    </tr>
                    <tr>
                      <td>Status Message</td>
                      <td>:</td>
                      <td><?php echo $payment->status_message ?></td>
                    </tr>
                    <tr>
                      <td>Transaction</td>
                      <td>:</td>
                      <td><?php echo $payment->transaction_id ?></td>
                    </tr>
                    <tr>
                      <td>Bank</td>
                      <td>:</td>
                      <td><?php echo $payment->bank ?></td>
                    </tr>
                    <tr>
                      <td>Va Number</td>
                      <td>:</td>
                      <td><?php echo $payment->va_number ?></td>
                    </tr>
                    <tr>
                      <td>Order Id</td>
                      <td>:</td>
                      <td><?php echo $payment->order_id ?></td>
                    </tr>
                    <tr>
                      <td>Total Paymant</td>
                      <td>:</td>
                      <td><?php echo $payment->gross_amount ?></td>
                    </tr>
                    <tr>
                      <td>Time Transaction</td>
                      <td>:</td>
                      <td><?php echo $payment->transaction_time ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>:</td>
                      <td><?php echo $payment->transaction_status ?></td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold">if you have completed the payment but the payment status has not changed, try clicking the button beside</td>
                      <td></td>
                      <td><a class="btn btn-success" href="<?= base_url('snap/status/').$payment->order_id; ?>">Update Status Payment</a></td>
                    </tr>
                  </table>
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