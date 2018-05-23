<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/third_party/facebook/facebook.php';

class FacebookFunctions {
	var $code;
	function __construct(){
		$this->facebook = new Facebook(array(
		
				'appId'  => "144771805711764",
		
				'secret' => "2ed0e708e908e4ab0e0e40e91e6ea302",
		
				'cookie' => true,
		
		));
		if(array_key_exists('code', $_REQUEST)){
			$this->code = $_REQUEST['code'];
		}
	}
	
	/**
	 * uses the facebook API to generates login url
	 * @return string loginUrl
	 */
	function getLoginUrl(){
		$loginUrl = $this->facebook->getLoginUrl(array('scope' => 'user_relationships, friends_relationships, user_location, friends_location, email'));
		return $loginUrl;
	}
	
	/**
	 * uses the facebook API to generates logout url
	 * @return string $logoutUrl
	 */
	function getLogoutUrl(){
		$logoutUrl = $this->facebook->getLogoutUrl();
		return $logoutUrl;
	}
	
	function getCurrentUser(){
		try {
			$me = $this->facebook->api('/me');
			return $me;
		} catch (FacebookApiException $e) {
			return false;
		}
	}
	
	/**
	 * Gets the logged user id
	 */
	function getCurrentUserId(){
		try {
			$me = $this->facebook->api('/me');
			$user = $me['id'];
			return $user;
		} catch (FacebookApiException $e) {
			return $e->getMessage();
		}
	}
}

?>