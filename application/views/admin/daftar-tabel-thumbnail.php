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
                    <h4 class="card-title mt-0">Daftar Thumbnail</h4>
                    <!-- <p class="card-category"></p> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <th>
                            No
                          </th>
                          <th>
                            Kode Kayu
                          </th>
                          <th>
                            Thumbnail
                          </th>
                          <th style="text-align: center">
                            Aksi
                          </th>
                        </thead>
                        <tbody>
                          <?php $nomor=1; foreach ($thumbnail as $key) : ?>
                            <tr>
                              <td><?= $nomor;?></td>
                              <td><?= $key['kode_product'];?></td>
                              <!-- <td><?= $key->kode_kayu;?></td> -->
                              <td><img style="height: 130px; width: 100px" src="<?= base_url().$key['thumbnail'];  ?>"> </td>
                              <td style="text-align: center;">
                                <a href="<?= base_url('admin/edit_thumbnail/'.$key['id']);?>">
                                  <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                                </a>
                                <a href="<?= base_url('admin/hapus_thumbnail/'.$key['id']);?>">
                                  <i style="color: red" title="Hapus" rel="tooltip" class="material-icons">delete</i>
                                </a>
                              </td>
                            </tr>
                            <?php $nomor+=1; endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>