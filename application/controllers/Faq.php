<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['judul'] = "Halaman faq";
		$data['dok'] = $this->db->query("SELECT * FROM konten_bansos WHERE judul='Hubungi'")->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_faq',$data);
		$this->load->view('v_footer',$data);
	}


}