<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intro2 extends CI_Controller {

    public function __construct() {
        parent:: __construct();
     
    }

    public function index()
	{
		$data['error']= "";
		$this->load->view('intro2');
       
		
    }
}