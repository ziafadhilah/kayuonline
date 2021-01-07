  <div class="jumbotron jumbotron-fluid pb-0 mb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <ul class="bradcrom-links">
            <li><a href="<?= base_url(); ?>">Beranda</a><a> / </a><span>Toko</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <ul class="tabs-column">
      <div class="zoom">
        <li data-tab-target="#column-6" class="active tab"><img class="tab_img" src="<?= base_url() ?>assets/img/6.png" alt=""></li>
      </div>
      <div class="zoom">
        <li data-tab-target="#column-5" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/5.png" alt=""></li>
      </div>
      <div class="zoom">
        <li data-tab-target="#column-4" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/4.png" alt=""></li>
      </div>
      <div class="zoom">
        <li data-tab-target="#column-3" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/3.png" alt=""></li>
      </div>
      <div class="zoom">
        <li data-tab-target="#column-1" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/1.png" alt=""></li>
      </div>
    </ul>
  </div>

  <!-- name produk kami -->
  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h5>Produk Kami</h5>
          <hr>
        </div>
      </div>
    </div>
  </section>


  <!-- tabs conten -->
  <div class="container">
    <div class="col-sm-12">
      <div class="tab-content">
        <div id="column-6" data-tab-content class="active">
          <div class="row">
            <?php foreach ($produk as $key) { ?>
              <div class="col-sm-2">
                <div class="product-top">
                  <div class="thumb-img">
                    <h1 class="animate__animated animate__fadeIn animate__delay-1s">
                      <div class="zoom">
                        <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>">
                          <img width="100%" src="<?= base_url() . $key->image ?>" class="gambar1">
                        </a>
                      </div>
                    </h1>
                  </div>
                  <div class="overlay">
                    <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars"></div>
                  </div>
                </div>
                <div class="product-buttom text-center" style="padding-bottom: 30px">
                  <h3 class="animate__animated animate__fadeInLeft"><?= $key->name ?></h3>
                  <h3 class="animate__animated animate__fadeInLeft">(<?= $key->category_name; ?>)</h3>
                  <?php if ($key->max_price == $key->min_price) { ?>
                    <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                  <?php } else { ?>
                    <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <div id="column-5" data-tab-content>
          <div class="container">
            <div class="row">
              <?php foreach ($produk as $key) { ?>
                <div class="sm-col-5">
                  <div class="product-top">
                    <div class="thumb-img">
                      <h1 class="animate__animated animate__fadeIn animate__delay-1s">
                        <div class="zoom">
                          <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>">
                            <img width="100%" src="<?= base_url() . $key->image ?>" class="gambar1">
                          </a>
                        </div>
                      </h1>
                    </div>
                  </div>
                  <div class="product-buttom text-center">
                    <h3 class="animate__animated animate__fadeInLeft"><?= $key->name ?></h3>
                    <?php if ($key->max_price == $key->min_price) { ?>
                      <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                    <?php } else { ?>
                      <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div id="column-4" data-tab-content>
          <div class="container">
            <div class="row">
              <?php foreach ($produk as $key) { ?>
                <div class="col-md-3">
                  <div class="product-top">
                    <div class="thumb-img">
                      <h1 class="animate__animated animate__fadeIn animate__delay-1s">
                        <div class="zoom">
                          <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>">
                            <img width="100%" src="<?= base_url() . $key->image ?>" class="gambar1">
                          </a>
                        </div>
                      </h1>
                    </div>
                  </div>
                  <div class="product-buttom text-center">
                    <h3 class="animate__animated animate__fadeInLeft"><?= $key->name ?></h3>
                    <?php if ($key->max_price == $key->min_price) { ?>
                      <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                    <?php } else { ?>
                      <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div id="column-3" data-tab-content>
          <div class="row">
            <?php foreach ($produk as $key) { ?>
              <div class="col-sm">
                <div class="product-top">
                  <div class="thumb-img">
                    <h1 class="animate__animated animate__fadeIn animate__delay-1s">
                      <div class="zoom">
                        <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>">
                          <img width="100%" src="<?= base_url() . $key->image ?>" class="gambar1">
                        </a>
                      </div>
                    </h1>
                  </div>
                </div>
                <div class="product-buttom text-center">
                  <h3 class="animate__animated animate__fadeInLeft"><?= $key->name ?></h3>
                  <?php if ($key->max_price == $key->min_price) { ?>
                    <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                  <?php } else { ?>
                    <h5 class="animate__animated animate__fadeInLeft">Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></h5>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <div id="column-1" data-tab-content>
          <?php foreach ($produk as $key) { ?>
            <div class="column-1">
              <div class="container">
                <div style=" padding: 15px 15px;" class="row">
                  <div class="col-sm-3">
                    <div class="col-sm">
                      <div class="product-top">
                        <div class="thumb-img">
                          <h1 class="animate__animated animate__fadeIn">
                            <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>">
                              <img width="100%" src="<?= base_url() . $key->image ?>" class="gambar1">
                            </a>
                          </h1>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <h3 class="names animate__animated animate__fadeIn animate__delay-1s"><a href="#" disabled> <?php echo strtoupper($key->name); ?> </a>, <a href="#"><?= strtoupper($key->category_name) ?></a></h3>
                      <h4 class="animate__animated animate__fadeIn animate__delay-1s"><?= $key->name; ?></h4>
                      <hr>
                      <p style="font-size: 12px;" class="animate__animated animate__fadeInUp"><?= $key->description ?></p>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div>
                      <div class="price">
                        <?php if ($key->max_price == $key->min_price) { ?>
                          <span>Rp. <?= number_format($key->max_price, 2, '.', ','); ?></span>
                        <?php } else { ?>
                          <span>Rp. <?= number_format($key->min_price, 2, '.', ','); ?> - Rp. <?= number_format($key->max_price, 2, '.', ','); ?></span>
                        <?php } ?>
                      </div>
                      <div class="stok">
                        <p>AVAILABLE : <span class="in-stok">IN STOK</span></p>
                      </div>
                      <div class="btn-add">
                        <a href="<?php echo base_url('produk?kategori=' . $key->category_code . '&nama=' . $key->name) ?>"><span class="link">Kunjungi</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>


  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-hover-zoom img-hover-zoom--xyz">
            <img class="img-hover" src="<?= base_url() ?>assets/img/banner2.png" alt="Another Image zoom-on-hover effect">
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-hover-zoom img-hover-zoom--xyz">
            <img class="img-hover" src="<?= base_url() ?>assets/img/banner1.png" alt="Another Image zoom-on-hover effect">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir banner -->

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- icon -->


  <!-- short by -->

  <script>
    const tabs = document.querySelectorAll('[data-tab-target]')
    const tabContents = document.querySelectorAll('[data-tab-content]')

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
          tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
          tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
      })
    })
  </script>

  <!-- javaScript Boot -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <!-- Optional JavaScript -->

  <!-- scroll -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script>
    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
  </script>
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
    // document.getElementById("defaultOpen").click();
  </script>

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


  <!-- acordion -->
  <script>
    var acc = document.getElementsByClassName("accordion-2");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
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
  <!-- acordion -->
  <!-- search -->
  <script>
    $(document).ready(function() {
      $(".fa-search").click(function() {
        $("icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");
      });
    });
  </script>

  <!-- stepper -->
  <script>
    var inc = document.getElementsByClassName("stepper");
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
    }
  </script>