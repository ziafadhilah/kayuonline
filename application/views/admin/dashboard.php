<!DOCTYPE html>
<html>
  <head>
    <title></title>
      <style>
        .accordion {
          background-color: white;
          color: red;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
        }

        .active, .accordion:hover {
          background-color: white; 
        }
        .accordion:after {
          content: '\21DB';
          color: red;
          font-weight: bold;
          float: left;
          margin-left: 5px;
        }

        /*.active:after {
          content: "\2212";
        }*/

        .panel {
          padding: 0 18px;
          display: none;
          background-color: white;
          overflow: hidden;
        }
      </style>
  </head>
<body>
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <!-- <span class="nav-tabs-title">User Manual :</span><br><br> -->
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#beranda" data-toggle="tab">
                            <i class="material-icons">dashboard</i> User Manual
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#tabel" data-toggle="tab">
                            <i class="material-icons">content_paste</i> Daftar Tabel
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#transaksi" data-toggle="tab">
                            <i class="material-icons">stroller</i> Status Transaksi
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#konfirmasi" data-toggle="tab">
                            <i class="material-icons">money</i> Konfirmasi Transaksi
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#lainnya" data-toggle="tab">
                            <i class="material-icons">notifications</i> Fitur Lainnya
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="beranda">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div>
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Halaman beranda merupakan tampilan awal pada tab admin ketika berhasil melakukan login.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Halaman ini berisi daftar user manual untuk memudahkan admin dalam pengolahan data.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Untuk penginputan data produk harus berurutan, yaitu mulai dari pendaftaran produk dulu (di bagian menu daftar tabel) setelah itu penginputan data ukuran, harga, stok dan thumbnail dengan cara klik salah satu item yang akan di tambahkan data nya.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td> <i style="color: red"><h4><b>Harap berhati hati dan tolong teliti jika menginput suatu data.</b></h4></i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td><h4><i style="color: red"><b>Admin harus selalu aktif untuk memeriksa keadaan stok barang minim pada menu "Stok Minim".</b></i></h4></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="tabel">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Admin</button>
                              <div class="panel">
                                  Disini admin dapat menambahkan, mengubah, ataupun menghapus admin lainnya. <p>
                                  <h6 style="color: purple">1. Tambah Admin</h6> <p> Untuk menambahkan admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">2. Ubah Admin</h6> <p> Untuk mengubah admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">3. Hapus Admin</h6> <p> Untuk menghapus admin, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel User</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus user yang sudah terdaftar, <i style="color: red">tetapi admin tidak bisa menambahkan user baru.</i> <p>
                                <h6 style="color: purple">1. Ubah User</h6> <p> Untuk mengubah user, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                                <h6 style="color: purple">2. Hapus User</h6> <p> Untuk menghapus user, kamu dapat menekan tombol &nbsp
                                  <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Produk</button>
                              <div class="panel">
                                Disini admin dapat menambahkan, mengubah, ataupun menghapus Produk dan Ukuran nya. <p>
                                  <h6 style="color: purple">1. Tambah Produk</h6> <p> Untuk menambahkan Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">2. Ubah Produk</h6> <p> Untuk mengubah Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">3. Hapus Produk</h6> <p> Untuk menghapus Produk, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">4. Tambah Ukuran, Harga & Stok</h6> <p> Untuk menambahkan Ukuran, Harga & Stok pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">5. Ubah Ukuran, Harga & Stok</h6> <p> Untuk mengubah Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: purple">edit</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">6. Hapus Ukuran, Harga & Stok</h6> <p> Untuk menghapus Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: red">delete</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">7. Tambah Thumbnail</h6> <p> Sama seperti menambahkan Ukuran, Harga & Stok, namun untuk menambahkan Thumbnail pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Tambah Thumbnail". Perlu di ingat, kamu tidak dapat menghapus dan mengubah nya disini.</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Thumbnail</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus Thumbnail yang sudah terdaftar, <i style="color: red"> tetapi admin tidak bisa menambahkan Thumbnail baru di sini.</i> <p>
                                <h6 style="color: purple">1. Ubah Thumbnail</h6> <p> Untuk mengubah Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                                <h6 style="color: purple">2. Hapus Thumbnail</h6> <p> Untuk menghapus Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: red" class="material-icons">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="transaksi">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center><h6 style="color: red">Menu Status Transaksi ini merupakan detail dari pemesan kayu yang isi nya merupakan detail dari harga barang, ukuran, jumlah pesanan, sku produk, nama produk dan nama pemesan.</h6></center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Order Yang Berstatus Pesan</button>
                              <div class="panel">
                                  1. Admin dapat melihat detail pesanan yang belum di konfirmasi, karena belum di konfirmasi maka pesanan tidak dapat di proses dan stok barang di gudang juga belum berkurang. <p> <p>
                                  2. Cara agar pesanan ter-konfirmasi, admin dapat melakukannya di menu (Konfirmasi Transaksi).
                                  <p style="color: red"> <i>3. Mohon untuk di lihat dulu tabel ini sebelum melakukan konfirmasi pesanan di tabel (Konfirmasi Transaksi).</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Order Yang Berstatus Done</button>
                              <div class="panel">
                                  Pesanan yang sebelumnya belum di konfirmasi tampil di "Daftar Tabel Order Yang Berstatus Pesan", pada bagian ini sekarang di tampilkan hanya pesanan yang sudah di konfirmasi saja. Jika sudah di konfirmasi maka stok di gudang pun harusnya berkurang dan pesanan dapat di proses. <p><p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="konfirmasi">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center><h6 style="color: red">Di daftar tabel ini, admin dapat mengkonfirmasi pemesanan atau menolak nya.</h6></center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Belum Di Konfirmasi</button>
                              <div class="panel">
                                Setelah user melakukan pemesanan, maka admin akan mendapatkan notifikasi pesanan baru pada gambar lonceng di pojok kanan atas. <p>
                                  Admin dapat menekan tombol lonceng tersebut atau menekan menu "Konfirmasi Transaksi". Setelah admin menekan tombol tersebut maka akan terdapat proses apakah admin akan mengkonfirmasi pesanan tersebut atau menolaknya. <p>
                                  Cara caranya adalah : <p>
                                    1. Mengkonfirmasi pesanan : <p>
                                      Sebelum mengkonfirmasi pesanan, mohon untuk di lihat terlebih dahulu foto bukti transfer nya. <p>
                                        Dengan cara klik kanan pada gambar nya lalu klik "Open Image In Newtab" / "Buka Gambar di Tab Baru".<p>
                                          Setelah itu admin cukup menekan tombol <i class="material-icons" style="color: blue">check</i> maka pesanan akan langsung terkonfirmasi. <p>
                                            Pesanan yang di konfirmasi akan otomatis berpindah ke "Daftar Tabel Transfer Pembeli Yang Di Konfirmasi". <p>
                                    2. Menolak pesanan : <p>
                                      Admin cukup menekan tombol <i class="material-icons" style="color: red">remove_circle</i> maka pesanan akan otomatis di batalkan. <p>
                                        Pesanan yang di tolak akan otomatis berpindah ke "Daftar Tabel Transfer Pembeli Yang Di Tolak".
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Di Konfirmasi</button>
                              <div class="panel">
                                Disini admin dapat menghapus data-data yang telah terkonfirmasi dengan cara menekan tombol <i class="material-icons" style="color: red">delete</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Di Tolak</button>
                              <div class="panel">
                                Disini admin dapat menghapus data-data yang telah di tolak dengan cara menekan tombol <i class="material-icons" style="color: red">delete</i>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="lainnya">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center>Terdapat 3 menu pilihan pada fitur ini, yaitu :</center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Permintaan admin</button>
                              <div class="panel">
                                Jika ada permintaan admin baru, admin yang sebelumnya dapat mengkonfirmasi atau menolaknya. <p>
                                  Dengan cara menekan tombol <i class="material-icons" style="color: blue">check</i> untuk konfirmasi, atau <i class="material-icons" style="color: red">warning</i> untuk menolak.
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Stok Minim</button>
                              <div class="panel">
                                Bagian ini sudah di jelaskan pada tampilan awal di "User Manual".
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Bukti Transfer</button>
                              <div class="panel">
                                Bagian ini sudah di jelaskan di menu pilihan "User Manual > Konfirmasi Transaksi".
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
      </script>
</body>
</html>
