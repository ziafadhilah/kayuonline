  <div class="content">
    <div class="container-fluid">
      <?php
      if (!empty($this->session->flashdata('msg'))) {
        $message = $this->session->flashdata('msg');
        ?>
        <div class="alert alert-<?php echo $message['class']?>" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><?php echo $message['message'] ?></center>
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Stok Harga Ukuran</h4>
              <p class="card-category">Edit Produk kayu online</p>
            </div>
            <div class="card-body">    
            <?php foreach ($getHasSizes->result() as $data ) { ?>        
              <form action="<?php echo base_url('admin/proses_edit_stok_harga_ukuran/'.$this->dataencryption->enc_dec('encrypt',$data->product_id).'/'.$this->dataencryption->enc_dec('encrypt',$data->product_size_id)) ?>" method="POST"><br>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Stok</label>
                      <input type='text' value='<?= $data->stock ?>' onkeypress='return hanyaAngka(event)' name='stok' class='form-control'>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Harga</label>
                        <input type='text' value='<?= $data->price ?>' onkeypress='return hanyaAngka(event)' name='harga' class='form-control'>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Ukuran</label>
                      <input type='text' value='<?= $data->product_size_id ?>' name='ukuran' class='form-control'>
                    </div>
                  </div> -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Ukuran</label>
                      <select style="margin-top: -15px" name="id_ukuran" class="form-control">
                        <?php foreach($allProductSizes as $key){ 
                          $categori = $key['id'];
                          echo "<option value='$categori'>{$key['size']}</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <button type="submit" class="btn btn-primary pull-right">Ubah</button>
            <div class="clearfix"></div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>