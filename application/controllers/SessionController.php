<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionController extends CI_Controller {

    function SessionController(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    
	public function index()
	{
		$this->session->set_userdata('username','2233rr');
		$this->load->view('login');
	}
	
	function getSession(){

		$username=$this->session->userdata('username');
		echo $username;
	}


}
