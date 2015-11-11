<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function home()
	{
		$query = $this->db->get('posts');
		$return['posts'] = $query->result_array();
		$query = $this->db->get('teacher');
		$return['teacher'] = $query->result_array();
		$query = $this->db->get('subject');
		$return['subject'] = $query->result_array();
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
	public function view_teacher(){
		$query = $this->db->get('teacher');
		return $query->result_array();
	}
	public function add_teacher($fio, $login, $password)
	{
		$data = array(
			   'fio' => $fio ,
			   'login' => $login ,
			   'password' => md5(md5($password)."solt");
			);
		$this->db->insert('teacher', $data); 
		return true;
	}

	public function delete_teacher($id)
	{
		$this->db->delete('teacher', array('id' => $id));  
		return true;
	}

	public function edit_teacher($id)
	{
		$data = array(
               'fio' => $_POST['fio'],
               'login' => $_POST['login'],
               'password' => md5(md5($_POST['password'])."solt");
            );

		$this->db->where('id', $id);
		$this->db->update('teacher', $data);   
		return true;
	}
	//group
	public function view_group()
	{
		$this->db->select('*');
		$this->db->from('group');
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
	public function view_student()
	{
		$query = $this->db->get('student');
		return $query->result_array();
	}

	public function add_student($fio, $login, $password)
	{
		$data = array(
			   'fio' => $fio ,
			   'login' => $login ,
			   'password' => md5(md5($password).'solt');
			);
		$this->db->insert('student', $data); 
		return true;
	}

	public function delete_student($id)
	{
		$this->db->delete('student', array('id' => $id));  
		return true;
	}

	public function edit_student($id)
	{
		$data = array(
               'fio' => $_POST['fio'],
               'login' => $_POST['login'],
               'password' => $_POST['password']
            );

		$this->db->where('id', $id);
		$this->db->update('student', $data);   
		return true;
	}
	//subject
	public function view_subject()
	{
		$query = $this->db->get('subject');
		return $query->result_array();
	}

	public function add_subject($name)
	{
		$data = array(
			   'fio' => $name
			);
		$this->db->insert('subject', $data); 
		return true;
	}

	public function delete_subject($id)
	{
		$this->db->delete('subject', array('id' => $id));  
		return true;
	}

	public function edit_subject($id)
	{
		$data = array(
               'name' => $_POST['name']
            );

		$this->db->where('id', $id);
		$this->db->update('subject', $data);   
		return true;
	}
}