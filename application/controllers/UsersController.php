<?php
require APPPATH.'/libraries/MainController.php';

class UsersController extends MainController {
	var $users;
	private $CI;
	function __construct(){
		parent::__construct();
		$this->CI =& get_instance(); 
		$this->CI->load->model("Users");
		$this->users = new Users();
	}
	
	/**
	 * Gets the facebook login Url and then after login gets the user info
	 * @access private
	 */
	private function facebookLogin(){
		$this->load->model('Users');
		$this->load->library("FacebookFunctions");
		$ci = &get_instance();
		$data['login'] = $ci->facebookfunctions->getLoginUrl();
		$info = $ci->facebookfunctions->getCurrentUser();
		//check if the info came back from facebook
		if($info){
			$this->user->setUserName($info['name']);
			$this->user->setUserCity($info['location']['name']);
			$data['info'] = $info;
		}
		return $data;
	}
	
	
	function registerUser_post(){
		$userName = $this->post("userName");
		$firstName = $this->post("firstName");
		$lastName = $this->post("lastName");
		$password = $this->post("password");
		$confirmPassword = $this->post("confirmPassword");
		$xboxGamerTag = $this->post("xboxGamerTag");
		
		$this->users->setUserName($userName);
		$this->users->setUserPassword($password);
		$this->users->setUserXboxLive($xboxGamerTag);
		
		var_dump($this->users);
	}
	
	function logUserAndCreateSession(){
		
	}
	
	/**
	 * function responsable for the user session
	 */
	function login(){
	
	}
	
	/**
	 * function that will register new user without any other social network
	 * @access public
	 */
	function register_get(){
			
	}
	
	/**
	 * Function that proccess the user information to data base
	 * @access private
	 */
	private function doRegister(){
	
	}
	
	/**
	 * Regular user login
	 * @access public
	 */
	function commonLogin_post(){
		$userName = $this->post('userName');
		$userPasswd = $this->post('password');
	}
}

?>