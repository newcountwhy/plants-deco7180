<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forest extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
    }

    public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('forest', $data);
		
    }
}