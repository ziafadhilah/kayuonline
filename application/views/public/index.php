 <?php
  // foreach ($productKO as $our): 
  //     echo "<pre>";
  //     print_r($our);
  //     echo "</pre>";
  // endforeach;
  // die();
  ?>
 <!-- slider -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <h1 class="animate__animated animate__fadeIn animate__delay-1s">
         <img class="d-block w-100" src="<?= base_url('/assets/img/slide1.jpeg'); ?>" alt=" First slide">
       </h1>
       <div class="carousel-caption d-none d-md-block">
         <h1>Kayu Online</h1>
         <h3>Supplier Kayu Terbaik di Indonesia</h3>
       </div>
     </div>
     <div class="carousel-item">
       <h1 class="animate__animated animate__fadeIn animate__delay-1s">
         <img class="d-block w-100" src="<?= base_url('/assets/img/slide2.jpeg'); ?>" alt="Second slide">
       </h1>
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>

 <!-- filter -->

 <!-- Nav tabs -->
 <br>
   <div class="tab">
     <button class="tablinks" onclick="openCity(event, 'kayuolahan')" id="defaultOpen">
        <h3 class="animate__animated animate__slideInLeft">Kayu olahan</h3>
     </button>
     <button class="tablinks" onclick="openCity(event, 'decking')">
        <h3 class="animate__animated animate__slideInLeft">Decking</h3>
     </button>
     <button class="tablinks" onclick="openCity(event, 'kusen')">
        <h3 class="animate__animated animate__slideInLeft">Kusen</h3>
     </button>
     <button class="tablinks" onclick="openCity(event, 'pintu')">
        <h3 class="animate__animated animate__slideInRight">Pintu</h3>
     </button>
     <button class="tablinks" onclick="openCity(event, 'lis_profil')">
        <h3 class="animate__animated animate__slideInRight">Lis Profil</h3>
     </button>
     <button class="tablinks" onclick="openCity(event, 'tangga')">
        <h3 class="animate__animated animate__slideInRight">Tangga</h3>
     </button>
   </div>

 <br>
 <br>

 <div id="kayuolahan" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productKO)) {
          foreach ($productKO as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                 <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=KO&nama=' . $key->name) ?>">
                     <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1">
                   </a>
                 </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=KO&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>
         <center>
           <span>
             <h1 class="animate__animated animate__zoomIn" style="font-size: 40px;"> &nbsp Coming Soon !</h1>
           </span>
         </center>
       <?php } ?>

     </div>
   </div>
 </div>

 <div id="decking" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productDK)) {
          foreach ($productDK as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=DK&nama=' . $key->name) ?>">
                   <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1"></a>
                </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=DK&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>
         <center>
           <span>
             <h1 style="font-size: 40px;"> Coming Soon !</h1>
           </span>
         </center>
       <?php } ?>

     </div>
   </div>
 </div>

 <div id="kusen" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productKS)) {
          foreach ($productKS as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=KS&nama=' . $key->name) ?>">
                   <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1"></a>
                </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=KS&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>
         <center>
           <span>
             <h1 class="animate__animated animate__zoomIn" style="font-size: 40px;"> &nbsp Coming Soon !</h1>
           </span>
         </center>
       <?php } ?>

     </div>
   </div>
 </div>

 <div id="pintu" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productPT)) {
          foreach ($productPT as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=PT&nama=' . $key->name) ?>">
                   <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1"></a>
                </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=PT&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>
         <center>
           <span>
             <h1 class="animate__animated animate__zoomIn" style="font-size: 40px;"> &nbsp Coming Soon !</h1>
           </span>
         </center>
       <?php } ?>

     </div>
   </div>
 </div>

 <div id="lis_profil" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productLP)) {
          foreach ($productLP as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=LP&nama=' . $key->name) ?>">
                   <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1"></a>
                </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=LP&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>

         <span>
           <h1 class="animate__animated animate__zoomIn" style="font-size: 40px;"> &nbsp Coming Soon !</h1>
         </span>

       <?php } ?>

     </div>
   </div>
 </div>

 <div id="tangga" class="tabcontent">
   <div class="container">
     <div class="row">
       <?php
        if (!empty($productTG)) {
          foreach ($productTG as $key) :
        ?>
           <div class="col-md-3">
             <div class="product-top">
               <div class="thumb-img">
                <h1 class="animate__animated animate__zoomIn animate__delay-1s">
                   <a href="<?php echo base_url('produk?kategori=TG&nama=' . $key->name) ?>">
                   <img width="100%" src="<?= base_url() . $key->image; ?>" class="gambar1"></a>
                </h1>
                 <!-- <a href="<?php echo base_url('produk?kategori=TG&nama=' . $key->name) ?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
               </div>
               <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
             </div>

             <div class="product-buttom text-center">
               <h3 class="animate__animated animate__backInLeft"><?= $key->name ?></h3>
               <h5 class="animate__animated animate__backInLeft"><?php if ($key->max_price != $key->min_price) { ?>
                   <p class="description">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } else { ?>
                   <p class="description">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></p>
                 <?php } ?>
               </h5>
             </div>
             <br />
           </div>
         <?php endforeach;
        } else {
          ?>
         <center>
           <span>
             <h1 class="animate__animated animate__zoomIn" style="font-size: 40px;"> &nbsp Coming Soon !</h1>
           </span>
         </center>
       <?php } ?>

     </div>
   </div>
 </div>



 <!-- banner -->
 <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="img-hover-zoom img-hover-zoom--xyz">
         <img class="img-hover" src="<?= base_url('assets/img/banner2.png'); ?>" alt="Another Image zoom-on-hover effect">
       </div>
     </div>
     <div class="col-md-6">
       <div class="img-hover-zoom img-hover-zoom--xyz">
         <img class="img-hover" src="<?= base_url('assets/img/banner1.png'); ?>" alt="Another Image zoom-on-hover effect">
       </div>
     </div>
   </div>
 </div>

 <!-- akhir banner -->