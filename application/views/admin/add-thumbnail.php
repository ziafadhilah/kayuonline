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
          				<h4>Tambah Thumbnail</h4>
          			</div>
          			<div class="card-body">
          				<form role="form" action="<?= base_url('admin/proses_add_thumbnail') ?>" method="post" enctype="multipart/form-data">
	          				<div class="row">
	          					<div class="col-md-5">
	          						<div class="form-group">
	          							<input type="hidden" name="product_id" value="<?php echo $id ?>">
	          						</div>
	          					</div>
	          				</div>
	          				<div class="row">
	          					<div class="col-md-5">
	          						<label class="bmd-label-floating">Gambar Thumbnail</label>
	          						<input type="file" name="gambar" class="form-control">
	          					</div>
	          				</div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kategori</label>
                          <select style="margin-top: -15px" name="kategori" class="form-control">
                            <?php foreach($allProductCategories as $key){ 
                              $categori = $key['category_code'];
                              echo "<option value='$categori'>{$key['category_name']}</option>";
                            }?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kode Produk</label>
                          <select style="margin-top: -15px" name="kode_produk" class="form-control">
                            <?php foreach($allProducts as $key){ 
                              $categori = $key['product_code'];
                              echo "<option value='$categori'>{$key['product_code']}</option>";
                            }?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Produk</label>
                          <select style="margin-top: -15px" name="nama" class="form-control">
                            <?php foreach($allProducts as $key){ 
                              $categori = $key['name'];
                              echo "<option value='$categori'>{$key['name']}</option>";
                            }?>
                          </select>
                        </div>
                      </div>
                    </div>
	          				<button type="submit" class="btn btn-primary pull-right">Tambah</button>
            				<div class="clearfix"></div>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>
	</div>
</div>