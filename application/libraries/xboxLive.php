<?php defined('BASEPATH') OR exit('No direct script access allowed');


class xboxLive{
	var $userName;
	
	
	function getProfile(){
		$url = "https://xboxapi.com/profile/".$this->getUserName();
		$result = $this->simpleCurl($url);
		return $result;
	}
	
	function getAchievements($gameId){
		$url = "https://xboxapi.com/achievements/".$gameId."/".$this->getUserName();
		$result = $this->simpleCurl($url);
		return $result;
	}
	
	function getGames(){
		$url = "https://xboxapi.com/games/".$this->getUserName();
		$result = $this->simpleCurl($url);
		return $result;
	}
	
	function getAvatar(){
		
	}
	
	function getProfilePicture(){
		
	}
	
	function getFriends(){
		$url = "https://xboxapi.com/friends/".$this->getUserName();
		$result = $this->simpleCurl($url);
		return $result;
	}
	/**
	 * @return the $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @param field_type $userName
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
	}

}

?>