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
          				<form action="<?= base_url('admin/proses_add_harga_ukuran_stok') ?>" method="post">
	          				<div class="card-header card-header-primary">
	          					<h4>Tambah Stok, Harga, Ukuran</h4>
	          					<p class="card-category">Hanya untuk harga, ukuran dan stok</p>
	          				</div>
		          				<div class="card-body">
		          					<div class="row">
		          						<div class="col-md-4">
		          							<div class="form-group">
		          								<label>Stok</label>
		          								<input type="hidden" name="product_id" value="<?php echo $id ?>">
		          								<input type="text" name="stok" class="form-control" onkeypress="return hanyaAngka(event)">
		          							</div>
		          						</div>
		          					</div>
		          					<div class="row">
		          						<div class="col-md-4">
		          							<div class="form-group">
		          								<label>Harga</label>
		          								<input type="text" name="harga" class="form-control" onkeypress="return hanyaAngka(event)">
		          							</div>
		          						</div>
		          					</div>
		          					<div class="row">
		          						<div class="col-md-4">
		          							<div class="form-group">
		          								<label>Ukuran</label>
		          								<select style="margin-top: -15px" name="ukuran" class="form-control">
							                    	<?php foreach($productsizes as $key){ 
							                          $categori = $key['id'];
							                          echo "<option value='$categori'>{$key['size']}</option>";
							                        }?>
							                    </select>
		          							</div>
		          						</div>
		          					</div>
			          				<button type="submit" class="btn btn-primary btn-pull-right">Tambah</button>
			          				<div class="clearfix"></div>
		          				</div>
	          			</form>
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