<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Produk extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kayu_online');
		date_default_timezone_set("Asia/Jakarta");
	}
 
	function produk(){
		$data['produk'] = $this->m_kayu_online->produk()->result();
		$data['product'] = $this->m_kayu_online->product()->result();
		$data['content'] = 'public/index';
		$this->load->view('public/template/layout',$data);

	}
 
}