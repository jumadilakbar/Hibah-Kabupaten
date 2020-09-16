<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_hibah');

	}

	public function index(){
		$data['judul'] = "Halaman depan";
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$chrome = '/Chrome/';
		$firefox = '/Firefox/';
		$ie = '/IE/';
		if (preg_match($chrome, $browser))
		    $data = "Chrome/Opera";
		if (preg_match($firefox, $browser))
		    $data = "Firefox";
		if (preg_match($ie, $browser))
		    $data = "IE";

		// untuk mengambil informasi dari pengunjung
		$ipaddress = $_SERVER['REMOTE_ADDR']."";
		$browser = $data;
		$tanggal = date("m.d.Y");
		$kunjungan = 1;

		$insert = array('tanggal' => $tanggal,
										'kunjungan' => $kunjungan,
										'ip_address' => $ipaddress,
										'browser' => $browser
											);
		$this->m_hibah->input_data($insert,'kunjungan');
		// echo $ipaddress;
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}

	public function about(){
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}
	public function wizform(){
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('wizform',$data);
		$this->load->view('v_footer',$data);
	}
}
