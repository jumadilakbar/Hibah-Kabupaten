<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}

	}
	public function index()
	{
		$username = $this->session->userdata('username');
 	   if($username==""){
 	    // redirect('login');
 	    redirect(base_url("index.php/login"));
 	  }
 	   else{

			$this->db->where('Jenis_Pengajuan', 'Hibah');
			$data['jumlah_hibah'] = $this->db->count_all_results('pengajuan');

			$this->db->where('Jenis_Pengajuan', 'Bansos');
			$data['jumlah_bansos'] = $this->db->count_all_results('pengajuan');

			$data['jumlah_user'] = $this->db->count_all_results('user');

			$data['jumlah_bansosindividu'] = $this->db->count_all_results('pengajuan_personal');
			// $data['dok'] =
			$kunjungan = $this->db->query("SELECT * FROM kunjungan")->result();
			// $grafik = [];
			$jan = 0;		$feb = 0;		$mar = 0;		$apr = 0;
			$mei = 0;		$jun = 0; 	$jul = 0;		$ags = 0;
			$sep = 0;		$okt = 0;		$nov = 0;		$des = 0;
			foreach ($kunjungan as $value) {
				$pisah = explode(".",$value->tanggal);
				if($pisah[0]=='01'){
					$jan = $jan +$value->kunjungan;
				}
				else if($pisah[0]=='02'){
					$feb = $feb +$value->kunjungan;
				}
				else if($pisah[0]=='03'){
					$mar = $mar +$value->kunjungan;
				}
				else if($pisah[0]=='04'){
					$apr = $apr +$value->kunjungan;
				}
				else if($pisah[0]=='05'){
					$mei = $mei +$value->kunjungan;
				}
				else if($pisah[0]=='06'){
					$jun = $jun +$value->kunjungan;
				}
				else if($pisah[0]=='07'){
					$jul = $jul +$value->kunjungan;
				}
				else if($pisah[0]=='08'){
					$ags = $ags +$value->kunjungan;
				}
				else if($pisah[0]=='09'){
					$sep = $sep +$value->kunjungan;
				}
				else if($pisah[0]=='10'){
					$okt = $okt +$value->kunjungan;
				}
				else if($pisah[0]=='02'){
					$nov = $nov +$value->kunjungan;
				}
				else if($pisah[0]=='02'){
					$des = $des +$value->kunjungan;
				}
			}
			$data['grafik'] = array($jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des);
			// var_dump($data['grafik']);
			// $data['leve'] = $this->db->query("SELECT * FROM user WHERE username='$username'")->result();
			// $data['nama'] = $username;
		  $data['page'] = 'operator/konten';
			$this->load->view('operator/index',$data);
		}
	}
}
