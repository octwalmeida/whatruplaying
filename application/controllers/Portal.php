<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Controller.php';

class Portal extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index_get(){
		
	}
	
	function facebookLogin_get(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
		$this->load->library("FacebookFunctions");
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