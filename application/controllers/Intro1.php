<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intro1 extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }

    public function index()
	{
		$data['error']= "";
		$this->load->view('intro1');
        
		
    }
}