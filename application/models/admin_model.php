<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function home()
	{
		# code...
	}
	public function add_post($title, $description)
	{
		$data = array(
			   'title' => $title ,
			   'description' => $description ,
			   'date' => date("Y-m-d")
			);
		$this->db->insert('posts', $data); 
		return true;
	}

	public function delete_post($id)
	{
		$this->db->delete('posts', array('id' => $id));  
		return true;
	}

}