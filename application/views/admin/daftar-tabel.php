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
                  <h4 class="card-title ">Daftar Tabel Admin</h4>
                  <p class="card-category"> Ini Merupakan Daftar Admin Kayu Online</p>
                </div>
                <a href="add-admin">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Admin
                </div>
                </a>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <?php 
                        if (!empty($admin->result())){
                      ?>
                      <thead class="text-primary">
                        <th>
                          No
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
                        foreach ($admin->result() as $key): 
                        ?>
                        <tr>
                          <td>
                            <?php echo $nomor ?>
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
                              <a href="<?php echo base_url('admin/edit/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                                <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                              </a>
                          </td>
                          <td>
                              <a href="<?php echo base_url('admin/hapus/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                <i style="color: red" rel="tooltip" title="Hapus" class="material-icons">delete_forever</i>
                              </a>
                          </td>
                          
                        </tr>
                        <?php $nomor+=1; endforeach;
                        ?>
                        <?php }
                        else{
                          echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Daftar Tabel User</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($user->result())){
                      ?>
                      <thead class="text-primary">
                        <th>
                          No
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
                        $nomor=1;
                        foreach ($user->result() as $key):?>
                         <tr>
                          <a href="#"><td>
                            <?php echo $nomor; ?>
                          </td></a>
                          <a href="#"><td>
                            <?php echo $key->nama; ?>
                          </td></a>
                          <a href="#"><td>
                            <?php echo $key->email; ?>
                          </td></a>
                          <td>
                            <?php echo $key->username; ?>
                          </td>
                          <td>
                              <a href="<?= base_url('admin/edit_user/'.$this->dataencryption->enc_dec("encrypt", $key->id))?>">
                                <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                              </a>
                          </td>
                          <td>
                              <a href="<?php echo base_url('admin/hapus/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                <i style="color: red" rel="tooltip" title="Hapus" class="material-icons">delete_forever</i>
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