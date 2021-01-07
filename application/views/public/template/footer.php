<!-- footer -->
<div class="footer" style="background-color: #E4E4E4;">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <a href="<?= base_url() ?>">
          <img style="width: 180px;" class="logo-footer mx-auto" src="<?= base_url('assets/img/footer.png'); ?>" alt="logo-kayu-online">
        </a>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 m-auto">

        <ul class="list-group h-auto">
          <li><a class="" style="font-size:large; color:black;" href="<?= base_url('layanan-pelanggan') ?>">Layanan Pelanggan</a></li>
        </ul>
        <ul></ul>
        <ul class="list-group h-auto">
          <li> <a class="" style="font-size:large; color:black;" href="<?= base_url('kebijakan-privasi') ?>">Kebijakan Privasi</a></li>
        </ul>
        
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 m-auto">
        <!-- <div class="row">
          <a class="mx-auto" style="font-size:large; color:black;" href="<?= base_url('gudang-kami') ?>">Lokasi Gudang</a>
        </div>
        <div class="row">
          <a class="mx-auto" style="font-size:large; color:black;" href="<?= base_url('layanan-pelanggan') ?>">Jam Buka (09.00 - 17.00 / Senin - Sabtu)</a>
        </div> -->
        <ul class="list-group h-auto" style="margin:0px !important; padding:0px !important;">
          <li class=""><a class="" style="font-size:large; color:black;" href="<?= base_url('gudang-kami') ?>">Lokasi Gudang</a></li>
        </ul>
        <ul></ul>
        <ul class="list-group h-auto">
          <li><a class="" style="font-size:large; color:black;" href="<?= base_url('faq') ?>">FAQ</a></li>
        </ul>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-sm-4">
        <a href="<?= base_url() ?>">
          <img style="width: 180px;" class="logo-footer mx-auto" src="<?= base_url('assets/img/footer.png'); ?>" alt="logo-kayu-online">
        </a>
      </div>
      <div class="col-sm-8">

        <div class="row" style="margin-top: 60px;">
          <div class="col-6">
            <div>
              <ul class="lokasi-toko" style="list-style-type:none;position: relative;  font-family:'helvetica',sans-serif; font-size: 15.95px;">
                <li><a style="font-size:large; color:black;" href="<?php echo base_url('layanan-pelanggan') ?>">Layanan Pelanggan</a></li>
              </ul>

              <ul class="kebijakan-privasi" style="list-style-type:none; position: relative; font-family:'helvetica',sans-serif; font-size: 15.95px;">
                <li><a style="font-size:large; color:black;" href="<?= base_url('kebijakan-privasi') ?>">Kebijakan Privasi</a></li>
              </ul>

              <ul class="faq" style="list-style-type:none; position: relative; font-family:'helvetica',sans-serif; font-size: 15.95px;">
                <li><a style="font-size:large; color:black;" href="<?= base_url('faq') ?>">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-6">
            <div class="">
              <ul class="lokasi-toko" style="list-style-type:none; position: relative; font-family:'helvetica',sans-serif; font-size: 15.95px;">
                <li><a style="font-size:large; color:black;" href="<?= base_url('gudang-kami') ?>">Lokasi Toko</a></li>
              </ul>
              <ul class="jam-buka" style="list-style-type:none; position: relative; font-family:'helvetica',sans-serif; font-size: 15.95px;">
                <li><a style="font-size:large; color:black;" href="<?= base_url('layanan-pelanggan') ?>">Jam Buka (09.00 - 17.00 / Senin - Sabtu)</a></li>
              </ul>
             
            </div>
          </div>
        </div>

      </div>

    </div> -->
  </div>
</div>
<a href="https://api.whatsapp.com/send?phone=6281212151324&text=Halo Admin, Bisa Bantu Saya?" class="float-wa" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
</a>

<div class="footer_socialmedia">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <!-- <h5 class="copyright" style="margin-top: 30px">© 2020 Kayuonline - All Right reserved!</h5> -->
        <h4 class="COPYRIGHT">© 2020 Kayuonline - All Right reserved!</h4>
      </div>
      <div class="col-6">
        <div class="social_media">
          <ul>
            <li><a href=""><img style="width: 260px; position: relative; left: -300px" src="<?php echo base_url('assets/img/bank.png'); ?>" alt=""></a></li>
            <!-- <li><a href=""><img style="width: 20px;" src="<?php echo base_url('assets/img/instagram.png'); ?>" alt=""></a></li>  -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- akhir footer -->

<style>
  /* ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
} */

  ul {
    list-style-type: none !important;
  }

  .float-wa {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 80px;
    right: 50px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 50;
  }

  .my-float {
    margin-top: 16px;
  }

  .COPYRIGHT {
    margin-top: 20px;
  }




  @media screen and (max-width:750px) {

    /* html,
    body {
      overflow-y: hidden;
    } */
    body {
      padding: 0px;
    }

    .footer {
      font-size: 50px;
      z-index: 10;
    }

    ul,
    li {
      margin-top: 0px !important;
      padding-top: 0px !important;
      padding-bottom: 0px !important;
      padding-bottom: 0px !important;
    }

    /* ul {
      list-style-type: none !important;
      
    } */

    /* a {
    
      text-decoration: none;
    } */

    ul.faq {
      position: absolute;
      top: -65px;
      list-style-type: none !important;

      color: black !important;
      /* left: 35px; */

    }

    ul.kebijakan-privasi {
      /* position: absolute; */
      top: -65px;
      list-style-type: none !important;
      ;
      color: black !important;
      /* left: 35px; */
    }

    ul.layanan-pelanggan {
      position: relative;
      left: 10px;
      /* top:-47px; */
      z-index: 100;
      list-style-type: none !important;
      ;
      color: black !important;

    }

    ul.lokasi-toko {
      position: relative;
      top: -47px;
      list-style-type: none !important;
      ;
      color: black !important;
    }

    ul.jam-buka {
      position: absolute;
      top: -65px;
      list-style-type: none !important;
      ;
      color: black !important;
    }

    .footer_socialmedia {
      position: relative;
    }

    .float-wa {
      right: 10px;
    }

    #button {
      margin-right: -40px;
    }

    .copyright {
      margin-top: 250px;
    }

    .COPYRIGHT {
      font-size: 10px;
      text-align: center;
      margin: 30px 50%;
      width: 100%;
    }
  }
</style>




<!-- javaScript Boot -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->

<!-- scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  document.getElementById("defaultOpen").click();
</script>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<!-- search -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function() {
    $(".fa-search").click(function() {
      $("icon").toggleClass("active");
      $("input[type='text']").toggleClass("active");
    });
  });
</script>

<!-- sidedrawer -->

<script>
  const sidedrawer = document.querySelector(".sidedrawer");
  const backdrop = document.querySelector(".backdrop")
  const bars = document.getElementById("bars");

  bars.addEventListener("click", () => {
    sidedrawer.classList.add('active');
    backdrop.classList.add('show');
  });

  backdrop.addEventListener('click', () => {
    sidedrawer.classList.remove("active");
    backdrop.classList.remove("show");
  });
</script>

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

<script>
  jQuery(document).ready(function($) {

    $('.option').on({
      'click': function() {
        // alert('masuk');
        var angka = $(this).val();
        words = angka.split('+');
        var harga = words[0];
        var stock = words[1];
        var sold = words[2];
        var ukuran = words[3];
        // var stock = $(this).val();
        hargaPerUkuran.innerHTML = harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        // alert ()
        hargaPerUkuran2.innerHTML = stock;
        hargaPerUkuran3.innerHTML = sold;
        // var stock= $(this).val();
        // alert(angka);
        // $('#change-image').attr('src', base_url+'/'+$thumbnail);
      }
    });
  });
</script>

</body>

</html>