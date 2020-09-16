<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bansosindividu extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_bansosindividu');
		$this->load->helper('url');
	}
	public function index()
	{
    $data['user'] = $this->db->query("SELECT * FROM pengajuan_personal")->result();
    $data['page'] = 'operator/individu/index';
		$this->load->view('operator/index',$data);
	}
	public function edit($id)
	{
		$data['dok'] = $this->db->query("SELECT * FROM pengajuan_personal WHERE id=".$id)->result();
		$data['page'] = 'operator/individu/form-edit';
		$this->load->view('operator/index',$data);

	}
	public function update()
	{
		$id = $this->input->post('id');

		$where = array(
			'id' => $id
			);
		$NIK = $this->input->post('NIK');
		$Nama = $this->input->post('Nama');
		$pekerjaan = $this->input->post('job');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$bantuan = $this->input->post('bantuan');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$data = array(
			'NIK' => $NIK,
			'Nama_lengkap' => $Nama,
			'Pekerjaan' => $pekerjaan,
			'Tempat_lahir' => $tempat_lahir,
			'Tanggal_lahir' => $tgl_lahir,
			'Bantuan' =>$bantuan,
			'Alamat' => $alamat,
			'status' => $status
		);
		$this->m_bansosindividu->update_data($where,$data,'pengajuan_personal');
		redirect('bansosindividu/index');
	}
	public function download($id)
	{
		// code...
		$data['dok'] = $this->db->query("SELECT * FROM pengajuan_personal WHERE id=".$id)->result();
		// $data['page'] = 'operator/p_hibah/download';
		$this->load->view('operator/individu/download',$data);
	}
	public function del($id)
	{
		// code...
		$where = array('id' => $id);
		$this->m_pengajuan->hapus_data($where,'pengajuan_personal');
		redirect('pengajuanbansos/index');
	}
}
