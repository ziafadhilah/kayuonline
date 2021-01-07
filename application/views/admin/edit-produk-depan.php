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
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Produk</h4>
              <!-- <p class="card-category">Edit Produk Kayu Online</p> -->
            </div>
            <div class="card-body">
              <?php $url =$this->uri->segment('3');?>
              <form action="<?= base_url('admin/proses_edit_depan/').$url?>" method="post">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="bmd-label-floating">Produk ID</label>
                      <?= $this->dataencryption->enc_dec("decrypt",$url) ?>
                    </div>
                  </div>
                </div>
                <?php foreach ($product->result() as $data) { ?>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">SKU</label>
                      <input type="text" value="<?= $data->product_code ?>" name="sku" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      
                      <input type="hidden" value="<?= $data->category_id ?>" name="kategori" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" value="<?= $data->name ?>" name="nama" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deskripsi Produk</label>
                      <textarea class="form-control" name="deskripsi" rows="5"><?= $data->description; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Detail Produk</label>
                      <textarea class="form-control" name="detail" rows="5"><?= $data->detail ;?></textarea>
                    </div>
                  </div>
                </div>
                <?php }?>
                <button type="submit" class="btn btn-primary pull-right">Ubah</button>
                <div class="clearfix"></div>
              </form>
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