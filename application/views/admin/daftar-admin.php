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
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Tabel Registrasi Admin</h4>
            <p class="card-category"> Ini Merupakan Tabel Permintaan Daftar Sebagai Admin Kayu Online</p>
          </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <?php if (!empty($adminDaftar->result())) { ?>
                      <thead class=" text-primary">
                        <th>
                          Nomor
                        </th>
                        <th>
                          ID
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Nama Pengguna
                        </th>
                        <th colspan="2" style="text-align: center;">
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        $nomor = 1;
                          foreach ($adminDaftar->result() as $key): 
                            ?>
                            <tr>
                              <td>
                                <?php echo $nomor ?>
                              </td>
                              <td>
                                <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?>
                              </td>
                              <td>
                                <?php echo $key->nama; ?>
                              </td>
                              <td>
                                <?php echo $key->email; ?>
                              </td>
                              <td>
                                <?php echo $key->username; ?>
                              </td>
                          <td>
                              <a href="<?php echo base_url('admin/konfirmasi_admin/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/terima') ?>">
                                <i style="color: blue" rel="tooltip" title="Terima" class="material-icons">done</i>
                              </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('admin/konfirmasi_admin/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/tolak') ?>">
                                  <i style="color: red" rel="tooltip" title="Tolak" class="material-icons">remove_circle</i>
                                </a>
                              </td>

                            </tr>
                            <?php $nomor+=1; endforeach;
                          }
                          else{
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
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Tabel Registrasi Admin Di Blokir</h4>
            <p class="card-category"> Ini Merupakan Tabel Permintaan Daftar Sebagai Admin Kayu Online Yang tidak Di Setujui</p>
          </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <?php 
                        if (!empty($adminBlok->result())){
                      ?>
                      <thead class=" text-primary">
                        <th>
                          Nomor
                        </th>
                        <th>
                          ID
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Nama Pengguna
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($adminBlok->result() as $key): 
                          ?>
                          <tr>
                            <td>
                              <?php echo $nomor ?>
                            </td>
                             <td>
                              <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?>
                            </td>
                            <td>
                              <?php echo $key->nama; ?>
                            </td>
                            <td>
                              <?php echo $key->email; ?>
                            </td>
                            <td>
                              <?php echo $key->username; ?>
                            </td>
                          <td>
                              <a onclick="return confirm('Hapus ?')"  href="<?php echo base_url('admin/hapus/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                                <i title="Hapus" rel="tooltip" class="material-icons">delete_forever</i>
                              </a>
                          </td>

                            </tr>
                            <?php $nomor+=1; endforeach;
                            ?>
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