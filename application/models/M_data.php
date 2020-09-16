<?php 
class M_data extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
	function tampil_data(){
		return $this->db->get('user');
	}
}