<?php
foreach ($countWishlist->result_array() as $row) :
  // $kota = $row['kota'];
  $total = $row['total'];
// echo $total ; echo "</br>";
endforeach;
// $active = $this->uri->segment(2);
?>

<!doctype html>
<html lang="en">

<head>
  <title>KayuOnline | Pilihan Kayu Terbaik Untuk Anda</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/Logo-hitam.png') ?>" />
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/js/main.js'); ?>"> -->

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    html,
    body {
      overflow-x: hidden !important;
      /*overflow:inherit !important;*/
      max-width: 100%;
    }

    body {
      overflow-y: hidden !important;
    }

    :root {
      --animate-delay: 0.7s;
    }

    .zoom {
      transition: transform .2s;
      /* Animation */
    }

    .zoom:hover {
      transform: scale(1.1);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
  </style>
</head>

<body>
  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <!-- <script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 12235308;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/12235308/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript> -->


  <!--Start of Tawk.to Script-->
  <!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f6c59faf0e7167d00135146/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
  <!--End of Tawk.to Script-->

  <!-- End of LiveChat code -->

  <!-- sidedrawer -->
  <!-- <div class="sidedrawer" style="width: 45%">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="thumb-img">
            <a><img width="100%" src="<?= base_url('assets/img/gl.jpeg'); ?>" class="gambar1"></a>
          </div>

          <div class="Title-view">
            <a href="#">Eksotik Gl</a>
            <h5>Rp. 8,000,000</h5>
          </div>
        </div>

        <div style="margin-top: 10px;" class="col-sm-12">
          <div class="ukuran">
            <h5>Ukuran
              <span>
                <select class="set-ukuran">
                  <option>value</option>
                  <option>value</option>
                  <option>value</option>
                  <option>value</option>
                  <option>value</option>
                  <option>value</option>
                </select>
              </span>
            </h5>
          </div>
          <div style="margin-top: 20px;" class="stok">
            <span style="font-weight: bold;">SOLD<strong style="color: red;">0</strong></span>
            <span style="margin-left: 35px; font-weight: bold;">ONLY <strong style=" color: red;">10</strong>
              LEFT</span>
            <div style="height:9px;" class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="100"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div style="margin-top: 30px; padding: 10px 10px 10px; " class="buton-buy">
            <span><span class="stepper input">
                <button style="height: 40px; width: 40px;">–</button>
                <input style="text-align: center; width: 100px; height: 40px;" type="number" id="stepper" value="1"
                  min="0" max="100" step="1" readonly>
                <button style="height: 40px; width: 40px;">+</button>
              </span></span>
          </div>
          <div class="buy-2">
            <a href="viewcart.html">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- navbar mobile -->

  <div class="backdrop">

  </div>


  <!-- akhir header -->



  <!-- scrool top -->
  <a id="button"></a>
  <!-- akhir scrool top -->

  <!-- bar -->
  <div class="container">
    <div class="d-flex">
      <div class="mr-auto p-2 dropdown">
        <ul class="bar-links">
          <li>
            <?php if (isset($_SESSION['logged_in']) and $_SESSION['role'] == 'user') { ?>
              <div class="dropdown">
                <button class="btn dropdown-toggle" style="background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><i class="fa fa-user"></i> Akun Saya</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <label style="" class="dropdown-item mb-0 pb-0" href="#">Halo, <?php echo $_SESSION['namaUser']; ?> <br>Selamat Datang.</label>
                  <hr class="mb-0 pb-0">
                  <span style="margin-left: 20px"><a href="<?php echo base_url('profil') ?>"><i class="fa fa-user mb-2 mt-2"></i>&nbsp; Profil</a></span>
                  <br>
                  <span style="margin-left: 20px"><a onclick="return confirm('Apakah anda yakin ingin keluar ?')" href="<?php echo base_url('home/logout') ?>"><i class="fa fa-sign-out"></i>&nbsp Keluar</a></span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown">
                <button class="btn dropdown-toggle" style="background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><i class="fa fa-user"></i> Masuk / Daftar</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?php echo base_url('user-login') ?>">Masuk</a>
                  <a class="dropdown-item" href="<?php echo base_url('user-registration') ?>">Daftar</a>
                </div>
              </div>
            <?php } ?>
          </li>
        </ul>
      </div>
      <div class="p-2">
        <!-- <a class="search-brand" href="#">
          <img src="img/search.png" width="15" height="15" alt="">
        </a> -->
        <!-- <div class="wrap">
          <div class="searchbar">
            <form action="/action_page.php">
              <input type="text" placeholder="search">
              <div class="icon">
                <i class="fa fa-search"></i>
              </div>
            </form>
          </div>
        </div> -->
      </div>
      <!-- <div class="p-2">
        <a class="search-brand" href="#">
          <img src="<?= base_url('assets/img/heart.png'); ?>" width="15" height="15" alt="">
        </a>
      </div> -->
      <!-- <div class="p-2">
        <a class="search-brand" href="#">
          <img src="<?= base_url('assets/img/restore.png'); ?>" width="15" height="15" alt="">
        </a>
      </div> -->
    </div>
  </div>
  <hr>
  <!-- bar -->

  <!-- navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="zoom">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url('assets/img/Logo-hitam.png'); ?>" width="50" height="50" alt="">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="<?php echo base_url('tentang-kami') ?>"><span class="nav-menu">Tentang Kami </span></a>
          <a class="nav-item nav-link" href="<?php echo base_url('toko') ?>"><span class="nav-menu">Toko</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url('gudang-kami') ?>"><span class="nav-menu">Gudang Kami</span></a>
          <div class="shopping-bag" title="wishlist">
            <a class="navbar-brand" href="<?php echo base_url('wishlist') ?>">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <!-- <i class="fa fa-shopping-bag" aria-hidden="true"><span class="notification"><?= $total ?></span></i> -->
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <!-- akhir navbar -->