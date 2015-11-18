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
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/home.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function groups()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/groups.php',$data);
		$this->load->view('admin/footer.php',$data);
	}

	public function teachers()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/teachers.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function subjects()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/subjects.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function users()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/users.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function plan()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/plan.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function servise()
	{
		$data = $this->admin_model->home();
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/servise.php',$data);
		$this->load->view('admin/footer.php',$data);
	}
	public function loguot()
	{
		header('Location: /');
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
		if( !empty($id) ){
			if( $this->admin_model->edit_post($id) ){
				header('Location: /admin/index');
			}
		}
	}
	public function teacher()
	{
		$data['teacher'] = $this->admin_model->view_teacher();
		$this->load->view('teacher.php', $data);
	}
	public function add_teacher()
	{
		$fio = trim($_POST['fio']);
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);
		if( !empty($fio) && !empty($login) ){
			if( $this->admin_model->add_teacher($fio, $login, $password) ){
				header('Location: /admin/teacher');
			}
		}
	}

	public function delete_teacher()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_teacher($id) ){
				header('Location: /admin/teacher');
			}
		}
	}

	public function edit_teacher()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->edit_teacher($id) ){
				header('Location: /admin/teacher');
			}
		}
	}
	//group
	public function group()
	{
		$data['group'] = $this->admin_model->view_group();
		$this->load->view('group.php', $data);
	}
	public function add_group()
	{
		$id_teacher = trim($_POST['id_teacher']);
		$number = trim($_POST['number']);
		$year = trim($_POST['year']);
		if( !empty($number) && !empty($year) ){
			if( $this->admin_model->add_group($id_teacher, $number, $year) ){
				header('Location: /admin/group');
			}
		}
	}

	public function delete_group()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_group($id) ){
				header('Location: /admin/group');
			}
		}
	}

	public function edit_group()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->edit_group($id) ){
				header('Location: /admin/group');
			}
		}
	}
	//student
	public function users()
	{
		$data['student'] = $this->admin_model->view_student();
		$this->load->view('users.php', $data);
	}
	public function add_users()
	{
		$fio = trim($_POST['fio']);
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);
		if( !empty($number) && !empty($year) ){
			if( $this->admin_model->add_student($fio, $login, $password) ){
				header('Location: /admin/users');
			}
		}
	}

	public function delete_users()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_student($id) ){
				header('Location: /admin/users');
			}
		}
	}

	public function edit_users()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->edit_student($id) ){
				header('Location: /admin/users');
			}
		}
	}
	//subject
	public function subject()
	{
		$data['subject'] = $this->admin_model->view_subject();
		$this->load->view('subject.php', $data);
	}
	public function add_subject()
	{
		$name = trim($_POST['name']);
		//$login = trim($_POST['login']);
		//$password = trim($_POST['password']);
		if( !empty($name) ){
			if( $this->admin_model->add_subject($name) ){
				header('Location: /admin/subject');
			}
		}
	}

	public function delete_subject()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->delete_subject($id) ){
				header('Location: /admin/subject');
			}
		}
	}

	public function edit_subject()
	{
		$id = (int) $_GET['id'];
		if( !empty($id) ){
			if( $this->admin_model->edit_subject($id) ){
				header('Location: /admin/subject');
			}
		}
	}
}