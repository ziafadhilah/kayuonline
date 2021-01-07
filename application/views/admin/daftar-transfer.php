<div class="content">
  <div class="container-fluid">
    <?php
    if (!empty($this->session->flashdata('msg'))) {
      $message = $this->session->flashdata('msg');
    ?>
      <div class="alert alert-<?php echo $message['class'] ?>" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><?php echo $message['message'] ?></center>
      </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-warning">
            <h4 class="card-title mt-0"> Daftar Tabel Transfer Pembeli Yang Belum Di Konfirmasi</h4>
            <p class="card-category"> Ini Merupakan Tabel transfer Pemesanan yang belum di konfirmasi oleh Admin Kayu Online</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($buktiTf->result())) { ?>
                  <thead class=" text-warning">
                    <th>
                      Nomor
                    </th>
                    <th>
                      ID Pemesan
                    </th>
                    <th>
                      Nama Pemesan
                    </th>
                    <th>
                      Alamat Pemesan
                    </th>
                    <th>
                      Kode Pos
                    </th>
                    <th>
                      Kota
                    </th>
                    <th>
                      Kontak
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Bukti TF
                    </th>
                    <th colspan="2" style="text-align: center;">
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($buktiTf->result() as $key) :
                    ?>
                      <tr>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $nomor ?>
                          </a>
                        </td>
                        <td>
                          <!-- <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?> -->
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->id_pemesan; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->nama_pemesan; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->alamat_pemesan; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->kode_pos; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->kota; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->kontak; ?>
                          </a>
                        </td>
                        <td>
                          <a rel="tooltip" title="Lihat Detail Pesanan" style="color: black" href="<?= base_url('admin/get-pesanan-byIDPemesan?id=' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan)); ?>">
                            <?php echo $key->email; ?>
                          </a>
                        </td>
                        <td>
                          <img style="height: 150px; width: 100px" src="<?= base_url() . $key->bukti_transaksi; ?>">
                        </td>
                        <td>
                          <a href="<?php echo base_url('admin/proses_bukti/' .
                                      $this->dataencryption->enc_dec("encrypt", $key->id) .
                                      '/terima/' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan) . "/" . $key->email) ?>">
                            <i style="color: blue" title="Terima" class="material-icons">done</i>
                          </a>
                        </td>
                        <td>
                          <a href="<?php echo base_url('admin/proses_bukti/' . $this->dataencryption->enc_dec("encrypt", $key->id) . '/tolak/' . $this->dataencryption->enc_dec("encrypt", $key->id_pemesan) . "/" . $key->email) ?>">
                            <i style="color: red" title="Tolak" class="material-icons">remove_circle</i>
                          </a>
                        </td>

                      </tr>
                  <?php $nomor += 1;
                    endforeach;
                  } else {
                    echo '<center><h3>TIDAK ADA DATA !</h3></center>';
                  }

                  ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Daftar Tabel Transfer Pembeli Yang Terkonfirmasi</h4>
            <p class="card-category"> Ini Merupakan Tabel transfer Pemesanan yang terkonfirmasi oleh Admin Kayu Online</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($TFDone->result())) { ?>
                  <thead class=" text-primary">
                    <th>
                      Nomor
                    </th>
                    <th>
                      ID Pemesan
                    </th>
                    <th>
                      Nama Pemesan
                    </th>
                    <th>
                      Alamat Pemesan
                    </th>
                    <th>
                      Kode Pos
                    </th>
                    <th>
                      Kota
                    </th>
                    <th>
                      Kontak
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Bukti TF
                    </th>
                    <th colspan="2" style="text-align: center;">
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($TFDone->result() as $key) :
                    ?>
                      <tr>
                        <td>
                          <?php echo $nomor ?>
                        </td>
                        <td>
                          <!-- <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?> -->
                          <?php echo $key->id_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->nama_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->alamat_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->kode_pos; ?>
                        </td>
                        <td>
                          <?php echo $key->kota; ?>
                        </td>
                        <td>
                          <?php echo $key->kontak; ?>
                        </td>
                        <td>
                          <?php echo $key->email; ?>
                        </td>
                        <td>
                          <img style="height: 100px; width: 100px" src="<?= base_url() . $key->bukti_transaksi;  ?>">
                        </td>
                        <!-- <td>
                        <a href="<?php echo base_url('admin/proses_bukti/' . $this->dataencryption->enc_dec("encrypt", $key->id) . '/terima') ?>">
                          <i style="color: blue" title="Terima" rel="tooltip" class="material-icons">done</i>
                        </a>
                      </td> -->
                        <td>
                          <a onclick="return confirm('Hapus ?')" href="<?php echo base_url('admin/hapusTF/' . $this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                            <i style="color: red" title="Hapus" rel="tooltip" class="material-icons">delete_forever</i>
                          </a>
                        </td>
                      </tr>
                  <?php
                      $nomor += 1;
                    endforeach;
                  } else {
                    echo '<center><h3>TIDAK ADA DATA !</h3></center>';
                  }

                  ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-danger">
            <h4 class="card-title mt-0"> Daftar Tabel Transfer Pembeli Yang Ditolak</h4>
            <p class="card-category"> Ini Merupakan Tabel transfer Pemesanan yang ditolak bukti transfer nya</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($TFTolak->result())) { ?>
                  <thead class=" text-danger">
                    <th>
                      Nomor
                    </th>
                    <th>
                      ID Pemesan
                    </th>
                    <th>
                      Nama Pemesan
                    </th>
                    <th>
                      Alamat Pemesan
                    </th>
                    <th>
                      Kode Pos
                    </th>
                    <th>
                      Kota
                    </th>
                    <th>
                      Kontak
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Bukti TF
                    </th>
                    <th colspan="2" style="text-align: center;">
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($TFTolak->result() as $key) :
                    ?>
                      <tr>
                        <td>
                          <?php echo $nomor ?>
                        </td>
                        <td>
                          <!-- <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?> -->
                          <?php echo $key->id_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->nama_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->alamat_pemesan; ?>
                        </td>
                        <td>
                          <?php echo $key->kode_pos; ?>
                        </td>
                        <td>
                          <?php echo $key->kota; ?>
                        </td>
                        <td>
                          <?php echo $key->kontak; ?>
                        </td>
                        <td>
                          <?php echo $key->email; ?>
                        </td>
                        <td>
                          <img style="height: 100px; width: 100px" src="<?= base_url() . $key->bukti_transaksi;  ?>">
                        </td>
                        <!-- <td>
                        <a href="<?php echo base_url('admin/proses_bukti/' . $this->dataencryption->enc_dec("encrypt", $key->id) . '/terima') ?>">
                          <i style="color: blue" title="Terima" rel="tooltip" class="material-icons">done</i>
                        </a>
                      </td> -->
                        <td>
                          <a onclick="return confirm('Hapus ?')" href="<?php echo base_url('admin/hapusTF/' . $this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                            <i style="color: red" title="Hapus" rel="tooltip" class="material-icons">delete_forever</i>
                          </a>
                        </td>
                      </tr>
                  <?php
                      $nomor += 1;
                    endforeach;
                  } else {
                    echo '<center><h3>TIDAK ADA DATA !</h3></center>';
                  }

                  ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>