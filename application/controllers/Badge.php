<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class badge extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->library('session'); //enable session
        $this->load->model('Badge_Model');
    }

    public function index()
	{	
	
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->displaygardenbadge($username);//use function in badge_model and inputting username
		$this->load->view('badge', $result);
        

		
    }

    public function dispdata()
	{	
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->displaygardenbadge($username);
		$this->load->view('badge', $result);	
    }

    public function updategardenbadge(){
       
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updategardenbadge($username);
        redirect("garden");
    }

    public function updategotobadgepagegarden(){
        
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updategardenbadge($username);
        redirect("badge");
    }

    public function updategotobadgepagewater(){
        
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updatewaterbadge($username);
        redirect("badge");
    }

    public function updategotobadgepageforest(){
        
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updateforestbadge($username);
        redirect("badge");
    }

    public function updatewaterbadge(){
       
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updatewaterbadge($username);
        redirect("pond");
    }

    public function updateforestbadge(){
        
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->updateforestbadge($username);
        redirect("forest");
    }

    public function counttotalbadge(){
       
        $username = $this->session->userdata('username');
        $result['data']=$this->Badge_Model->counttotalbadge($username);
        redirect("Badge/dispdata");
    }

}

?>