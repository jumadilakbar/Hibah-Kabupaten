<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');

	}

	function index(){
		$this->load->model('m_login');

		$username = $this->session->userdata('username');
		if($username==""){
				$this->load->view('v_header');
				$this->load->view('v_login');
				$this->load->view('v_footer');
		}
		else{
  			 // redirect('login/admin');
			redirect(base_url("index.php/operator"));
 		}

	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();

		// var_dump($cek);
		if($cek > 0){
			// $temp= $this->db->query("SELECT * FROM user WHERE username=".$username)->result();
			$temp = $this->db->query("SELECT * FROM user WHERE username='$username'")->result();

			foreach($temp as $value) {
				$level = $value->level;
			}
			// echo $level;
			$data_session = array(
				'level' =>$level,
				'username' => $username,
				'status' => "login"
				);
				// var_dump($temp);
			$this->session->set_userdata($data_session);
			$this->session->set_userdata(array('username'=>$username));
			$this->session->set_userdata(array('level'=>$level));

			redirect(base_url("index.php/operator"));
			// echo "berhasil";

		}else{
			// echo "Username dan password salah !";
			$a['val'] = 'gagal';
			// $this->load->view('login',$a);
			redirect(base_url("index.php/login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
