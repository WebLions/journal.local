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

	public function edit_user($id, $surname, $name, $subname, $login, $password, $access)
	{
		$data = array(
			   'surname' => $surname ,
			   'name' => $name ,
			   'subname' => $subname ,
			   'login' => $login,
			   'access' => $access
			);
		if(!empty($password)){
			$data['password'] = md5($password . $login);
		}
		$this->db->where('id', $id);
		$this->db->update('users', $data);   
		return true;
	}
	public function view_plan($id = "")
	{
		if(!empty($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('plans');
		return $query->result_array();
	}
	public function add_plan($name, $now, $first, $second)
	{
		$data = array(
			   'name' => $name ,
			   'now' => $now ,
			   'first' => $first ,
			   'second' => $second
			);
		$this->db->insert('plans', $data); 
		return true;
	}
	public function delete_plan($id)
	{
		$this->db->delete('plans', array('id' => $id));  
		return true;
	}
	//учкбные семестры
	public function edit_plan($id, $name, $now, $first, $second)
	{
		$data = array(
			   'name' => $name ,
			   'now' => $now ,
			   'first' => $first,
			   'second' => $second
			);
		$this->db->where('id', $id);
		$this->db->update('plans', $data);   
		return true;
	}
	public function view_term($id = "", $term = "")
	{
		if(!empty($term)){
			$this->db->where('id', $term);
		}
		$this->db->where('id_plan', $id);
		$query = $this->db->get('terms');
		return $query->result_array();
	}
	public function add_term($id, $name, $type, $first, $second)
	{
		$data = array(
			   'id_plan' => $id,
			   'name' => $name ,
			   'type' => $type ,
			   'first' => $first ,
			   'second' => $second
			);
		$this->db->insert('terms', $data); 
		return true;
	}
	public function delete_term($id)
	{
		$this->db->delete('terms', array('id' => $id));  
		return true;
	}
	public function edit_term($id, $name, $type, $first, $second)
	{
		$data = array(
			   'name' => $name ,
			   'type' => $type ,
			   'first' => $first,
			   'second' => $second
			);
		$this->db->where('id', $id);
		$this->db->update('terms', $data);   
		return true;
	}


	//group
	public function view_group()
	{
		$this->db->select('group.id as id, group.number as number, teacher.name as name');
		$this->db->from('group');
		if(!empty($_GET['id'])){
			$this->db->where('group.id', $_GET['id']);
		}
		$this->db->join('teacher', 'teacher.id = group.id_teacher');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function add_group($id_teacher, $number, $id_plan)
	{
		$data = array(
			   'id_teacher' => $id_teacher ,
			   'number' => $number ,
			   'id_plan' => $id_plan
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
	public function add_student($data)
	{
		$this->db->insert('student', $data); 
	}
	
	public function get_teachers()
	{
		$query = $this->db->get('teacher');
		return $query->result_array();
	}
	public function get_plans()
	{
		$query = $this->db->get('plans');
		return $query->result_array();
	}
	public function get_students($id = '')
	{	
		$this->db->where('id_group', $id);
		$query = $this->db->get('student');
		return $query->result_array();
	}
}