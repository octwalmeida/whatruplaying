<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Controller.php';

class Portal extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function facebookLogin(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
	
	function commonLogin_post(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
}