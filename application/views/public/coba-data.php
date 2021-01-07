<?php
foreach ($joinTable as $key): 
  echo "<pre>";
  print_r($key);
  echo "</pre>";
  endforeach;
  die();
  ?>

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
                  <p class="card-category"> Ini Merupakan Daftar User Kayu Online</p>
                </div>
                <a title="tambah" href="add-admin">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Admin
                </div>
                </a>
                <!-- <div style="margin-top: 20px;" class="card-header-primary col-md-2">
                  <h4 class="card-title ">Tambah Admin</h4>
                  <a href="#">
                    <i title="Ubah" class="material-icons" style="color: white">add_task</i>
                  </a>
                  Tambah Admin
                </div> -->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <?php 
                        if (!empty($admin->result())){
                      ?>
                      <thead class=" text-primary">
                        <th>
                          Nomor
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
                       <!--  <th>
                          Password
                        </th> -->
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
                          <!-- <td>
                            <?php //echo $this->dataencryption->enc_dec("encrypt", $key->password);  ?>
                          </td> -->
                          <td>
                            <!-- <button type="button" > -->
                              <a href="<?php echo base_url('admin/edit/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>">
                                <i title="Ubah" class="material-icons">edit</i>
                              </a>
                            <!-- </button> -->
                            <!-- <button type="button" class="btn ">Edit</button> -->
                          </td>
                          <td>
                              <a href="<?php echo base_url('admin/hapus/'.$this->dataencryption->enc_dec("encrypt", $key->id)) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                <i style="color: red" title="Hapus" class="material-icons">delete_forever</i>
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
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($user->result())){
                      ?>
                      <thead class="">
                        <th>
                          Nomor
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
                        <!-- <th>
                          Password
                        </th> -->
                        <th colspan="2" style="text-align: center;">
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        $nomor=1;
                        foreach ($user->result() as $key):?>
                         <tr>
                          <td>
                            <?php echo $nomor; ?>
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
                          <!-- <td>
                            <?php echo $key->password; ?>
                          </td> -->
                          <td>
                            <!-- <button type="button" > -->
                              <a href="#">
                                <i title="Ubah" class="material-icons">edit</i>
                              </a>
                            <!-- </button> -->
                            <!-- <button type="button" class="btn ">Edit</button> -->
                          </td>
                          <td>
                            <!-- <button type="button" > -->
                              <a href="#">
                                <i title="Hapus" class="material-icons">delete_forever</i>
                              </a>
                            <!-- </button> -->
                            <!-- <button type="button" class="btn btn-danger">Hapus</button> -->
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