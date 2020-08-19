<div class="modal fade" id="MCTofle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Tofle Test Multiple Choice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/storeSP'; ?>" method="post">
            <div class="form-group">
              <label for="isiSoal">Isi Soal</label>
              <input type="text" class="form-control" id="isiSoal" name="isi">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="a">Jawaban A</label>
                  <input type="text" class="form-control" id="a" name="a">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="b">Jawaban B</label>
                  <input type="text" class="form-control" id="b" name="b">
                </div>
              </div>      
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="c">Jawaban C</label>
                  <input type="text" class="form-control" id="c" name="c">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="d">Jawaban D</label>
                  <input type="text" class="form-control" id="d" name="d">
                </div>    
              </div>
            </div>
            <div class="form-group">
              <label for="jawaban">Jawaban Yang Benar</label>
              <input type="text" class="form-control" id="jawaban" name="jawaban">
            </div>
            <div class="form-group">
              <label for="point">Point</label>
              <input type="text" class="form-control" id="point" name="point">
            </div>
            <input type="hidden" name="jenis" value="tofle">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>