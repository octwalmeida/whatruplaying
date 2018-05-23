<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Main extends REST_Controller{
	var $users;
	var $xboxLive;
	var $profile;
	var $userAgent;
	
	function __construct(){
		$this->getUserLocation();
		parent::__construct();
		$this->load->library("xboxlive");
		$this->load->model("Users");
		$this->users = new Users();
		$this->xboxLive = new xboxLive();
		//creates a log file to further activity information
		$file = fopen(APPPATH.'/logs/activity_log.txt', 'a+');
	}
	
	function simpleCurl($url,$method = null, $data = null){
		$cURL = curl_init($url);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
		if($data && strtolower($method) == "post"){
			curl_setopt($cURL, CURLOPT_POST, true);
			curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
		}
		$result = curl_exec($cURL);
		curl_close($cURL);
		return $result;
	}
	
	function getProfile(){
		$headers = getallheaders();
		foreach($headers as $key=>$value){
			if($value == "profile"){
				$this->profile = $value;
			}
		}
	}
	
	function getDeviceInformation(){
		$this->userAgent = $_SERVER["HTTP_USER_AGENT"];
		$this->getProfile();
	}
	
	function getAllUserData(){
		
	}
	
	function getUserGames($userId){
		
	}
	
}

?>