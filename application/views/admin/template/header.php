<?php 
  foreach ($allNotif->result() as $key): 
    $admin_reg = $key->admin_reg;
    $stok_barang = $key->stok_barang;
    $bukti_tf = $key->bukti_transfer;
    $semua = $admin_reg + $stok_barang + $bukti_tf;
  endforeach;
  $active = $this->uri->segment(2);
 ?>
 <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><?php if($active==''){ echo 'DASHBOARD'; } else { echo strtoupper($active); } ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin'); ?>">
                  <i style="color: brown" class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style="color: gold" class="material-icons">notifications</i>
                  <?php if ($semua !=0) { ?><span class="notification"><?php echo $semua; ?></span><?php } ?>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('admin/daftar-admin') ?>">Permintaan Admin <?php if ($admin_reg !=0) { ?> <span class="notification"><?php echo $admin_reg; ?></span><?php } ?></a>
                  <a class="dropdown-item" href="<?= base_url('admin/stok-minim')?>">Stok Minim <?php if ($stok_barang !=0) { ?> <span class="notification"><?php echo $stok_barang; ?></span><?php } ?></a>
                  <a class="dropdown-item" href="<?php echo base_url('admin/daftar-bukti-tf') ?>">Bukti Transfer <?php if ($bukti_tf >0) { ?> <span class="notification"><?php echo  $bukti_tf; ?></span><?php } ?></a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style="color:red" class="material-icons">power_settings_new</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <!-- <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item"  onclick="return confirm('Apakah anda yakin ingin keluar ?')" href="<?php echo base_url('login/logout') ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->