<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);
		if( !empty($login) && !empty($password) ){
			$result = $this->user_model->login($login, $password);
			if($result){
				header('Location: /admin');
			}else{
				header('Location: /');
			}
		}else{
			header('Location: /');
		}
	}

}
