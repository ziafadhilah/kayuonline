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
                  <h4 class="card-title mt-0"> Daftar Tabel Produk</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <a href="add-produk">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Produk Baru
                </div>
                </a>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($product)){
                      ?>
                      <thead class="text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          SKU
                        </th>
                        <th>
                          Produk Kategori
                        </th>
                        <th>
                          Nama Produk
                        </th>
                        <th class="text-center">
                          Deskripsi
                        </th>
                        <th class="text-center">
                          Detail
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        $nomor = 1;
                        foreach ($product as $key): 
                          ?>
                        <tr>
                          <td><a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $nomor ?>
                          </a>
                          </td>
                          <td>
                            <a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $key->product_code; ?>
                          </a>
                          </td>
                          <td>
                            <a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $key->category_name; ?>
                            </a>
                          </td>
                          <td>
                            <a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $key->name; ?>
                            </a>
                          </td>
                          <td class="text-center">
                            <a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $key->description; ?>
                            </a>
                          </td>
                          <td class="text-center">
                            <a rel="tooltip" title="Lihat Detail" style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>">
                            <?php echo $key->detail; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <img style="height: 100px; width: 100px" src="<?= $key->image;  ?>"> -->
                          </td>
                          <td>
                            <a href="<?= base_url('admin/edit_produk_depan/'.$this->dataencryption->enc_dec("encrypt", $key->id))?>">
                               <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                            </a>
                          </td>
                          <td>
                            <a href="<?php echo base_url('admin/delete/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                <i style="color: red;" title="Hapus" rel="tooltip" class="material-icons">delete_forever</i>
                            </a>
                          </td>
                          <!-- <td>
                              <a href="<?php echo base_url('admin/edit_produk/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                                <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                              </a>
                          </td> -->
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