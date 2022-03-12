<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ranking extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->library('session'); //enable session
        $this->load->model('Ranking_Model');
    }

    public function index()
	{	
		
        $result['data']=$this->Ranking_Model->ranking();
		$this->load->view('ranking', $result);
       
		
    }
}
?>