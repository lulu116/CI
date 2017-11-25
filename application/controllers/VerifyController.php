<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyController extends CI_Controller {


    
    function VerifyController(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    
	public function index()
	{
		$this->load->view('verify');
	}

	public function getImage(){
		$this->load->helper('captcha');
		code();
	}
	



}
