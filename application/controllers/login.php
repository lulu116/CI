<?php
/**
 * 登陆，注册，注销
 *
 *
 */
class Login extends CI_Controller
{
	function __construct()
    {

		parent::__construct();
		$this->load->helper('url');
    }
   
    
    // --------------------------------------------------------------------

    /**
	 * 登陆，注册 界面
	 *
	 *
	 */	
    function index()
    { 
    	$username=$this->session->userdata('username');
		echo $username;

	    $this->load->view('login');
    }


	// --------------------------------------------------------------------

    /**
	 * 登陆生成验证码
	 *
	 *
	 */
	function yzm_img1()
	{
		$this->load->helper('captcha1');
		code();

		//echo  333;
	}

	function hello(){
		echo  111;
	}


}
