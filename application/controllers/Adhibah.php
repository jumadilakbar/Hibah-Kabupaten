<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adhibah extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_adhibah');
		$this->load->helper('url');

	}
	public function umum()
	{
    $data['dok'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Informasi Umum'")->result();
    $data['page'] = 'operator/adhibah/umum';
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
		$this->m_adhibah->update_data($where,$data,'konten_hibah');
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// echo $pilihan;
		if ($pilihan=='umum') {
			// code...
			redirect('adhibah/umum');
		}
		else if ($pilihan=='persyaratan') {

			redirect('adhibah/persyaratan');
		}
		else if ($pilihan=='prosedur') {

			redirect('adhibah/prosedur');
		}

	}
  public function persyaratan()
	{
		$data['dok'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Persyaratan'")->result();
    $data['page'] = 'operator/adhibah/persyaratan';
		$this->load->view('operator/index',$data);
	}
  public function prosedur()
	{
		$data['dok'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Prosedur'")->result();
    $data['page'] = 'operator/adhibah/prosedur';
		$this->load->view('operator/index',$data);
	}
}
