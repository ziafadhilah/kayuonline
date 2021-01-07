<?php

$bank = $this->input->post('bank');
foreach ($reservasi as $res ) {
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
<div class="container">
    <div class="row-1">
        <div class="col-sm">
            <div class="p" style="color: #5cb85c; font-size: 20px">Terima Kasih <?= $this->session->userdata('namaUser'); ?>. Proses Pesanan Anda Diterima, Barang Akan secepatnya Kami Kirimkan Setelah Bukti Pembayaran terverifikasi oleh Pihak Kami! </div>
            <br>
            <ul>
                <li class="order">Nomor Order : <strong>7202</strong> </li>
                <li class="date">Tanggal : <strong><?php echo date('d-m-Y'); ?></strong> </li>
                <li class="total-3">Jumlah : <strong>Rp. <?php echo number_format($jumlah_bayar,2,',','.'); ?></strong> </li>
                <li class="payment">Metode Pembayaran : <strong>Pembayaran Via Transfer Bank (<?= $bank; ?>)</strong></li>
                <li class="payment">Status : <strong>Proses Verifikasi</strong></li>
            </ul>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px">
            <a href="<?= base_url('riwayat'); ?>"><div class="p" style="color: #5cb85c; font-size: 20px; text-align: center"> Lihat Riwayat Pembelian? </div></a>
</div>

