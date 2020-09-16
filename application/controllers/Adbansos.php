<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adbansos extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_adbansos');
		$this->load->helper('url');

	}
	public function umum()
	{
    $data['dok'] = $this->db->query("SELECT * FROM konten_bansos WHERE judul='Informasi Umum'")->result();
    $data['page'] = 'operator/adbansos/umum';
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
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// echo $pilihan;
		if ($pilihan=='umum') {
			// code...
			redirect('adbansos/umum');
		}
		else if ($pilihan=='persyaratan') {

			redirect('adbansos/persyaratan');
		}
		else if ($pilihan=='prosedur') {

			redirect('adbansos/prosedur');
		}

	}
  public function persyaratan()
	{
		$data['dok'] = $this->db->query("SELECT * FROM konten_bansos WHERE judul='Persyaratan'")->result();
    $data['page'] = 'operator/adbansos/persyaratan';
		$this->load->view('operator/index',$data);
	}
  public function prosedur()
	{
		$data['dok'] = $this->db->query("SELECT * FROM konten_bansos WHERE judul='Prosedur'")->result();
    $data['page'] = 'operator/adbansos/prosedur';
		$this->load->view('operator/index',$data);
	}
}
