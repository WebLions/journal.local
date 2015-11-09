<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function login($login, $password)
	{
		$password = md5(md5($password)."solt");
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('login', $login);
		$query = $this->db->get();
		$pass = $query->result_array();
		if($pass[0]['password']==$password){
			return true;
		}else{
			return false;
		}

	}
}