<div class="modal fade" id="EIelts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Ielts Test Esay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/storeE'; ?>" method="POST">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="soal">Soal</label>
                  <input type="text" class="form-control" id="soal" name="soal">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="jawaban">Jawaban</label>
                  <input type="text" class="form-control" id="jawaban" name="jawaban">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="point">Point</label>
                  <input type="text" class="form-control" id="point" name="point">
                </div>
              </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>