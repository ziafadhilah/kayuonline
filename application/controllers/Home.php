<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once './vendor/facebook/graph-sdk/src/Facebook/autoload.php'; // change path as needed
// require_once './vendor/autoload.php'; // change path as needed

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kayu_online');
		$this->load->library('session');
	}

	// public function index(){
	// 	$data['produk'] = $this->m_kayu_online->getProduk()->result();
	// 	// $this->load->view('v_user.php',$data);
	// 	$data['content'] = 'public/index';
	// 	$this->load->view('public/template/layout',$data);

	// }

	public function index()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['productDK'] = $this->m_kayu_online->getProductCategory(1);
		$data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['productPT'] = $this->m_kayu_online->getProductCategory(3);
		$data['productTG'] = $this->m_kayu_online->getProductCategory(4);
		$data['productKS'] = $this->m_kayu_online->getProductCategory(5);
		$data['productLP'] = $this->m_kayu_online->getProductCategory(6);
		// $data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['kayu_olahan'] = $this->m_kayu_online->getProdukByCategoryName('KO');
		$data['decking'] = $this->m_kayu_online->getProdukByCategoryName('DK');
		$data['content'] = 'public/index';
		$this->load->view('public/template/layout', $data);
	}

	public function user_login()
	{
		$data['content'] = 'login/login';
		$this->load->view('login/template/layout', $data);
	}

	public function user_registration()
	{
		$data['content'] = 'login/registration';
		$this->load->view('login/template/layout', $data);
	}

	public function user_forgot_pass()
	{
		$data['content'] = 'login/forgot';
		$this->load->view('login/template/layout', $data);
	}

	public function toko()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['produk'] = $this->m_kayu_online->getAllProduct();
		$data['content'] = 'public/toko';
		$this->load->view('public/template/layout', $data);
	}

	public function tentang_kami()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/tentang-kami';
		$this->load->view('public/template/layout', $data);
	}

	public function gudang_kami()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }

		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/gudang-kami';
		$this->load->view('public/template/layout', $data);
	}

	public function produk()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$param = $this->input->get('nama');
		$category = $this->input->get('kategori');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['productDK'] = $this->m_kayu_online->getProductCategory(1);
		$data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['productPT'] = $this->m_kayu_online->getProductCategory(3);
		$data['productTG'] = $this->m_kayu_online->getProductCategory(4);
		$data['productKS'] = $this->m_kayu_online->getProductCategory(5);
		$data['productLP'] = $this->m_kayu_online->getProductCategory(6);
		$data['tampil'] = $this->m_kayu_online->getProductByCategory($param, $category);
		$data['kayu_olahan'] = $this->m_kayu_online->getProdukByCategoryName('KO');
		$data['decking'] = $this->m_kayu_online->getProdukByCategoryName('DK');
		$data['produk'] = $this->m_kayu_online->getUkuran($param, $category);
		$data['maks'] = $this->m_kayu_online->getPriceMax($param, $category);
		$data['min'] = $this->m_kayu_online->getPriceMin($param, $category);
		$data['thumbnail'] = $this->m_kayu_online->getThumbnail($category, $param);

		// print_r(json_encode($data['produk']));
		// exit();

		$data['content'] = 'public/produk';
		$this->load->view('public/template/layout', $data);
	}

	public function faq()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }

		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['content'] = 'public/faq';
		$this->load->view('public/template/layout', $data);
	}

	public function kebijakan_privasi()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }

		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['content'] = 'public/kebijakan-privasi';
		$this->load->view('public/template/layout', $data);
	}

	public function layanan_pelanggan()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['content'] = 'public/layanan-pelanggan';
		$this->load->view('public/template/layout', $data);
	}

	public function wishlist()
	{
		$id_pemesan = $this->session->userdata('idUser');
		// print_r($id_pemesan);
		// exit();
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		// $data['countWishlist'] = $this->m_kayu_online->getCountWishlist($this->session->userdata('idUser'));
		$data['total_biaya'] = $this->m_kayu_online->get_total_biaya($id_pemesan);
		$data['order'] = $this->m_kayu_online->getOrders($id_pemesan)->result_array();
		$data['content'] = 'public/wishlist';
		$this->load->view('public/template/layout', $data);
	}

	public function checkout()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['reservasi'] = $this->m_kayu_online->lihatReservasi($id_pemesan);
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['total_biaya'] = $this->m_kayu_online->get_total_biaya($id_pemesan);
		// $data['total_biaya']=$this->m_kayu_online->get_total_biaya_perproduct($id_pemesan);
		$data['order'] = $this->m_kayu_online->getOrders($id_pemesan)->result_array();
		$data['content'] = 'public/checkout';
		$this->load->view('public/template/layout', $data);
	}

	public function order_complete()
	{
		$id_pemesan = $this->session->userdata('idUser');
		// print_r($id_pemesan);
		// exit();
		$data['reservasi'] = $this->m_kayu_online->lihatReservasi($id_pemesan);
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['total_biaya'] = $this->m_kayu_online->get_total_biaya($id_pemesan);
		$data['order'] = $this->m_kayu_online->getOrders($id_pemesan)->result_array();
		$data['content'] = 'public/order-complete';
		$this->load->view('public/template/layout', $data);
	}

	public function join()
	{
		$data['join2'] = $this->m_kayu_online->duatable();
		$data['content'] = 'public/coba-data';
		$this->load->view('public/template/layout', $data);
	}

	public function kayu_olahan()
	{
		$data['produk_category'] = $this->m_kayu_online->getProdukByCategoryName();
		// echo "<pre>";
		//       print_r($data['produk_category']);
		//       echo "</pre>";
		//       die();
		$data['content'] = 'public/coba-data';
		$this->load->view('public/template/layout', $data);
	}

	public function proses_add_user()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		// echo "<pre>";
		// print_r($data['allNotif']);
		// echo "</pre>";
		// die();
		$user_reg = ($data['allNotif'][0]['admin_reg']);
		// die();
		if ($this->input->post('jenis') != 'reg') {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$namaPengguna = $this->input->post('nama-pengguna');
			$sandi = $this->input->post('sandi');
			$sandi2 = $this->input->post('sandi-2');
			$hp = $this->input->post('hp');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'username' => $namaPengguna,
				'password' =>  $this->dataencryption->enc_dec("encrypt", $sandi),
				'no_hp' => $hp,
				'role' => 'user'
			);


			$cek_user = $this->m_kayu_online->cek_user($namaPengguna);
			if ($cek_user > 0) {
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
				redirect(base_url("user-registration"));
			} else {
				if ($sandi === $sandi2) {
					$this->m_kayu_online->input_data_admin($data, 'users');
					$this->session->set_flashdata('msg', array('class' => 'info', 'message' => 'Daftar User Berhasil !'));
					redirect(base_url("user-registration"));
				} else {
					$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
					redirect(base_url("user-registration"));
				}
			}
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$namaPengguna = $this->input->post('nama-pengguna');
			$sandi = $this->input->post('sandi');
			$sandi2 = $this->input->post('sandi-2');
			$hp = $this->input->post('hp');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'username' => $namaPengguna,
				'password' => $sandi,
				'no_hp' => $hp,
				'role' => 'admin',
				'status' => 'disactive'
			);

			if ($cek_user > 0) {
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
				redirect(base_url("login"));
			} else {
				if ($sandi === $sandi2) {
					$this->m_kayu_online->update_Notifikasi($admin_reg, 'tambah');
					$cek_user = $this->m_kayu_online->cek_admin($namaPengguna);
					$this->m_kayu_online->input_data_admin($data, 'users');
					$this->session->set_flashdata('msg', array('class' => 'info', 'message' => 'Daftar Admin Berhasil, Sedang Menunggu di Setujui !'));
					redirect(base_url("login"));
				} else {
					$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
					redirect(base_url("login"));
				}
			}
		}
	}

	function aksi_login()
	{
		$username = $this->input->post('userInput');
		$password = $this->input->post('password');
		// echo $username;
		// echo $password;
		$where = array(
			'username' => $username,
			'password' => $this->dataencryption->enc_dec("encrypt", $password),
			'role' => 'user'
		);
		$cek = $this->m_kayu_online->cek_login("users", $where)->num_rows();
		$getUser = $this->m_kayu_online->getUserData("users", $where)->result_array();

		foreach ($getUser as $key) :
			$idUser = $key['id'];
			$namaUser = $key['nama'];
			$no_hp = $key['no_hp'];
			$email = $key['email'];
		endforeach;

		if ($cek > 0) {
			$data_session = array(
				'idUser' => $idUser,
				'namaUser' => $namaUser,
				'no_hp' => $no_hp,
				'email' => $email,
				'status' => "login",
				'role' => 'user',
				'logged_in' => TRUE,
				'provider' => 'app'
			);
			// session_start();

			$this->session->set_userdata($data_session);

			redirect(base_url());
		} else {
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Login Gagal, Silahkan Coba Lagi'));
			redirect(base_url("user-login"));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('home/user_login'));
	}

	public function forgotPassword()
	{
		$email = $this->input->post('email');
		$user = $this->db->get_where('users', ['email' => $email, 'role' => 'user'])->row_array();
		if ($user) {
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => date('Y-m-d')
			];

			$this->db->insert('user_token', $user_token);
			$this->_sendEmail($token, 'forgot');

			$this->session->set_flashdata('msg', array('class' => 'info', 'message' => 'Mohon Periksa Email Anda Untuk Mereset Password'));
			redirect(base_url("forgot"));
		} else {
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Email Tidak Terdaftar, Silahkan Periksa Kembali'));
			redirect(base_url("forgot"));
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'gianzolla9@gmail.com',
			'smtp_pass' => 'Pesat.muda9',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);

		// $this->email->initialize($config);
		$this->email->from('gianzolla9@gmail.com', 'Web Developer Kayu Online');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik Link Berikut untuk Aktivasi Akun Anda : <a href="' . base_url() . 'home/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');
		} elseif ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Klik Link Berikut untuk Reset Password Anda : <a href="' . base_url() . 'home/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset</a>');
		}

		if ($this->email->send()) {
			return TRUE;
		} else {
			echo $this->email->print_debugger();
			die();
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$user = $this->db->get_where('users', ['email' => $email, 'role' => 'user'])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Reset Password Gagal, Token Salah, Silahkan periksa Kembali'));
				redirect(base_url("home/user_login"));
			}
		} else {
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Reset Password Gagal, Email yang di tuju tidak Tersedia'));
			redirect(base_url("home/user_login"));
		}
	}

	public function changePassword()
	{
		$data['content'] = 'login/change-password';
		$this->load->view('login/template/layout', $data);
	}

	public function prossesChangePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect(base_url("home/user_login"));
		}

		$password = $this->dataencryption->enc_dec("encrypt", $this->input->post('sandi'));
		// $password = $this->input->post('sandi');
		$email = $this->session->userdata('reset_email');

		$this->db->set('password', $password);
		$this->db->where('email', $email);
		$this->db->update('users');
		$this->session->unset_userdata('reset_email');

		$this->session->set_flashdata('msg', array('class' => 'info', 'message' => 'Password Berhasil di ganti, silahkan Login'));
		redirect(base_url("home/user_login"));
	}

	public function prosesPemesanan()
	{
		error_reporting(0);
		$sku = $this->input->post('sku');
		$option_sizes = $this->input->post('option_sizes');
		$pecah = explode("+", $option_sizes);
		$price = $pecah[0];
		$size = $pecah[3];
		$jumlah = $this->input->post('quant[1]');
		$nama_produk = $this->input->post('nama_produk');
		$foto = $this->input->post('foto');
		$total = ($jumlah * $price);
		$id = $this->input->post('id');
		$product_size_id = $this->input->post('product_size_id');

		$data = array(
			'id_pemesan' => $this->session->userdata('idUser'),
			'sku_product' => $sku,
			'nama_product' => $nama_produk,
			'ukuran' => $size,
			'gambar_product' =>  $foto,
			'id_product' => $id,
			'product_size_id' => $product_size_id,
			'jumlah' => $jumlah,
			'harga' => $price,
			'total' => $total,
			'status' => 'pesan',
			'tanggal' => date('Y-m-d H:i:s')
		);

		$this->m_kayu_online->input_data_orders($data, 'orders');
		redirect(base_url("wishlist"));
	}

	public function delete_order()
	{
		// $this->dataencryption->enc_dec("decrypt", $this->uri->segment('2'));
		$id = $this->uri->segment('3');
		$this->m_kayu_online->hapus_order($id);
		// $this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Data Order Berhasil !'));
		redirect(base_url("wishlist"));
	}

	public function reservasi()
	{
		$id = $this->dataencryption->enc_dec("decrypt", $this->uri->segment('3'));
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('tempat');
		$kode_pos = $this->input->post('pastcode');
		$kota = $this->input->post('kota');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$note = $this->input->post('note');
		$bank = $this->input->post('bank');

		$data = array(
			'id_pemesan' => $id,
			'nama_pemesan' => $nama,
			'alamat_pemesan' => $alamat,
			'kode_pos' => $kode_pos,
			'kota' =>  $kota,
			'kontak' => $hp,
			'email' => $email,
			'note' => $note,
			'bank' => $bank,
			'status' => 'proses_3'
		);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die;

		$this->m_kayu_online->input_data_reservasi($data, 'reservasi');
		redirect(base_url("order-complete"));
	}

	public function upload_trf()
	{
		$id = $this->dataencryption->enc_dec("decrypt", $this->uri->segment('3'));
		$data['allNotif'] = $this->m_kayu_online->getAllNotif(0);
		foreach ($data['allNotif']->result() as $key) {
			$bukti_transfer = $key->bukti_transfer;
		}
		$id_pemesan = $this->dataencryption->enc_dec("encrypt", $this->session->userdata('idUser'));
		$result = $this->m_kayu_online->upload_trf($id, $id_pemesan);
		if ($result['bukti_transaksi'] == 'Error') {
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message' => 'Upload Gagal, File Yang Anda Unggah Tidak Sesuai'));
			redirect(base_url() . 'order-complete');
		} else {
			$this->m_kayu_online->update_notif_tf($bukti_transfer);
			redirect(base_url() . 'end-transaction');
		}
	}

	public function end_transaction()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['total_biaya'] = $this->m_kayu_online->get_total_biaya($id_pemesan);
		$data['reservasi'] = $this->m_kayu_online->lihatReservasi($id_pemesan);
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['content'] = 'public/end-transaction';
		$this->load->view('public/template/layout', $data);
	}

	public function riwayat_pemesanan()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$data['total_biaya'] = $this->m_kayu_online->get_total_biaya($id_pemesan);
		$data['reservasi'] = $this->m_kayu_online->lihatReservasi($id_pemesan);
		$data['order'] = $this->m_kayu_online->getOrders($id_pemesan)->result_array();
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['content'] = 'public/riwayat_pemesanan';
		$this->load->view('public/template/layout', $data);
	}
	//region facebook login
	function fblogin()
	{

		if (!session_id()) {
			session_start();
		}
		$fb = new Facebook\Facebook([
			'app_id' => '289054935532810',
			'app_secret' => '390ef4f504303399e591420a823afa71',
			'default_graph_version' => 'v2.5',
		]);

		$helper = $fb->getRedirectLoginHelper();

		$permissions = ['email'];
		// For more permissions like user location etc you need to send your application for review

		$loginUrl = $helper->getLoginUrl(base_url() . 'home/fbcallback', $permissions);

		header("location: " . $loginUrl);
	}
	function fbcallback()
	{
		if (!session_id()) {
			session_start();
		}
		$fb = new Facebook\Facebook([
			'app_id' => '289054935532810',
			'app_secret' => '390ef4f504303399e591420a823afa71',
			'default_graph_version' => 'v2.5',
		]);
		$helper = $fb->getRedirectLoginHelper();
		try {
			$accessToken = $helper->getAccessToken();
		} catch (Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error  
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch (Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues  
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}

		try {
			// Get the Facebook\GraphNodes\GraphUser object for the current user.
			// If you provided a 'default_access_token', the '{access-token}' is optional.
			$response = $fb->get('/me?fields=id,name,email,first_name,last_name,birthday,location,gender,picture.width(300)', $accessToken);
			// print_r($response);
		} catch (Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'ERROR: Graph ' . $e->getMessage();
			exit;
		} catch (Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'ERROR: validation fails ' . $e->getMessage();
			exit;
		}
		// User Information Retrival begins................................................
		$me = $response->getGraphUser();
		$location = $me->getProperty('location');
		// echo "Full Name: " . $me->getProperty('name') . "<br>";
		// echo "First Name: " . $me->getProperty('first_name') . "<br>";
		// echo "Last Name: " . $me->getProperty('last_name') . "<br>";
		// echo "Gender: " . $me->getProperty('gender') . "<br>";
		// echo "Email: " . $me->getProperty('email') . "<br>";
		// echo "location: " . $location['name'] . "<br>";
		// echo "Birthday: " . $me->getProperty('birthday')->format('d/m/Y') . "<br>";
		// echo "Facebook ID: <a href='https://www.facebook.com/" . $me->getProperty('id') . "' target='_blank'>" . $me->getProperty('id') . "</a>" . "<br>";

		// echo "</br><img src='$name[url]'>";
		// echo $name['url'];
		// echo "</br><img src='//graph.facebook.com/$profileid/picture?type=large'> ";
		// echo "</br></br>Access Token : </br>" . $accessToken;
		$id = $me->getProperty('id');
		$provider = "facebook";
		$picture = $me->getPicture();


		$du = array();

		$data = array(
			'oauth_provider' => 'facebook',
			'oauth_uid' => $me->getProperty('id'),
			'first_name' => $me->getProperty('first_name'),
			'last_name' => $me->getProperty('last_name'),
			'email' => $me->getProperty('email'),
			'gender' => $me->getProperty('gender'),
			'picture' => $picture['url'],
			'link' => $me->getLink(),
			'created' => date("Y-m-d:h:i:sa"),
			'modified' => date("Y-m-d:h:i:sa")

		);
		$cek_user = $this->m_kayu_online->cek_user_oauth($id, $provider);
		if ($cek_user == 0) {
			$this->m_kayu_online->input_data_admin($data, 'fb_users');
		} else {
			$this->m_kayu_online->update_user_oauth($data, $id);
		}

		$data_session = array(
			'idUser' => $me->getProperty('id'),
			'namaUser' => $me->getProperty('name'),
			'no_hp' => '',
			'email' => $me->getProperty('email'),
			'status' => "login",
			'role' => 'user',
			'logged_in' => TRUE,
			'provider' => 'facebook'
		);
		// session_start();
		$this->session->set_userdata($data_session);
		redirect(base_url());
	}
	//endregion facebook login

	//region google login
	function glogin()
	{
		if (!session_id()) {
			session_start();
		}
		// Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
		$client_id = '666492292903-8pumaq5heurhh4h5qf991oep3s6k3pq6.apps.googleusercontent.com';
		$client_secret = 'GAayH-Znp8n887Woz90PwPap';
		$redirect_uri = base_url('home/gcallback');;

		//Create Client Request to access Google API
		$client = new Google_Client();
		$client->setApplicationName("Kayu Online");
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->addScope("email");
		$client->addScope("profile");

		//Send Client Request
		$objOAuthService = new Google_Service_Oauth2($client);

		$authUrl = $client->createAuthUrl();

		header('Location: ' . $authUrl);
	}
	function gcallback()
	{
		if (!session_id()) {
			session_start();
		}
		// Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
		$client_id = '666492292903-8pumaq5heurhh4h5qf991oep3s6k3pq6.apps.googleusercontent.com';
		$client_secret = 'GAayH-Znp8n887Woz90PwPap';
		$redirect_uri = base_url('home/gcallback');

		//Create Client Request to access Google API
		$client = new Google_Client();
		$client->setApplicationName("Kayu Online");
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->addScope("email");
		$client->addScope("profile");

		//Send Client Request
		$service = new Google_Service_Oauth2($client);


		$client->authenticate($_GET['code']);

		$_SESSION['access_token'] = $client->getAccessToken();
		// User information retrieval starts..............................

		$user = $service->userinfo->get(); //get user info 

		// echo "</br> User ID :" . $user->id;
		// // echo "</br> User ID :" . $user->first_name;
		// echo "</br> User Name :" . $user->name;
		// echo "</br> Gender :" . $user->gender;
		// echo "</br> User Email :" . $user->email;
		// echo "</br> User Link :" . $user->link;
		// echo "</br><img src='$user->picture' height='200' width='200' > ";


		$id = $user->id;
		$provider = "google";
		$data = array(
			'oauth_provider' => 'google',
			'oauth_uid' => $user->id,
			'first_name' => $user->name,
			'last_name' => $user->name,
			'email' => $user->email,
			'gender' => $user->gender,
			'picture' => $user->picture,
			'link' => $user->link,
			'created' => date("Y-m-d:h:i:sa"),
			'modified' => date("Y-m-d:h:i:sa")

		);
		$cek_user = $this->m_kayu_online->cek_user_oauth($id, $provider);
		if ($cek_user == 0) {
			$this->m_kayu_online->input_data_admin($data, 'fb_users');
		} else {
			$this->m_kayu_online->update_user_oauth($data, $id);
		}

		$data_session = array(
			'idUser' => $user->id,
			'namaUser' => $user->name,
			'no_hp' => '',
			'email' => $user->email,
			'status' => "login",
			'role' => 'user',
			'logged_in' => TRUE,
			'provider' => 'google'
		);
		// session_start();
		$this->session->set_userdata($data_session);
		// redirect(base_url());
		echo '<script>window.location.href="'.base_url().'";</script>'; 
	}
	//endregion google login

	//region profil
	function profil()
	{
		$id_pemesan = $this->session->userdata('idUser');
		$provider = $this->session->userdata('provider');
		if ($provider == "facebook" || $provider == "google") {
			$table = "fb_users";
			$where = array("oauth_uid" => $id_pemesan);
		} else {
			$table = "users";
			$where = array("id" => $id_pemesan);
		}
		$data['countWishlist'] = $this->m_kayu_online->getCountWishlist($id_pemesan);
		$data['users'] = $this->m_kayu_online->getUserLoggon($table, $where);
		$data['content'] = 'public/profil';
		$this->load->view('public/template/layout', $data);
	}
	//endregion profil

	//region update profil
	function update_profil()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
		);

		$this->session->set_userdata('namaUser', $this->input->post('nama'));
		$this->session->set_userdata('email', $this->input->post('email'));
		$this->session->set_userdata('no_hp', $this->input->post('no_hp'));


		$this->m_kayu_online->update_data_user($data, $this->session->userdata('idUser'));
		$this->session->set_flashdata('msg', array('class' => 'success', 'message' => 'Berhasil, Profil Anda telah terupdate'));
		redirect(base_url("profil"));
	}
	//endregion update profil
}
