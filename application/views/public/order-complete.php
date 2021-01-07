<?php
// $pengiriman = $this->input->post('pengiriman');
// $bank = $this->input->post('bank');

foreach ($reservasi as $res ) {
    $idPK = $res['id'];
    $bank = $res['bank'];
    if ($bank == 'Mandiri') {
        $no_rek = '1320 0226 98 998';
    }elseif ($bank == 'BRI') {
        $no_rek = '20 121 444 4532';
    }elseif ($bank == 'BCA') {
        $no_rek = '30 212 422 3241';
    }
}

foreach ($total_biaya as $total): 
   $jumlah_bayar = $total->total;
endforeach;
?>
<section class="wrapper">

<div class="container">
    <?php
    if (!empty($this->session->flashdata('msg'))) {
        $message = $this->session->flashdata('msg');
        ?>
        <div class="alert alert-<?php echo $message['class']?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><?php echo $message['message'] ?></center>
        </div>
    <?php } ?>
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="proced-1" style="margin-top: 30px;">
                <a class="next-1" href="<?php echo base_url('wishlist')?>">
                    <h1 style="color: black;" class="proced-1">01</h1>
                    <h4 style="color: black;" class="shop-1">Keranjang Belanja</h4>
                    <p style="color: black;" class="item-1">Kelola daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-II" style="margin-top: 30px;">
                <a class="next-2" href="<?php echo base_url('checkout')?>">
                    <h1 style="color: black;  font-size: 3.5rem;">02</h1>
                    <h4 style="color: black;" class="shop-2">Detail Checkout</h4>
                    <p style="color: black;" class="item-2">Periksa daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-3" style="margin-top: 30px;">
            <a class="next-3" href="">
                <h1 style="color: black;" class="proced-3">03</h1>
                <h4 style="color: black;" class="shop-3">Pesanan Selesai</h4>
                <p style="color: black;" class="item-3">Tinjau dan Kirim Pesanan Anda.</p>
            </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-1">
            <div class="col-sm">
                <div class="p" style="color: #5cb85c; font-size: 20px">Terima Kasih. Pesanan Anda Akan Kami Proses Setelah Anda Mengirimkan Bukti Pembayaran di Bawah</div>
                <br>
                <ul>
                    <li class="order">Nomor Order : <strong>7202</strong> </li>
                    <li class="date">Tanggal : <strong><?php echo date('d-m-Y'); ?></strong> </li>
                    <li class="total-3">Jumlah : <strong>Rp. <?php echo number_format($jumlah_bayar,2,',','.'); ?></strong> </li>
                    <li class="payment">Metode Pembayaran : <strong>Pembayaran Via Transfer Bank (<?= $bank; ?>)</strong></li>
                    <li class="payment">Silahkan Transfer ke Nomor Rekening Ini : a/n <strong>Hira Karya Abadi</strong> / <strong><?= $no_rek; ?></strong></li>
                </ul>
            </div>
        </div>
    </div>
   <div class="container">
    <p class="order-detail-p"> <strong>Detail Pesanan</strong> </p>
    <table class="order-detail" border="1" cellpadding="8" style="width:100%">
        <tr>
            <td> <strong>PRODUK</strong> </td>
            <td> <strong>JUMLAH</strong></td>
        </tr>

        <?php foreach ($order as $key ) { ?>
        <tr>
            <td><?= $key['nama_product']; ?> - <?= $key['ukuran'] ?> × <?= $key['jumlah'] ?> <i>(<?= $key['harga']; ?>)</i></td>
            <td>Rp.  <?php $hargaProd = ($key['jumlah'] * $key['harga']); echo number_format($hargaProd,2,',','.'); ?> </td>
        </tr>
        <?php } ?>

        <tr>
            <td> <strong>SUBTOTAL:</strong> </td>
            <td> <strong>Rp. <?php echo number_format($jumlah_bayar,2,',','.'); ?></strong> </td>
        </tr>
        <tr>
            <td> <strong>JNE:</strong> </td>
            <td> <strong>Rp13,000</strong> </td>
        </tr>
        <tr>
            <td> <strong>METODE PEMBAYARAN:</strong> </td>
            <td>  <strong>Transfer bank</strong> </td>
        </tr>
        <tr>
            <td> <strong style="color: black">JUMLAH YANG HARUS DI BAYAR:</strong> </td>
            <td> <strong style="color: black">Rp.<?php echo number_format($jumlah_bayar,2,',','.'); ?></strong> </td>
        </tr>
    </table>
    <form role="form" action="<?= base_url('home/upload_trf/'.$this->dataencryption->enc_dec("encrypt", $idPK)); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Unggah Bukti Transfer</label>
            <div>
                <input type="file" name="gambar" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <div>
                <button type="submit" style="background-color: green; color: white" name="bayar" class="btn btn-default">konfirmasi</button>
            </div>
        </div>
    </form>

</div>
<div class="container" style="margin-bottom: 30px">
    
</div>

</section>