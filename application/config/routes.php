<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['home/toko'] = 'toko';

$route['toko'] = 'home/toko';
$route['faq'] = 'home/faq';
$route['kebijakan-privasi'] = 'home/kebijakan_privasi';
$route['layanan-pelanggan'] = 'home/layanan_pelanggan';
// $route['kayu-online'] = 'home/index';
$route['tentang-kami'] = 'home/tentang_kami';
$route['produk'] = 'home/produk';
// $route['toko/produk'] = 'home/produk';
$route['gudang-kami'] = 'home/gudang_kami';
$route['wishlist'] = 'home/wishlist';
$route['checkout'] = 'home/checkout';
$route['order-complete'] = 'home/order_complete';
$route['pemberitahuan'] = 'admin/pemberitahuan';
$route['admin/tabel-order'] = 'admin/tabel_order';
$route['admin/status-transaksi'] = 'admin/status_transaksi';
$route['admin/add-admin'] = 'admin/add_admin';
$route['admin/add-produk'] = 'admin/add_produk';
$route['admin/add-harga-ukuran-stok'] = 'admin/add_harga_ukuran_stok';
$route['admin/add-thumbnail'] = 'admin/add_thumbnail';
$route['admin/daftar-admin'] = 'admin/daftar_admin';
$route['admin/stok-minim'] = 'admin/stok_minim';
$route['admin/daftar-bukti-tf'] = 'admin/daftar_bukti_tf';
$route['coba-data'] = 'home/join';
$route['kayu-olahan'] = 'home/kayu_olahan';
$route['user-login'] = 'home/user_login';
$route['user-registration'] = 'home/user_registration';
$route['forgot'] = 'home/user_forgot_pass';
$route['proses-pemesanan'] = 'home/prosesPemesanan';
$route['end-transaction'] = 'home/end_transaction';
$route['admin/get-product-byCategory'] = 'admin/get_product_byCategory';
$route['admin/get-pesanan-byIDPemesan'] = 'admin/get_pesanan_byIDPemesan';
$route['riwayat'] = 'home/riwayat_pemesanan';
$route['profil']='home/profil';



