<?php

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Default_model');
		$this->load->helper(array('url_helper','form'));
	}

	
	public function index()
	{
		$content = $this->input->post('content');
		$this->Default_model->update($content);
		$data['title'] = 'tiny';
		$data['content'] = $this->Default_model->get_display();

		$this->load->view('tinymce', $data);
	}
}
