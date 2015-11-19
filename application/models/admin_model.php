<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//Главная админки
	public function home()
	{
		$query = $this->db->get('posts');
		$return['posts'] = $query->result_array();
		$query = $this->db->get('teacher');
		$return['teachers'] = $query->result_array();
		$query = $this->db->get('subject');
		$return['subjects'] = $query->result_array();
		$query = $this->db->get('student');
		$return['students'] = $query->result_array();
		$query = $this->db->get('lessons');
		$return['lessons'] = $query->result_array();
		return $return;
	}
	public function view_post()
	{
		$this->db->where('id', $_GET['id']);
		$query = $this->db->get('posts');
		$return['posts'] = $query->result_array();
		return $return;
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

	public function edit_post($id)
	{
		$data = array(
               'title' => $_POST['title'],
               'description' => $_POST['description'],
               'date' => date("Y-m-d")
            );

		$this->db->where('id', $id);
		$this->db->update('posts', $data);   
		return true;
	}
	//преподователи
	public function view_teacher($id = ''){
		if(!empty($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('teacher');
		return $query->result_array();
	}
	public function add_teacher($surname, $name, $subname, $login, $password)
	{
		$data = array(
			   'surname' => $surname ,
			   'name' => $name ,
			   'subname' => $subname ,
			   'login' => $login ,
			   'password' => md5($password . $login)
			);
		$this->db->insert('teacher', $data); 
		return true;
	}

	public function delete_teacher($id)
	{
		$this->db->delete('teacher', array('id' => $id));  
		return true;
	}

	public function edit_teacher($id, $surname, $name, $subname, $login, $password)
	{
		$data = array(
			   'surname' => $surname ,
			   'name' => $name ,
			   'subname' => $subname ,
			   'login' => $login
			);
		if(!empty($password)){
			$data['password'] = md5($password . $login);
		}
		$this->db->where('id', $id);
		$this->db->update('teacher', $data);   
		return true;
	}
	//subject
	public function view_subject($id = '')
	{
		if(!empty($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('subject');
		return $query->result_array();
	}

	public function add_subject($name)
	{
		$data = array(
			   'name' => $name
			);
		$this->db->insert('subject', $data); 
		return true;
	}

	public function delete_subject($id)
	{
		$this->db->delete('subject', array('id' => $id));  
		return true;
	}

	public function edit_subject($id, $name)
	{
		$data = array(
               'name' => $name
            );

		$this->db->where('id', $id);
		$this->db->update('subject', $data);   
		return true;
	}
	public function view_user($id = '')
	{
		if(!empty($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('users');
		return $query->result_array();
	}

	public function add_user($surname, $name, $subname, $login, $password)
	{
		$data = array(
			   'surname' => $surname ,
			   'name' => $name ,
			   'subname' => $subname ,
			   'login' => $login ,
			   'password' => md5($password . $login)
			);
		$this->db->insert('users', $data); 
		return true;
	}

	public function delete_user($id)
	{
		$this->db->delete('users', array('id' => $id));  
		return true;
	}

	public function edit_users($id, $surname, $name, $subname, $login, $password)
	{
		$data = array(
			   'surname' => $surname ,
			   'name' => $name ,
			   'subname' => $subname ,
			   'login' => $login
			);
		if(!empty($password)){
			$data['password'] = md5($password . $login);
		}
		$this->db->where('id', $id);
		$this->db->update('student', $data);   
		return true;
	}



	//group
	public function view_group()
	{
		$this->db->select('group.id as id, group.number as number, teacher.fio as name');
		$this->db->from('group');
		if(!empty($_GET['id'])){
			$this->db->where('group.id', $_GET['id']);
		}
		$this->db->join('teacher', 'teacher.id = group.id_teacher');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function add_group($id_teacher, $number, $year)
	{
		$data = array(
			   'id_teacher' => $id_teacher ,
			   'number' => $number ,
			   'year' => $year
			);
		$this->db->insert('group', $data); 
		return true;
	}

	public function delete_group($id)
	{
		$this->db->delete('group', array('id' => $id));  
		return true;
	}

	public function edit_group($id)
	{
		$data = array(
               'id_teacher' => $_POST['id_teacher'],
               'number' => $_POST['number'],
               'year' => $_POST['year']
            );

		$this->db->where('id', $id);
		$this->db->update('group', $data);   
		return true;
	}
	//student

	public function view_plan()
	{
		$query = $this->db->get('plans');
		return $query->result_array();
	}
}