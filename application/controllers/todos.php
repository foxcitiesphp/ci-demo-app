<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('todo_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('todo[name]', 'Todo', 'required|min_length[4]');

		if ($this->form_validation->run())
		{
			$this->todo_model->create($this->input->post('todo'));
		}

		$view_data['todos'] = $this->todo_model->get_incomplete();
		$view_data['completed_todos'] = $this->todo_model->get_complete();

		$view_data['content'] = 'index';
		$this->load->view('template', $view_data);
	}

	public function complete($todo_id)
	{
		$this->todo_model->complete($todo_id);

		redirect('/');
	}

	public function delete($todo_id)
	{
		$this->todo_model->delete($todo_id);

		redirect('/');
	}
}