<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct(){
		parent::__construct();
		// $this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}

	}

	public function index(){
	 $username = $this->session->userdata('username');
	   if($username==""){
	    // redirect('login');
	    redirect(base_url("index.php/login"));
	   }
	   else{
    	$data['judul'] = "Halaman dashboard";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer',$data);
   		}

	}
	public function master_data(){

		$data['user'] = $this->db->query("SELECT * FROM user")->result();
		// $a['data']		= $this->db->query("SELECT * FROM kategori WHERE nama_kategori LIKE '%$cari%' ORDER BY nama_kategori DESC")->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/master_data',$data);
		$this->load->view('admin/footer',$data);
		// var_dump($data);
	}
	public function pengajuan(){
		$temp['data'] = $this->db->query("SELECT * FROM pengajuan")->result();
		$sleg = $this->uri->segment('3');
		if($sleg=='detail'){
			// $this->load->view('admin/header');
			$this->load->view('admin/detail_pengajuan',$temp);
			// $this->load->view('admin/footer');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/pengajuan',$temp);
		$this->load->view('admin/footer');
		// var_dump($data);
	}
	public function laporan(){
		$data['judul'] = "Halaman dashboard";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/laporan');
		$this->load->view('admin/footer',$data);
	}



}
