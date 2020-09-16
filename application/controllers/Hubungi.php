<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_adbansos');
		$this->load->helper('url');

	}
	public function index()
	{
    $data['dok'] = $this->db->query("SELECT * FROM konten_bansos WHERE judul='Hubungi'")->result();
    $data['page'] = 'operator/hubungi/index';
		$this->load->view('operator/index',$data);
	}
	public function update_umum()
	{
		$id_konten = $this->input->post('id_konten');
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');
		$status = $this->input->post('status');
		$pilihan = $this->input->post('segment');

		$data = array('judul'=>$judul,'konten'=>$konten,'status'=>$status);
		$where = array('id_konten' => $id_konten);
		$this->m_adbansos->update_data($where,$data,'konten_bansos');

			redirect('hubungi/index');
	}

}
