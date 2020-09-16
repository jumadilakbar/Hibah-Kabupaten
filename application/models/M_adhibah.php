<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_adhibah extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
