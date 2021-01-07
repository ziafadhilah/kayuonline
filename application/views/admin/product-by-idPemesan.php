
<!-- <?php foreach ($pesananByID as $key) {
  // echo "<pre>";
  // print_r($key);
  // echo "</pre>";
} ?> -->
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
                  <h4 class="card-title mt-0"> Detail Pesanan</h4>
                  
                </div>
<!--                 <a href="add-produk">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Produk Baru
                  </div>
                </a> -->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($pesananByID)){
                      ?>
                      <thead class="">
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
                          Ukuran
                        </th>
                        <th>
                          Gambar
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          harga
                        </th>
                        <th>
                          Total
                        </th>
                       
                        <!-- <th>
                          Password
                        </th> -->
                        <!-- <th colspan="2" style="text-align: center;">
                          Aksi
                        </th> -->
                      </thead>
                      <tbody>
                        <?php 
                        $nomor = 1;
                        foreach ($pesananByID as $key): 
                          ?>
                        <tr>
                          <td>
                            <?php echo $nomor ?>
                          </td>
                          <td>
                            <?php echo $key->sku_product; ?>
                          </td>
                          <td>
                            <?php echo $key->nama_product; ?>
                          </td>
                          <td>
                            <?php echo $key->ukuran; ?>
                          </td>
                          <td>
                            <img style="height: 50px; width: 50px" src="<?= base_url(). $key->gambar_product; ?>">
                          </td>
                          <td>
                            <?php echo $key->jumlah; ?>
                          </td>
                          <td>
                            <?php echo $key->harga; ?>
                        </td>
                          <td>
                            <?php echo $key->total; ?>
                          </td>
                          <!-- <td>
                            <?php echo $key->password; ?>
                          </td> -->
                          
                        </tr>
                         <?php $nomor+=1; endforeach;?>
                      </tbody>
                      <?php }
                        else{
                          echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                        } ?>
                    </table>
                    <a href="daftar-bukti-tf">
                      <i class="fa fa-arrow-left">
                        Kembali
                      </i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>