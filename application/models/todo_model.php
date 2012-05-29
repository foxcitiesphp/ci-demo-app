<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extends CI_Model {

	public function create($todo)
	{
		$todo['completed'] = 0;

		return $this->db->insert('todos', $todo);
	}

	public function get_incomplete()
	{
		return $todos = $this->db
			->where('completed', 0)
			->get('todos');
	}

	public function get_complete()
	{
		return $todos = $this->db
			->where('completed', 1)
			->get('todos');
	}

	public function complete($todo_id)
	{
		return $this->db
			->set('completed', 1)
			->where('id', $todo_id)
			->update('todos');
	}

	public function delete($id)
	{
		return $this->db
			->where('id', $id)
			->delete('todos');
	}
}