<?php 
  $active = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/Logo-hitam.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin | Kayu Online
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url('admin'); ?>" class="simple-text logo-normal">
         <img src="<?php echo base_url(); ?>assets/img/Logo-hitam.png" style="border-radius: 100px; width: 50px; height: 50px;" /> <?php echo $_SESSION['namaUser']; ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($active==''){ ?> active <?php } ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
              <i style="color: brown" class="material-icons">dashboard</i>
              <p>User Manual</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='tabel'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tabel'); ?>">
              <i style="color: black" class="material-icons">account_circle</i>
              <p>Tabel Admin & User</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='tabelProduk'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tabelProduk'); ?>">
              <i style="color: blue" class="material-icons">content_paste</i>
              <p>Tabel Produk</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='tabelThumbnail'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tabelThumbnail'); ?>">
              <i style="color: green" class="material-icons">collections</i>
              <p>Tabel Thumbnail</p>
            </a>
          </li>
          <li style="color: purple"><hr></li>
          <li class="nav-item <?php if($active=='tabel-order'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tabel-order'); ?>">
              <i style="color:orange" class="material-icons">stroller</i>
              <p>Status Transaksi</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='status-transaksi'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/daftar-bukti-tf'); ?>">
              <i style="color: green" class="material-icons">money</i>
              <p>Konfirmasi Transaksi</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='stok-minim'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/stok-minim'); ?>">
              <i style="color: red" class="material-icons">warning</i>
              <p>Stok Minim</p>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar ?')" href="<?php echo base_url('login/logout') ?>">
              <i style="color: red" class="material-icons">power_settings_new</i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

     