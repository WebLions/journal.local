<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index(){

		$result = $this->db->get("posts");
		return $result->result_array();
	}
	public function get_update(){
		$this->db->group_by("id"); 
		$result = $this->db->get("update_site");
		$return = $result->result_array();
		return $return[0]['date'];
	}

}