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
                  <h4 class="card-title">Edit Admin</h4>
                  <p class="card-category">Edit admin kayu online</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('admin/proses_ubah_admin') ?>" method="POST">

                    <?php foreach ($admin->result() as $key): ?>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="bmd-label-floating">ID Admin</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $this->dataencryption->enc_dec('encrypt', $key->id); ?>" readonly>
                          </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" name="nama" value="<?php echo $key->nama; ?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" value="<?php echo $key->email; ?>" name="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Pengguna Login</label>
                          <input type="text" name="nama-pengguna" value="<?php echo $key->username; ?>" class="form-control">
                          <input type="hidden" value="<?php echo $key->username; ?>" name="nama-pengguna-awal">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kata Sandi</label>
                          <input type="password" value="<?php echo $key->password; ?>" name="sandi" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ulangi Kata Sandi</label>
                          <input type="password" value="<?php echo $key->password; ?>" name="sandi-2" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor handphone</label>
                          <!-- <input type="text" name="hp" class="form-control"> -->
                          <input type="text" onkeypress="return hanyaAngka(event)" name="hp" value="<?php echo $key->no_hp; ?>" class="form-control" required >
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Ubah</button>
                    <div class="clearfix"></div>
                  <?php endforeach;
                        ?>
                  </form>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="<?php echo base_url(); ?>assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div> -->
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