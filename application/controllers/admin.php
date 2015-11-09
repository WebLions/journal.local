<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['post'] = $this->home_model->index();
		$this->load->view('admin/home.php',$data);
	}

	public function add_post()
	{
		$title = trim($_POST['title']);
		$description = trim($_POST['description']);
		if( !empty($title) && !empty($description) ){
			if( $this->admin_model->add_post($title, $description) ){
				header('Location: /admin/index');
			}
		}
	}

	public function delete_post()
	{
		$id = (int) $_GET['id_post'];
		if( !empty($title) && !empty($description) ){
			if( $this->admin_model->delete_post($id) ){
				header('Location: /admin/index');
			}
		}
	}

}