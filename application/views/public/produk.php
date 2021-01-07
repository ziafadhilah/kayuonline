<?php
// echo "<pre>";
// print_r($this->session->userdata());
// echo "</pre>";

foreach ($tampil as $key): 
    $foto = $key->image;
    $name = $key->name;
    $desc = $key->description;
    $details = $key->detail;
    $priceMax = $key->max_price;
    $priceMin = $key->min_price;
    $sku = $key->product_code;
    $stock = 0;
    $id = $key->product_id;
    $sold = 0;
endforeach;
?>
<!--start wrapper-->
<!-- bradcrom -->

    <div class="jumbotron jumbotron-fluid mb-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <ul class="bradcrom-links">
                        <li><a href="<?= base_url() ?>">Home</a><a> / </a><span>Produk</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 

    <!-- bradcrom -->
    <div class="detail-produk">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="iner_filter">
                        <h5 class="widged_title">PRODUCT CATEGORIES</h5>

                        <?php if (!empty($productDK)){ ?>
                        <button class="accordion-2">Decking</button>
                        <div class="panel">
                            <?php foreach ($productDK as $key ) {?>
                            <div class="ex">
                                <a href="<?php echo base_url('produk?kategori=DK&nama='.$key->name)?>"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="decking">
                                <a class="widget_a" href="">Decking</a>
                            </div>
                        <?php } ?>

                        <?php if (!empty($productKO)){ ?>
                        <button class="accordion-2">Kayu olahan</button>
                        <div class="panel">
                            <?php foreach ($productKO as $key ) {?>
                            <div class="ex">
                                <a href="<?php echo base_url('produk?kategori=KO&nama='.$key->name)?>"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="kayuolahan">
                                <a class="widget_a" href="">kayuolahan</a>
                            </div>
                        <?php } ?>

                        <?php if (!empty($productPT)){ ?>
                        <button class="accordion-2">Pintu</button>
                        <div class="panel">
                            <?php foreach ($productPT as $key ) {?>
                            <div class="ex">
                                <a href="<?php echo base_url('produk?kategori=PT&nama='.$key->name)?>"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="pintu">
                                <a class="widget_a" href="">Pintu</a>
                            </div>
                        <?php } ?>

                        <?php if (!empty($productTG)){ ?>
                        <button class="accordion-2">Tangga</button>
                        <div class="panel">
                            <?php foreach ($productTG as $key ) {?>
                            <div class="ex">
                                <a href="#"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="tangga">
                                <a class="widget_a" href="">Tangga</a>
                            </div>
                        <?php } ?>

                        <?php if (!empty($productKS)){ ?>
                        <button class="accordion-2">Kusen</button>
                        <div class="panel">
                            <?php foreach ($productKS as $key ) {?>
                            <div class="ex">
                                <a href="<?php echo base_url('produk?kategori=KS&nama='.$key->name)?>"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="kusen">
                                <a class="widget_a" href="">Kusen</a>
                            </div>
                        <?php } ?>

                        <?php if (!empty($productLP)){ ?>
                        <button class="accordion-2">Lis Profil</button>
                        <div class="panel">
                            <?php foreach ($productLP as $key ) {?>
                            <div class="ex">
                                <a href="<?php echo base_url('produk?kategori=LP&nama='.$key->name)?>"><?php echo $key->name; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }else{ ?>
                            <div class="lisprofil">
                                <a class="widget_a" href="">Lis Profil</a>
                            </div>
                        <?php } ?>

                       <!--  <div class="lisprofil">
                            <a class="widget_a" href="">Lis Profil</a>
                        </div>
                        <div class="pintu">
                            <a class="widget_a" href="">Pintu</a>
                        </div>
                        <div class="tangga">
                            <a class="widget_a" href="">Tangga</a>
                        </div> -->

                        <!-- <div class="tag">
                            <h4 style="font-size: 20px; margin-top: 30px;">TAGS</h4>
                        </div>

                        <div class="tags-btn">
                            <div class="btn-tags">
                                <ul>
                                    <a href="">Decking</a>
                                    <a href="">Kayu Olahan</a>
                                </ul>
                                <ul>
                                    <a href="">Kusen</a>
                                </ul>
                                <ul>
                                    <a href="">Lis Profil</a>
                                    <a href="">Pintu</a>
                                    <a href="">Tangga</a>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-sm-1">
                    <div class="smal-img-row">
                        <?php 
                        foreach ($thumbnail as $key): 
                        ?>

                        <div class="smal-img-col">
                            <img src="<?= base_url().$key->thumbnail; ?>" alt="" width="100%" height="80px" class="SmallImg">
                        </div>

                        <?php 
                        endforeach;
                        ?>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="singgle-img">
                        <img src="<?= base_url().$foto ?>" alt="" width="100%" height="450px" id="productImg">

                        <!-- <div class="smal-img-row">
                        <div class="smal-img-col">
                            <img src="img/lg-2.png" alt="" width="100%" height="100px" class="SmallImg">
                        </div>
                        <div class="smal-img-col">
                            <img src="img/lg-3.png" alt="" width="100%" height="100px" class="SmallImg">
                        </div>
                        <div class="smal-img-col">
                            <img src="img/lg-4.jpeg" alt="" width="100%" height="100px" class="SmallImg">
                        </div>
                        <div class="smal-img-col">
                            <img src="img/gl.jpeg" alt="" width="100%" height="100px" class="SmallImg">
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <form action="<?= base_url('proses-pemesanan');?>" method="post">
                        <input type="hidden" name="nama_produk" value="<?php echo $name; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="sku" value="<?php echo $sku; ?>">
                        <h1 style="font-weight: bold;"><?php echo $name; ?></h1>
                        <?php if ($priceMax == $priceMin) { ?>
                        <h3 style="margin-top: 10px;">Rp <?php echo number_format($priceMax,2,',','.'); ?></h3>
                        <?php } else{ ?>
                            <h4>Rp <?php echo number_format($priceMin,2,',','.'); ?>  -  Rp <?php echo number_format($priceMax,2,',','.'); ?></h4>
                        <?php } ?>

                        <h4 style="margin-top: 10px;"><?php echo $name; ?></h4>
                        <p style="margin-top: 10px;"><?php echo $desc; ?>
                        </p>
                        <div class="ukuran">
                            <h5>Ukuran
                                
                                <span>
                                    <div class="row">
                                        <?php
                                        foreach ($produk as $key): 
                                            // print_r($key);
                                            // exit();
                                            ?>
                                            <div class="col-lg-5 col-md-5 col-sm-5">
                                                <input id="option" required class="option" type="radio" name="option_sizes" value="<?php echo $key->price; ?> + <?php echo $key->stock; ?> + <?php echo $key->sold; ?> + <?php echo $key->size; ?>">
                                                <label for="option"><span ><?php echo $key->size; ?></span></label>
                                                <input type="hidden" name="foto" value="<?php echo $foto; ?>">
                                                <!-- <input type="hidden" name="price" value="<?php echo $key->price; ?>"> -->
                                                <input type="hidden" name="product_size_id" value="<?=$key->product_size_id?>">
                                                <input type='hidden' class='stock' name='stock' value='<?= $key->stock; ?>' />
                                            </div>
                                            <?php 
                                        endforeach;
                                        ?>
                                    </div>
                                </span>
                                
                            </h5>
                        </div>
                        <h3>Rp <span id = "hargaPerUkuran"></span></h3>
                        <div class="stok">
                            <span style="font-weight: bold;">SOLD<strong style="color: red;"><span id = "hargaPerUkuran3"></strong></span>
                            <span style="margin-left: 200px; font-weight: bold;">ONLY <strong
                                    style=" color: red;"><span id = "hargaPerUkuran2"></strong>
                                LEFT</span>
                        </div>
                        <div style="height:9px; margin-bottom: 15px" class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="input-spinner">
                            <span class="stepper input">

                            </span>
                        </div>
                        <span>
                         <div style="width: 150px; height: 10px ; padding-bottom: 20px" class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-type="minus" data-field="quant[1]">
                                  <span class="glyphicon glyphicon-minus">-</span>
                              </button>
                          </span>
                          <input style="height: 33px; text-align: center" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100" readonly>
                          <span class="input-group-btn">
                            <button type="button"  class="btn btn-success btn-number" data-type="plus" data-type="plus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-plus">+</span>
                          </button>
                      </span>
                  </div>
                        </span>
                        <center> <div class="form-group " style="padding-top: 20px">
                            <?php if (isset($_SESSION['logged_in']) and $_SESSION['role'] =='user') { ?>
                                <input type="submit" name="proses" class="btn btn-block btn-danger" value="Proses">
                            <?php }else{ ?>
                            
                        <?php } ?>
                            </div> </center>
                    
                    </form>
                     <?php if (!isset($_SESSION['logged_in'] )) {  ?>
                                 <a class="dropdown-item"  onclick="return confirm('Anda Harus Login Terlebih Dahulu?')" href="<?php echo base_url('user-login') ?>"><input type="submit" name="proses" class="btn btn-block btn-danger" value="Proses"></a>
                            <?php }else{ ?>
                            
                        <?php } ?>
                   

                    </div>
                   <!--  <div class="buy-now-1">
                        <a href="viewcart.html">Pesan Sekarang</a>
                    </div><br>
                    <div class="addtowishlist">
                        <a href="wishlist.php">
                            <i class="fa fa-heart-o">
                                Add to Wishlist
                            </i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <div style="margin-top: 50px;" class="container">
        <hr>
    </div>
    <!-- descriptions -->
    <div class="tab-produk-preview">
        <div class="container">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'kayuolahan')" id="defaultOpen">Deskripsi</button>
                <button class="tablinks" onclick="openCity(event, 'decking')">Informasi Tambahan</button>
                <!-- <button class="tablinks" onclick="openCity(event, 'pintu')">Review (0)</button> -->
            </div>
        </div>

        <div style="margin-top: 30px;" class="conten">
            <div class="container">
                <div id="kayuolahan" class="tabcontent">
                    <h3>Details</h3>
                    <p><?= $key->detail; ?></p>
                </div>

                <div id="decking" class="tabcontent">
                    <h6><span style="font-weight: bold;">Jenis Kayu</span>
                        NON KD (Non Killn Dry), KD (Killn Dry)
                    </h6>
                    <h6><span style="font-weight: bold;">Ukuran</span>
                        150 X 15 X 5, 180 X 15 X 5, 200 X 15 X 5, 210 X 15 X 5
                    </h6>
                </div>

                <!-- <div id="pintu" class="tabcontent">
                    <h5>Reviews</h5>
                    <p>There are no reviews yet.</p>
                    <hr>
                    <p>Be the first to review <?php echo '“'.$name.'”'; ?> </p>
                    <p>Your email address will not be published. Required fields are marked<span
                            style="color: red;">*</span></p>
                    <P style="margin-bottom: -2px;">Your rating<span style="color: red;">*</span></P>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                            title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half"
                            for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                            title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half"
                            for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                            title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half"
                            for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                            title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half"
                            for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                            title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half"
                            for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    <br>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Review <span style="color: red;">*</span>
                            </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom04">Email<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Email"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom04">Nama<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Nama" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
    <br>
    <!-- relate -->
    <div class="container">
        <div style="text-align: center;" class="relate">
            <hr>
            <span style="font-weight: bold;">SKU:</span><span style="color: #888;"><?php echo $sku; ?><span> <span> / </span>
                    <span style="font-weight: bold; color: #000;">Categories:</span>
                    <span class="link-relate"><a href="#"><?php echo $name; ?>,</a> <a href="#">Kayu Olahan</a></span>
                    <hr>
        </div>
    </div>
    <div class="relatedproduk">
        <div class="containner">
            <div class="col-sm-12">
                <h4 style="text-align: center;">Related Products</h4>
            </div>
        </div>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="<?= base_url('produk?kategori=KO&nama=merbau')?>"><img width="100%" src="<?= base_url() ?>assets/img/product/merbau.png" class="gambar1"></a>
                                        <a href="<?= base_url('produk?kategori=KO&nama=merbau')?>"><img width="100%" src="<?= base_url() ?>assets/img/product/merbau.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>(Kayu Olahan) <br> Merbau</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="<?= base_url('produk?kategori=KO&nama=jati')?>"><img width="100%" src="<?= base_url() ?>assets/img/default.png" class="gambar1"></a>
                                        <a href="<?= base_url('produk?kategori=KO&nama=jati')?>"><img width="100%" src="<?= base_url() ?>assets/img/default.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>(Kayu Olahan) <br> Jati</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="<?= base_url('produk?kategori=KO&nama=Eksotik-MG')?>"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="<?= base_url('produk?kategori=KO&nama=Eksotik-MG')?>"><img width="100%" src="<?= base_url() ?>assets/img//product/eksotik mg 2.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>(Kayu Olahan) <br> Eksotik - MG</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="<?= base_url('produk?kategori=KO&nama=Eksotik-BR')?>"><img width="100%" src="<?= base_url() ?>assets/img/product/eksotik br 1.png" class="gambar1"></a>
                                        <a href="<?= base_url('produk?kategori=KO&nama=Eksotik-BR')?>"><img width="100%" src="<?= base_url() ?>assets/img/product/eksotik br 2.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>(Kayu Olahan) <br> Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                    <!-- <div class="overlay">
                                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye"
                                                title="Quick View"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o"
                                                title="Wishlist"></i></a>
                                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart"
                                                title="Shopping"></i></a>
                                    </div> -->
                                </div>

                                <div class="product-buttom text-center">
                                    <!-- <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-o"></i>
                          <i class="fa fa-star-half-o"></i> -->
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <script>var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });</script>
    <!-- scroll -->

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

  


    <!-- js for img produk -->
    <script>
        var productImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("SmallImg");
        SmallImg[0].onclick = function () {
            productImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            productImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            productImg.src = SmallImg[2].src;
        }


    </script>


    <!-- input-spinner -->
    <script>var inc = document.getElementsByClassName("stepper");
        for (i = 0; i < inc.length; i++) {
            var incI = inc[i].querySelector("input"),
                id = incI.getAttribute("id"),
                min = incI.getAttribute("min"),
                max = incI.getAttribute("max"),
                step = incI.getAttribute("step");
            document
                .getElementById(id)
                .previousElementSibling.setAttribute(
                    "onclick",
                    "stepperInput('" + id + "', -" + step + ", " + min + ")"
                );
            document
                .getElementById(id)
                .nextElementSibling.setAttribute(
                    "onclick",
                    "stepperInput('" + id + "', " + step + ", " + max + ")"
                );
        }

        function stepperInput(id, s, m) {
            var el = document.getElementById(id);
            if (s > 0) {
                if (parseInt(el.value) < m) {
                    el.value = parseInt(el.value) + s;
                }
            } else {
                if (parseInt(el.value) > m) {
                    el.value = parseInt(el.value) + s;
                }
            }
        }</script>


<script >
    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                // $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

<style>
    @media only screen and (max-width: 600px) {
      .input-spinner {
        margin-top: 100px;
    }
    }
</style>
    <script>
        var acc = document.getElementsByClassName("accordion-2");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>










    <!-- related Products -->
    <!-- <div class="relatedproduk">
        <div class="containner">
            <div class="col-sm-12">
                <h4 style="text-align: center;">Related Products</h4>
            </div>
        </div>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                </div>

                                <div class="product-buttom text-center">
                              
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                 
                                </div>

                                <div class="product-buttom text-center">
                               
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                   
                                </div>

                                <div class="product-buttom text-center">
                                
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                </div>

                                <div class="product-buttom text-center">
                                  
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                    </div> 
                                </div>

                                <div class="product-buttom text-center">
                                 
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                </div>

                                <div class="product-buttom text-center">
                                    
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                </div>

                                <div class="product-buttom text-center">
                                  
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                 
                                </div>

                                <div class="product-buttom text-center">
                                
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                 
                                    </div> 
                                </div>

                                <div class="product-buttom text-center">
                                  
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                   
                                    </div> 
                                </div>

                                <div class="product-buttom text-center">
                                
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                    </div> 
                                </div>

                                <div class="product-buttom text-center">
                                 
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>

                            <div class="col-md-3">
                                <div class="product-top">
                                    <div class="thumb-img">
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                                        <a href="#"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                                    </div>
                                  
                                </div>

                                <div class="product-buttom text-center">
                                 
                                    <h3>Eksotik - BR</h3>
                                    <h5>Rp.500.00</h5>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> -->

    <!--slick slider on progress--->
 
<div class="container">
    <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4  active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="https://kayuonline.id/assets/img/product/eksotik%20mg%201.png" alt="slide 1">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-4 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                    </a>
                  </div>
                </div>
            </div>
             <div class="carousel-item col-md-4  ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                    </a>
                  </div>
                  
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<style>
    @media (min-width: 768px) {

    /* show 3 items */
    .carouselPrograms .carousel-inner .active,
    .carouselPrograms .carousel-inner .active + .carousel-item,
    .carouselPrograms .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }

    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }

    .carouselPrograms .carousel-inner .carousel-item-next,
    .carouselPrograms .carousel-inner .carousel-item-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
    }

    .carouselPrograms .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.333%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* left or forward direction */
    .carouselPrograms .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }

    /* farthest right hidden item must be abso position for animations */
    .carouselPrograms .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    /* right or prev direction */
    .carouselPrograms .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
</style>
<script>

$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});





  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
</script>


















    <!-- Optional JavaScript -->


    <!-- acordion -->

    <!-- acordion -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->

    <!-- Optional JavaScript -->

    <!-- scroll -->
    
