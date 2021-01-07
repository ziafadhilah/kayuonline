<?php foreach ($productPerCategory as $key) {
} ?>
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
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Thumbnail</h4>
                  <!-- <p class="card-category"></p> -->
                </div>
                <a href="<?= base_url('admin/add-thumbnail?id='.$key->product_id);?>">
                  <div style="margin-left: 20px; margin-top: 30px;margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                    Tambah Thumbnail
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Stok Harga & Ukuran Per-Item</h4>
                  <!-- <p class="card-category"></p> -->
                </div>
                <?php foreach ($productPerCategory as $key) {
                } ?>
                <a href="<?= base_url('admin/add-harga-ukuran-stok?id='.$key->product_id);?>">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Ukuran, Harga & Stok
                  </div>
                </a>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($productPerCategory)){
                      ?>
                      <thead class="text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          SKU
                        </th>
                        <th>
                         Nama Produk
                        </th>
                        <th>
                          Kategori Produk
                        </th>
                        <th>
                          Ukuran
                        </th>
                        <th>
                         Harga
                        </th>
                        <th>
                          Stok
                        </th>
                        <th colspan="2" style="text-align: center;">
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        $nomor = 1;
                        foreach ($productPerCategory as $key): 
                          ?>
                        <tr>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $nomor ?>
                            <a/>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->product_code; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->name; ?>
                            </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->category_name; ?>
                            </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->size; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->price; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->stock; ?>
                          </a>
                          </td>
                          <td style="text-align: center">
                          <a href="<?php echo base_url('admin/edit_produk/'.$this->dataencryption->enc_dec("encrypt",$key->product_size_id).'/'.$this->dataencryption->enc_dec("encrypt",$key->product_id)) ?>">
                            <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                          </a>
                          <a href="<?= base_url('admin/delete_produk/'.$this->dataencryption->enc_dec("encrypt", $key->product_size_id).'/'.$this->dataencryption->enc_dec("encrypt", $key->product_id))?>">
                            <i style="color:red" title="Hapus" rel="tooltip" class="material-icons">delete</i>
                          </a>
                          </td>
                      </tr>
                         <?php $nomor+=1; endforeach;?>
                      </tbody>
                      <?php }
                        else{
                          echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                        } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>