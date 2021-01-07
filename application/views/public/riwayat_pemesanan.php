<?php 
  foreach ($reservasi as $res) {
    $status = $res['status'];
  } 
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Riwayat Pemesanan</h4>
                  <p class="card-category">Berikut adalah list barang yang telah anda pesan !</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Produk</th>
                          <th class="text-center">Ukuran</th>
                          <th class="text-center">Jumlah Barang</th>
                          <th class="text-center">Harga Barang</th>
                          <th class="text-center">Total</th>
                          <th class="text-center">Status Pemesanan</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                      $nomor = 1;
                       foreach ($order as $key) { 
                        ?>
                        <tr>
                          <td><?= $nomor; ?></td>
                          <td><?= $key['nama_product']; ?></td>
                          <td class="text-center"><?= $key['ukuran']; ?></td>
                          <td class="text-center"><?= $key['jumlah']; ?></i></td>
                          <td class="text-center"><?= $key['harga']; ?></i></td>
                          <td class="text-center"><?= $key['total']; ?></i></td>
                          <?php if ($status == 'done') {?>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                          <?php }elseif ($status == 'proses_3') { ?>
                          <td class="text-center"><i style="font-size: 14px" class="fa fa-refresh fa-spin fa-3x fa-fw text-info"></i></td>
                          <?php }else{ ?>
                            <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <?php } ?>
                        </tr>
                      <?php  $nomor += 1; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <?php if ($status == 'proses_3') { ?>
                <h4 class="text-center">Pemesanan Sedang Dalam Proses Pemverfikasian oleh Pihak Kami </h4>
              <?php } elseif ($status == 'done') { ?>
                <h4 class="text-center">Pemesanan Sudah Di verifikasi oleh Pihak Kami </h4>
              <?php } else{ ?>
                <h4 class="text-center" style="color: red">Pemesanan Anda Ditolak, Silahkan Upload <a target="_blank" href="order-complete" class="btn btn-info"> Bukti Transaksi</a> </h4>
                
              <?php } ?>
            </div>
          </div>
        </div>
      </div>