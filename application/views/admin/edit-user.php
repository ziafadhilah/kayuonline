<?php foreach ($user->result() as $key){
    echo "<pre>";
    print_r($key);
    echo "</pre>";
} ?>
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
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit User</h4>
              
            </div>
            <div class="card-body">
              <?php $url = $this->uri->segment('3'); ?>
              <?php foreach ($user->result() as $key): ?>
              <form action="<?php echo base_url('admin/proses_edit_user') ?>" method="POST"><br>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="bmd-label-floating">User ID</label>
                      <input type="text" class="form-control" name="id" value="<?= $url; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?= $key->nama;?>">
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $key->email;?>">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control" name="username" value="<?= $key->username;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="password" class="form-control" name="password" value="<?= $key->password; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">No HP</label>
                      <input type="text" class="form-control" name="hp" value="<?= $key->no_hp ;?>">
                    </div>
                  </div>
                </div>
            <button type="submit" class="btn btn-primary pull-right">Ubah</button>
            <div class="clearfix"></div>
            <?php endforeach;?>

          </form>
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