<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Controller.php';

class Portal extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	
	//gets the facebook login Url and then after login gets the user info
	function facebookLogin_get(){
		//load the user controller
		$this->load->library('../controllers/User');
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
		$this->load->library("FacebookFunctions");
		$ci = &get_instance();
		$data['login'] = $ci->facebookfunctions->getLoginUrl();
		$info = $ci->facebookfunctions->getInfo();
		
		//check if the info came back from facebook
		if($info){
			$this->user->setUserName($info['name']);
			$this->user->setUserCity($info['location']['name']);
			$data['info'] = $info;
		}
		$this->load->view("teste",$data);
	}
	
	//function that will register new user without any other social network
	function register_get(){
		
	}
	
	function doRegister(){
		
	}
	
	function commonLogin_post(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
	
	function googlePlusLogin(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
	
}