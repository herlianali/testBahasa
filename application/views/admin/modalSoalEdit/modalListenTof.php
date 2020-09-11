<?php
foreach ($listeningTofle as $lt) {
  
?>
<div class="modal fade" id="LTofle<?= $lt->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Tofle Test Listening</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/editL/'.$lt->id; ?>" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="a">Jawaban A</label>
                  <input type="text" class="form-control" id="a" name="a" value="<?= $lt->a ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="b">Jawaban B</label>
                  <input type="text" class="form-control" id="b" name="b" value="<?= $lt->b ?>">
                </div>
              </div>      
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="c">Jawaban C</label>
                  <input type="text" class="form-control" id="c" name="c" value="<?= $lt->c ?>">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="d">Jawaban D</label>
                  <input type="text" class="form-control" id="d" name="d" value="<?= $lt->d ?>">
                </div>    
              </div>
            </div>
            <div class="form-group">
              <label for="jawaban">Jawaban Yang Benar</label>
              <input type="text" class="form-control" id="jawaban" name="jawaban" value="<?= $lt->jawaban ?>">
            </div>
            <div class="form-group">
              <label for="point">Point</label>
              <input type="text" class="form-control" id="point" name="point" value="<?= $lt->point ?>">
            </div>
            <input type="hidden" name="jenis" value="tofle">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>