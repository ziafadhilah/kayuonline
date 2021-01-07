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
		  <a href="../tabel">
			 <i class="fa fa-arrow-left">&nbsp Kembali</i>
  		</a>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Thumbnail</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('admin/proses_edit_thumbnail/') ?>" method="POST" enctype="multipart/form-data">
              	<?php foreach ($thumbnailbyid->result() as $key) : ?>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="id" value="<?= $this->dataencryption->enc_dec('encrypt',$key->id)?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="hidden" value="<?= $key->product_id;?>" name="product_id" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                	<div class="col-md-4">
                		<label class="bmd-text-floating">Gambar</label>
                    	<img style="height: 150px; width: 100px" src="<?= base_url($key->thumbnail);?>">
                    	<input type="file" value="<?= $key->thumbnail;?>" name="gambar" class="form-control">
                	</div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="hidden" value="<?= $key->kode_product;?>"  name="kode_product" class="form-control">
                    </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="hidden" value="<?= $key->kode_kayu;?>"  name="kode_kayu" class="form-control">
                    </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="hidden" value="<?= $key->name;?>"  name="name" class="form-control">
                    </div>
                   </div>
                </div>
	            <button type="submit" class="btn btn-primary pull-right">Ubah</button>
	            <div class="clearfix"></div>
            <?php endforeach;?>
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