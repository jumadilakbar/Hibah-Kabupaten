<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_management');
		$this->load->helper('url');

	}
	public function index()
	{
    $data['user'] = $this->db->query("SELECT * FROM user")->result();
    $data['page'] = 'operator/management/index';
		$this->load->view('operator/index',$data);
	}
	public function add()
	{
		$data['page'] = 'operator/management/form-add';
		$this->load->view('operator/index',$data);
	}
	public function add_proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'email'=>$email,
			'level'=>$level
			);
		$this->m_management->input_data($data,'user');
		redirect('management/index');
	}
	public function del($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_management->hapus_data($where,'user');
		redirect('management/index');
	}
	public function edit($id_user)
	{
		// echo $id_user;
		$data['dok'] = $this->db->query("SELECT * FROM user WHERE id_user=".$id_user)->result();
		$data['page'] = 'operator/management/form-edit';
		$this->load->view('operator/index',$data);
	}
	public function update()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'email'=>$email,
			'level'=>$level
			);

		$where = array(
			'id_user' => $id_user
			);
		$this->m_management->update_data($where,$data,'user');
		redirect('management/index');
	}
}
