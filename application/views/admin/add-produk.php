
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
                  <h4 class="card-title">Tambah Produk Baru</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form role="form" action="<?= base_url('admin/proses_add_produk') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Produk</label>
                          <input type="text" name="nama-produk" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">SKU (Kode Produk)</label>
                          <input type="text" name="sku" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi</label>
                          <textarea name="deskripsi" rows="5" cols="30" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Detail</label>
                          <textarea name="detail" rows="5" cols="30" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div>
                          <label class="bmd-label-floating">Gambar</label>
                          <input type="file" name="gambar" class="form-control">
                        </div>
                      </div>
                    </div>
                   <!--  <div class="row">
                      <div class="col-md-12">
                        <div class="input_fields_wrap">
                          <label class="bmd-label-floating">Thumbnail</label>
                          <div><input type="file" name="mygambar[]"><button title="Tambah Thumbnail" rel="tooltip" class="add_field_button">+</button></div>
                          
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Produk Kategori</label>
                          <select style="margin-top: -15px" name="kategori" class="form-control">
                            <?php foreach($allProductCategories as $key){ 
                              $categori = $key['id'];
                              echo "<option value='$categori'>{$key['category_name']}</option>";
                            }?>
                          </select>
                          <!-- <input type="text" name="nama" required class="form-control"> -->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-4">
                    		<div class="form-group">
                    			<label class="bmd-label-floating">Stok</label>
                    			<input type="text" onkeypress="return hanyaAngka(event)" name="stok" class="form-control">
                    		</div>
                    	</div>
                    	<div class="col-md-4">
                    		<div class="form-group">
                    			<label class="bmd-label-floating">Harga</label>
                          		<input type="text" onkeypress="return hanyaAngka(event)" name="harga" class="form-control">
                    		</div>
                    	</div>
                    	<div class="col-md-4">
                    		<div class="form-group">
                    			<label class="bmd-label-floating">Ukuran</label>
                          <select style="margin-top: -15px" name="id_ukuran" class="form-control">
                            <?php foreach($allProductSizes as $key){ 
                              $categori = $key['id'];
                              echo "<option value='$categori'>{$key['size']}</option>";
                            }?>
                          </select>
                              <!-- <?php foreach ($allProductSizes as $key) {
                                $idsize = $key['id']+=1;
                                echo "<input type='hidden' name='id_ukuran' value= '$idsize'>";
                                }
                              ?>
                          		<input type="text" name="ukuran" class="form-control"> -->
                    		</div>
                    	</div>
                    </div>
                    <input type="hidden" value="not-reg" name="jenis">
                    <input type="submit" value="kirim" class="btn btn-primary pull-right">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Ukuran Baru</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form role="form" action="<?= base_url('admin/proses_add_ukuran') ?>" method="post" >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ukuran</label>
                          <input type="text" name="ukuran" class="form-control">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" value="not-reg" name="jenis">
                    <input type="submit" value="kirim" class="btn btn-primary pull-right">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <form action="#" method="post">
            <!-- <div class="input_fields_wrap">
              <button class="add_field_button">Add More Fields</button>
              <div><input type="text" name="mytext[]"></div>
            </div> -->
          </form>

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