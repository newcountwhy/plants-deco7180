<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reg extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
    }

	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('reg', $data);
	
    }
    public function reg()
	{
		$this->load->model('reg_model');		//load user model
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> username existing</div> ";
		$data['error_password'] = "<div class=\"alert alert-danger\" role=\"alert\"> different between two inputs</div> ";
	
		$this->load->helper('form');
		$this->load->helper('url');
		$username = $this->input->post('username'); //getting username from reg form
		$password = $this->input->post('password'); //getting password from reg form
		$password1 = $this->input->post('password1');
		$description = $this->input->post('description');
		
		$this->reg_model->set_info();
		redirect('login');
		
		
	}		
	
	
}