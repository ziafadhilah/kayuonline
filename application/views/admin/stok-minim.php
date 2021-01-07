<div class="content">
    <div class="container-fluid">
        <?php
        if (!empty($this->session->flashdata('msg'))) {
            $message = $this->session->flashdata('msg'); ?>
                <div class="alert alert-<?php echo $message['class']?>" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><?php echo $message['message'] ?></center>
                </div>
                <?php } ?>
                <center>
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card card-plain">
	                            <div class="card-header card-header-danger">
	                                <h4 class="card-title mt-0"> Daftar Produk Stok Minim</h4>
	                                <!-- <p class="card-category"> </p> -->
	                            </div>
	                            <div class="card-body">
	                                <div class="table-responsive">
	                                    <table class="table table-hover">
	                                    	<?php if (!empty($stokminim)) { ?>
	                                        <thead class="text-danger">
	                                            <th>No</th>
							                    <th>Produk</th>
							                    <th>SKU</th>
							                    <th>Kategori</th>
							                    <th>Ukuran</th>
							                    <th>Stok</th>
	                                        </thead>
	                                        <tbody class="text-danger">
	                                        <?php $no=1; foreach ($stokminim as $key) { ?>
	                                        	<td><?= $no;?></td>
	                                            <td><?= $key->name;?></td>
	                                            <td><?= $key->product_code?></td>
	                                            <td><?= $key->category_name?></td>
	                                            <td><?= $key->size;?></td>
	                                            <td><?= $key->stock;?></td>
	                                        </tbody>
	                                        <?php $no+=1; } ?>
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
                </center>
    </div>
</div>