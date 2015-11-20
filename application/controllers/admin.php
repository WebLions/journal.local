<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('admin_model');
	}
	//главная админки
	public function index()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/home.php',$data);
		$this->load->view('admin/footer.php',$data);
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
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_post($id) ){
				header('Location: /admin/index');
			}
		}
	}
	public function edit_post()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) && isset($_POST['title']) && isset($_POST['description']) ){
			if( $this->admin_model->edit_post($id) ){
				header('Location: /admin/index');
			}
		}elseif (!empty($id) ) {
			$data['post'] = $this->admin_model->view_post();
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_post.php',$data);
			$this->load->view('admin/footer.php',$data);
		}	
	}
	//преподователи
	public function teachers()
	{
		$data['teachers'] = $this->admin_model->view_teacher();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/teachers.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_teacher()
	{
		$surname = trim($_POST['surname']);
		$name = trim($_POST['name']);
		$subname = trim($_POST['subname']);
		$login = trim($_POST['login']);
		if(trim($_POST['password']) == trim($_POST['repassword'])){
		$password = trim($_POST['password']);
			if( !empty($surname) && !empty($login) ){
				if( $this->admin_model->add_teacher($surname, $name, $subname, $login, $password) ){
					header('Location: /admin/teachers');
				}
			}
		}
	}
	public function delete_teacher()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_teacher($id) ){
				header('Location: /admin/teachers');
			}
		}
	}
	public function edit_teacher()
	{
		$id = (int) $_GET['id'];
		$surname = isset($_POST['surname']) ? $_POST['surname'] : ''; 
		$name = isset($_POST['name']) ? $_POST['name'] : ''; 
		$subname = isset($_POST['subname']) ? $_POST['subname'] : ''; 
		$login = isset($_POST['login']) ? $_POST['login'] : ''; 
		$password = isset($_POST['password']) ? $_POST['password'] : ''; 
		if( !empty($id) && !empty($surname)){
			if( $this->admin_model->edit_teacher($id, $surname, $name, $subname, $login, $password) ){
				header('Location: /admin/teachers');
			}
		}elseif (!empty($id)) {
			$data['teacher'] = $this->admin_model->view_teacher($id);
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_teacher.php',$data);
			$this->load->view('admin/footer.php',$data);
		}
	}
	//предметы
	public function subjects()
	{
		$data['subjects'] = $this->admin_model->view_subject();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/subjects.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_subject()
	{
		$name = trim($_POST['name']);
		if( !empty($name) ){
			if( $this->admin_model->add_subject($name) ){
				header('Location: /admin/subjects');
			}
		}
	}
	public function delete_subject()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_subject($id) ){
				header('Location: /admin/subjects');
			}
		}
	}
	public function edit_subject()
	{
		$id = (int) $_GET['id'];
		$name = isset($_POST['name']) ? $_POST['name'] : ''; 
		if( !empty($id) && !empty($name)){
			if( $this->admin_model->edit_subject($id, $name) ){
				header('Location: /admin/subjects');
			}
		}elseif (!empty($id)) {
			$data['subject'] = $this->admin_model->view_subject($id);
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_subject.php',$data);
			$this->load->view('admin/footer.php',$data);
		}
	}
	//пользователи
	public function users()
	{
		$data['users'] = $this->admin_model->view_user();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/users.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_user()
	{
		$surname = trim($_POST['surname']);
		$name = trim($_POST['name']);
		$subname = trim($_POST['subname']);
		$login = trim($_POST['login']);
		$access = trim($_POST['access']);
		if(trim($_POST['password']) == trim($_POST['repassword'])){
		$password = trim($_POST['password']);
			if( !empty($surname) && !empty($name) ){
				if( $this->admin_model->add_user($surname, $name, $subname, $login, $password, $access) ){
					header('Location: /admin/users');
				}
			}
		}
	}

	public function delete_user()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_user($id) ){
				header('Location: /admin/users');
			}
		}
	}

	public function edit_user()
	{
		$id = (int) $_GET['id'];
		$surname = isset($_POST['surname']) ? $_POST['surname'] : ''; 
		$name = isset($_POST['name']) ? $_POST['name'] : ''; 
		$subname = isset($_POST['subname']) ? $_POST['subname'] : ''; 
		$login = isset($_POST['login']) ? $_POST['login'] : ''; 
		$password = isset($_POST['password']) ? $_POST['password'] : '';  
		$access = isset($_POST['access']) ? $_POST['access'] : ''; 
		if( !empty($id) && !empty($name)){
			if( $this->admin_model->edit_user($id, $surname, $name, $subname, $login, $password, $access) ){
				header('Location: /admin/users');
			}
		}elseif (!empty($id)) {
			$data['user'] = $this->admin_model->view_user($id);
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_user.php',$data);
			$this->load->view('admin/footer.php',$data);
		}
	}
	//учебный план
	public function plans()
	{
		$data['plans'] = $this->admin_model->view_plan();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/plans.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_plan()
	{
		$name = trim($_POST['name']);
		$now = (trim($_POST['now'])=="on") ? '1' : '0';
		$first = trim($_POST['first']);
		$second = trim($_POST['second']);

		if( !empty($name) ){
			if( $this->admin_model->add_plan($name, $now, $first, $second) ){
				header('Location: /admin/plans');
			}
		}
	}
	public function delete_plan()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_plan($id) ){
				header('Location: /admin/plans');
			}
		}
	}
	public function edit_plan()
	{
		$id = (int) $_GET['id'];
		$name = isset($_POST['name']) ? $_POST['name'] : ''; 
		$now = isset($_POST['now']) ? $_POST['now'] : ''; 
		$first = isset($_POST['first']) ? $_POST['first'] : ''; 
		$second = isset($_POST['second']) ? $_POST['second'] : ''; 

		if( !empty($id) && !empty($name)){
			if( $this->admin_model->edit_plan($id, $name, $now, $first, $second) ){
				header('Location: /admin/plans');
			}
		}elseif (!empty($id)) {
			$data['plan'] = $this->admin_model->view_plan($id);
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_plan.php',$data);
			$this->load->view('admin/footer.php',$data);
		}
	}
	public function term($id)
	{
		$data['terms'] = $this->admin_model->view_term($id);
		$data['id_term'] = $id;
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/term.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_term()
	{
		$name = trim($_POST['name']);
		$type = trim($_POST['type']);
		$first = trim($_POST['first']);
		$second = trim($_POST['second']);
		$id = trim($_POST['plan']);

		if( !empty($name) ){
			if( $this->admin_model->add_term($id, $name, $type, $first, $second) ){
				header('Location: /admin/term/'.$id);
			}
		}
	}
	public function delete_term()
	{
		$id = (int) $_GET['id'];
		$plan = (int) $_GET['plan'];
		if( !empty($id) ){
			if( $this->admin_model->delete_term($id) ){
				header('Location: /admin/term/'.$plan);
			}
		}
	}
	public function edit_term()
	{
		$id = (int) $_GET['id'];
		$plan = isset($_GET['plan']) ? $_GET['plan'] : ''; 

		$name = isset($_POST['name']) ? $_POST['name'] : ''; 
		$type = isset($_POST['type']) ? $_POST['type'] : ''; 
		$first = isset($_POST['first']) ? $_POST['first'] : ''; 
		$second = isset($_POST['second']) ? $_POST['second'] : ''; 

		if( !empty($id) && !empty($name) ){
			if( $this->admin_model->edit_term($id, $name, $type, $first, $second) ){
				header('Location: /admin/term/'.$plan);
			}
		}elseif (!empty($id)) {
			$data['term'] = $this->admin_model->view_term($plan, $id);
			$data['id_term'] = $plan;
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_term.php',$data);
			$this->load->view('admin/footer.php',$data);
		}
	}


	//работа с групамми
	public function groups()
	{
		$data['groups'] = $this->admin_model->view_group();
		$data['teachers'] = $this->admin_model->get_teachers();
		$data['plans'] = $this->admin_model->get_plans();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/groups.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function add_group()
	{
		$id_teacher = trim($_POST['id_teacher']);
		$number = trim($_POST['number']);
		$id_plan = trim($_POST['id_plan']);
		if( !empty($number) && !empty($id_plan) ){
			if( $this->admin_model->add_group($id_teacher, $number, $id_plan) ){
				header('Location: /admin/groups');
			}
		}
	}
	public function delete_group()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_group($id) ){
				header('Location: /admin/groups');
			}
		}
	}
	public function edit_group()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) && isset($_POST['number']) && isset($_POST['number'])){
			if( $this->admin_model->edit_group($id) ){
				header('Location: /admin/groups');
			}
		}elseif (!empty($id)) {
			$data['group'] = $this->admin_model->view_group();
			$this->load->view('admin/header.php',$data);
			$this->load->view('admin/edit_group.php',$data);
			$this->load->view('admin/footer.php',$data);
		}	
	}

	public function services()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/services.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function logout()
	{
		header('Location: /');
	}
	

	//group
	//student
	/*public function users()
	{
		$data['student'] = $this->admin_model->view_student();
		$this->load->view('users.php', $data);
	}*/


}