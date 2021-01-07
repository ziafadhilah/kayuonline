<?php


foreach ($total_biaya as $total): 
   $jumlah_bayar = $total->total;
endforeach;
?>

<section class="wrapper">

<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="proced-1">
                <a class="next-1" href="<?php echo base_url('wishlist')?>">
                    <h1 style="color: black;" class="proced-1">01</h1>
                    <h4 style="color: black;" class="shop-1">Keranjang Belanja</h4>
                    <p style="color: black;" class="item-1">Kelola daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-II">
                <?php  if (!empty($order)){ ?>
                    <a class="next-2" href="<?php echo base_url('checkout')?>">
                    <?php } else{ ?>
                        <a class="next-3" href="">
                        <?php } ?>
                    <h1 style=" font-size: 3.5rem;">02</h1>
                    <h4 class="shop-2">Detail Checkout</h4>
                    <p class="item-2">Periksa daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php  if (!empty($order)){ ?>
                <a class="next-3" href="<?php echo base_url('order-complete')?>">
            <?php } else{ ?>
                <a class="next-3" href="">
            <?php } ?>
                <h1 class="proced-3">03</h1>
                <h4 class="shop-3">Pesanan Selesai</h4>
                <p class="item-3">Tinjau dan Kirim Pesanan Anda.</p>
            </a>
        </div>
    </div>
    <div class="container">
       <!-- tabel -->
       <div class="container">
        <div class="row">
            <table class="table" border="1">
                <thead>
                    <?php  if (!empty($order)){ 
                     foreach ($order as $key):  ?>
                    <tr>
                        <td rowspan="4" >
                            <!-- <a href="<?php echo base_url('home/delete_order/').$key['id']?>"><input type="button" title="Hapus" value="X" style="margin-bottom: 20px"></a> -->

                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Item Ini ?')" href="<?php echo base_url('home/delete_order/').$key['id']?>"><i class="fa fa-trash-o" title="Hapus"></i></a>
                            <img class="imgMobile" style="width: 75px; height: 140px" src="<?php echo base_url().$key['gambar_product']?>" alt="">

                            <!-- <a href="<?php echo base_url('home/edit_order/').$key['id']?>"><button><i class="fa fa-pencil" title="edit"></i></button></a>
                            <img class="imgMobile" style="width: 75px; height: 140px" src="<?php echo base_url().$key['gambar_product']?>" alt=""> -->
                        </td>
                        <td>ukuran</td>
                        <td><?= $key['nama_product']; ?> - <?= $key['ukuran'] ?> </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>Rp. <span><?php echo number_format($key['harga'],2,',','.'); ?></span></td>
                        <!-- <input type="hidden" id="harga" value="<?= $key->harga ?>"> -->
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td> <span><?= $key['jumlah'] ?></span></td>
                        <!-- <input type="hidden" id="harga" value="<?= $key->jumlah ?>"> -->
                        
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td> <span><?php echo number_format($key['total'],2,',','.'); ?></span></td>
                        <!-- <input type="hidden" id="harga" value="<?= $key->total ?>"> -->
                    </tr>
                </thead>
                <?php endforeach; 
                    } else {
                ?>
                <center>
                        <div class="container">
                          <h2 style="text-align: center; font-weight: bold;">Wishlist Kosong !</h2>
                      </div>
                  </center>
                  <?php } ?>
            </table>
            <div >
                <a href="<?= base_url('toko') ?>"><input style="background-color: green; color: white" type="submit" name="beli lagi" class="btn btn-block" value="Belanja Lagi?"></a>
            </div>
        
    </div>
    <!-- <div style="margin-top: 50px" class="form-group">
        <input style="background-color: #888" type="submit" onclick="updateValue()" name="keranjang" class="btn btn-block" value="Perbarui Keranjang">
    </div> -->
</div>

<!-- tabel -->
        <!-- <span style="float: right; margin-top: 20px">
            <div class="form-group">
                <input style="background-color: #888" type="submit" onclick="updateValue()" name="keranjang" class="btn btn-block" value="Perbarui Keranjang">
            </div>
        </span> -->
    </div>
</div>
<div class="container" style="margin-bottom: 30px">
    <form action="<?= base_url('checkout') ?>">
      <table class="order-detail" border="1" style="width:100% ; text-align: center;">
        <tr >
            <td class="td_price"> <strong>Jumlah Total Harga Produk</strong> </td>
            <!-- <td class="td_price"> <strong>Rp. <span id = "valueSteper2"></strong></td> -->
            <td class="td_price"> <strong>Rp. <?php echo number_format($jumlah_bayar,2,',','.'); ?></strong></td>
                <input type="hidden" id="jumlah" value="13000">
            </tr>
        </table>
        <span style="float: center; margin-top: 20px">
            <div class="form-group">
                <input style="background-color: green; color: white" type="submit" name="pesan" class="btn btn-block" value="Proses Ke Pesanan">
            </div>
        </span>
        <!-- <div class="form-group col-md-2" style="margin-top: -20px; text-align: center" >
            <input style="background-color: black; " type="submit" name="pesan" class="btn btn-block" value="Proses Ke Pesanan">
        </div> -->
    </form>
</div>

</section>
<!-- 
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
                        $(this).attr('disabled', true);
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
                alert('Maaf, jumlah minimal tidak boleh 0');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Maaf, jumlah maksimal tidak boleh lebih dari 100');
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

    <script >
        function updateValue(){
            for(let i = 0; i < 2; i++){
                // document.write("<p>Perulangan ke-" + i + "</p>")

                var nilai = document.getElementById("stepper").value;
                var total = document.getElementById("harga").value;
                var jumlah = document.getElementById("jumlah").value;
                valueSteper.innerHTML= nilai*total;
                var hasilKali = nilai*total;
                valueSteper2.innerHTML= valueSteper.innerHTML;
                valueSteper3.innerHTML= jumlah;
                var hasilJumlah=jumlah*1;
                valueSteper4.innerHTML=hasilJumlah+hasilKali;
             }


        }
    </script>
    <script>
        $('input[type="button"]').click(function(e){
           $(this).closest('thead').remove()
       })
    </script> -->

    <script >
        document.getElementById("defaultOpen").click();


        function updateValue(){
            for(let i = 0; i < 2; i++){
                // document.write("<p>Perulangan ke-" + i + "</p>")

                var nilai = document.getElementById("stepper").value;
                alert(nilai);
                var total = document.getElementById("harga").value;
                var jumlah = document.getElementById("jumlah").value;
                valueSteper.innerHTML= nilai*total;
                var hasilKali = nilai*total;
                valueSteper2.innerHTML= valueSteper.innerHTML;
                valueSteper3.innerHTML= jumlah;
                var hasilJumlah=jumlah*1;
                valueSteper4.innerHTML=hasilJumlah+hasilKali;
            }


        }

        $('input[type="button"]').click(function(e){
           $(this).closest('thead').remove()
       })

//end //
    </script>