<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuanhibah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pengajuan');
		$this->load->helper('url');

	}
	public function index()
	{
    $data['dok'] = $this->db->query("SELECT * FROM pengajuan WHERE Jenis_Pengajuan='Hibah'")->result();
    $data['page'] = 'operator/p_hibah/index';
		$this->load->view('operator/index',$data);
	}
	public function edit($id_subm)
	{
		$data['dok'] = $this->db->query("SELECT * FROM pengajuan WHERE id_subm=".$id_subm)->result();
		$data['page'] = 'operator/p_hibah/form-edit';
		$this->load->view('operator/index',$data);

	}
	public function update()
	{
		$id_subm = $this->input->post('id_subm');

		$where = array(
			'id_subm' => $id_subm
			);
		$NIK = $this->input->post('NIK');
		$Nama = $this->input->post('Nama');
		$pekerjaan = $this->input->post('job');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$nama_org = $this->input->post('nama_org');
		$no_registrasi = $this->input->post('no_registrasi');
		$alamat_kantor = $this->input->post('alamat_kantor');
		$bagian = $this->input->post('bagian');
		$Bidang = $this->input->post('Bidang');
		$jumlah_agt = $this->input->post('jumlah_agt');
		$nama_ketum = $this->input->post('nama_ketum');
		$nik_ketum = $this->input->post('nik_ketum');
		$nama_sek = $this->input->post('nama_sek');
		$nik_sek = $this->input->post('nik_sek');
		$nama_ben = $this->input->post('nama_ben');
		$nik_ben = $this->input->post('nik_ben');
		$status = $this->input->post('status');
		$Jenis_Pengajuan = $this->input->post('JP');
		$tanggal = date("m.d.Y");

		$data = array(
			'NIK' => $NIK,
			'Nama_lengkap' => $Nama,
			'Pekerjaan' => $pekerjaan,
			'Tempat_lahir' => $tempat_lahir,
			'Tanggal_lahir' => $tgl_lahir,
			'Alamat' => $alamat,
			'jabatan' =>$jabatan,
			'Nama_org' =>$nama_org,
			'No_REG' => $no_registrasi,
			'Jenis_Pengajuan' => $Jenis_Pengajuan,
			'Alamat_kantor' => $alamat_kantor,
			'Bagian' => $bagian,
			'Bidang' => $Bidang,
			'Anggota' => $jumlah_agt,
			'Nama_ket' => $nama_ketum,
			'Nik_ket' => $nik_ketum,
			'Nama_sek' => $nama_sek,
			'Nik_sek' => $nik_sek,
			'Nama_ben' => $nama_ben,
			'Nik_ben' => $nik_ben,
			'status' => $status,
			'tgl_acc' =>$tanggal

			);
			// var_dump($data);
		$this->m_pengajuan->update_data($where,$data,'pengajuan');
		redirect('pengajuanhibah/index');
	}
	public function download($id_subm)
	{
		// code...
		$data['dok'] = $this->db->query("SELECT * FROM pengajuan WHERE id_subm=".$id_subm)->result();
		// $data['page'] = 'operator/p_hibah/download';
		$this->load->view('operator/p_hibah/download',$data);
	}
	public function del($id_subm)
	{
		// code...
		$where = array('id_subm' => $id_subm);
		$this->m_pengajuan->hapus_data($where,'pengajuan');
		redirect('pengajuanhibah/index');
	}
}
