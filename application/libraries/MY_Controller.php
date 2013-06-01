<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class MY_Controller extends REST_Controller{
	function __construct(){
		parent::__construct();
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
}