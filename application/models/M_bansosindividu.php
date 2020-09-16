<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_bansosindividu extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    function input_data($data,$table){
		    $this->db->insert($table,$data);
	   }

    function hapus_data($where,$table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }
    function update_data($where,$data,$table){
		    $this->db->where($where);
		    $this->db->update($table,$data);
	   }

}
