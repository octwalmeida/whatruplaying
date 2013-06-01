<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Controller.php';

class Portal extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	
	//gets the facebook login Url and then after login gets the user info
	function facebookLogin_get(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
		$this->load->library("FacebookFunctions");
		$data['login'] = $this->facebookfunctions->getLoginUrl();
		$info = $this->facebookfunctions->getInfo();
		
		//check if the info came back from facebook
		if($info){
			$this->load->library('../controllers/User');
			$user = $this->user;
			$user->setUserName($info['name']);
			$user->setUserCity($info['location']['name']);
			$data['info'] = $info;
		}
		$this->load->view("teste",$data);
	}
	
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
	
	function youtubeLogin(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
}