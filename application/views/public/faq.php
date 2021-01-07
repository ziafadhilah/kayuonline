
    <div class="container">
        <div class="row">
          <div class="col">
            <h2 style="text-align: center" class="animate__animated animate__backInLeft animate__delay-1s"><strong> FREQUENTLY ASKED QUESTIONS </strong> </h2>
          </div>
        </div>
    </div>
    <!-- dropdown -->
    <div class="container mt-3">
      <div class="animate__animated animate__fadeInLeft">
        <button class="accordion bts">Apa itu KayuOnline?</button>
        <div class="panel">
            <p>KayuOnline adalah perusahaan supplier berbagai jenis kayu yang berlokasi di Ruko Istana Pasteur Regency, Jl. Terusan Gunung Batu, Sukaraja, Cicendo, Kota Bandung, Jawa Barat.</p>
        </div>

        <button class="accordion">Apa tujuan KayuOnline dalam dunia bisnis?</button>
        <div class="panel">
            <p>Menjadi pusat supplier kayu terbesar di Indonesia dengan sistem e-commerce agar memudahkan dalam melayani konsumen yang tersebar di seluruh Indonesia</p>
        </div>

        <button class="accordion">Apa manfaat membeli di kayuOnline?</button>
        <div class="panel">
            <p>– Mudah dalam proses  pembelian kayu</p>
            <p>– Memberi akses kepada masyarakat umum terutama yang bergerak di industri terkait agar bisa membeli kayu dengan mudah</p>
            <p>– Informasi tentang kayu yang mudah didapatkan bagi masyarakat</p>
        </div>
      </div>

      <div class="animate__animated animate__fadeInDown animate__delay-1s">
        <button class="accordion">Siapa saja yang dapat membeli kayu di KayuOnline?</button>
        <div class="panel">
            <p>Semua orang bisa membeli kayu di KayuOnline, baik individu, kelompok ataupun perusahaan</p>
        </div>
        <button class="accordion">Bagaimana cara untuk menjadi anggota KayuOnline?</button>
        <div class="panel">
            <p>Calon member harus melakukan registrasi dan mengisi semua field yang ada pada form registrasi, setelah itu calon member akan mendapatkan email aktivasi bahwa dia sudah aktif menjadi member. Di dalam email aktivasi akan terdapat userid dan password yang bisa digunakan oleh member untuk login.</p>
        </div>
        <button class="accordion">Bagaimana cara membeli kayu di KayuOnline?</button>
        <div class="panel">
            <p>–  Pelanggan harus login terlebih dahulu.</p>
            <p>–  Pelanggan melakukan filter kayu yang ingin dibeli pada form filter kayu.</p>
            <p>–  Pelanggan pilih kayu yang ingin dibeli.</p>
            <p>–  Setelah selesai memilih kayu, pelanggan bisa cek keranjang belanja, cek total yang harus dibayarkan.</p>
            <p>–  Pelanggan pilih metode pembayaran yang diinginkan. Bank dan Channel yang diinginkan</p>
            <p>–  Pelanggan lakukan pembayaran</p>
            <p>–  Konfirmasi pembayaran</p>
        </div>
      </div>

      <div class="animate__animated animate__fadeInUp animate__delay-2s">
        <button class="accordion">Apakah total pembayaran saat beli kayu sudah termasuk biaya muat, angkutan, atau cetak dokumen?</button>
        <div class="panel">
            <p>Anda tinggal menunggu barang sampai setelah pembayaran</p>
        </div>
        <button class="accordion">Apakah setelah melakukan pembayaran saya harus melakukan konfirmasi?</button>
        <div class="panel">
            <p>Konfirmasi melalui whatsapp</p>
        </div>
        <button class="accordion">Bagaimana jika setelah melakukan transfer atau pembayaran, saya tidak menerima email konfirmasi?</button>
        <div class="panel">
            <p>Silahkan hubungi kami melalui whatsapp</p>
        </div>
        <button class="accordion">Produk apa saja yang ditawarkan oleh KayuOnline?</button>
        <div class="panel">
            <p>KayuOnline menyediakan berbagai jenis produk berbahan kayu seperti kayu olahan, decking, pintu, lis profil, tangga, dll</p>
        </div>
      </div>

      <div class="animate__animated animate__fadeInRight animate__delay-3s">
        <button class="accordion">Bagaimana cara pengambilan produk?</button>
        <div class="panel">
            <p>Konsumen dapat langsung mengambil barang yang telah dibeli langsung ke toko kami atau bisa kami antarkan langsung ke tempat</p>
        </div>
        <button class="accordion">Apakah barang yang sudah dibeli dapat dibatalkan?</button>
        <div class="panel">
            <p>Barang yang sudah dibeli tidak dapat dibatalkan</p>
        </div>
        <button class="accordion">Bagaimana kalau saya tidak pernah melakukan pembayaran setelah booking?</button>
        <div class="panel">
            <p>Kami akan mengontak Anda terkait pembelian yang telah Anda lakukan</p>
        </div>
        <button class="accordion">Apakah satu perusahaan bisa memiliki akun user lebih dari satu pada Toko KayuOnline?</button>
        <div class="panel">
            <p>bisa, namun kami sarankan hanya fokus pada satu akun agar dapat memudahkan Anda</p>
        </div>
        <button class="accordion">Bagaimana kalau saya ingin komplain barang?</button>
        <div class="panel">
            <p>Silahkan menghubungi kami melalui whatsapp atau email dan jelaskan keluhan Anda pada Kami</p>
        </div>
      </div>
        
        
        
    </div>

    <!-- ada pertanyaan -->

    <div class="container">
        <div class="row">
          <div class="col" style="text-align: center">
            <div class="kontakkami animate__animated animate__fadeInUp animate__delay-3s">
            <h3> Ada pertanyaan? Kontak kami !</h3>
            <li><a class="btn btn-outline-primary" href="https://api.whatsapp.com/send?phone=6281212151324&text=Saya%20ingin%20bertanya" style="font-size: 17px">Kontak kami</a></li>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
  <!-- acordion -->
  <script>
    var acc = document.getElementsByClassName("accordion");
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
  <!-- acordion -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


  <!-- javaScript Boot -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Optional JavaScript -->

  <!-- scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  //   document.getElementById("defaultOpen").click();
  // </script>

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<style>
  body{
      overflow-y:hidden;
  }
</style>

</body>