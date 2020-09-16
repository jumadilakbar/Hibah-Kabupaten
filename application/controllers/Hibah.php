<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hibah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_hibah');
		$this->load->helper('url');
	}

	public function index(){
		$data['judul'] = "Halaman Hibah";
		$data['dok'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Informasi Umum'")->result();
		$data['dok1'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Persyaratan'")->result();
		$data['dok2'] = $this->db->query("SELECT * FROM konten_hibah WHERE judul='Prosedur'")->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_hibah',$data);
		$this->load->view('v_footer',$data);
	}

	public function cari()
	{
		// code...
		$nik = $this->input->post('nik');
		$data['dok'] = $this->db->query("SELECT * FROM pengajuan WHERE NIK='$nik' AND Jenis_Pengajuan='Hibah'")->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_cari_bansos',$data);
		$this->load->view('v_footer',$data);
	}
	public function daftar_hibah(){
		$data['judul'] = "Halaman group";
		$this->load->view('v_header',$data);
		$this->load->view('v_daftar_hibah',$data);
		$this->load->view('v_footer',$data);
	}
	public function add_proses()
	{
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
		$Jenis_Pengajuan = 'Hibah';
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
			);
		$this->m_hibah->input_data($data,'pengajuan');
		redirect('bansos/index');
			// var_dump($data);
	}
	public function cek_proposal(){
		$data['judul'] = "Halaman Cek Proposal";
		$this->load->view('v_header',$data);
		$this->load->view('v_cek_proposal_hibah',$data);
		$this->load->view('v_footer',$data);
	}
}
