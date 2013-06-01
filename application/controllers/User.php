<?php

class User extends MY_Controller{
	private $userName;
	private $userCity;
	private $userPassword;
	private $userFacebook;
	private $userXboxLive;
	private $userPsn;
	private $userGoogleGame;
	private $userGames;
	private $userAchievements;
	private $userYoutube;
	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 * @return the $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @return the $userPassword
	 */
	public function getUserPassword() {
		return $this->userPassword;
	}

	/**
	 * @return the $userFacebook
	 */
	public function getUserFacebook() {
		return $this->userFacebook;
	}

	/**
	 * @return the $userXboxLive
	 */
	public function getUserXboxLive() {
		return $this->userXboxLive;
	}

	/**
	 * @return the $userPsn
	 */
	public function getUserPsn() {
		return $this->userPsn;
	}

	/**
	 * @return the $userGoogleGame
	 */
	public function getUserGoogleGame() {
		return $this->userGoogleGame;
	}

	/**
	 * @return the $userGames
	 */
	public function getUserGames() {
		return $this->userGames;
	}

	/**
	 * @return the $userAchievements
	 */
	public function getUserAchievements() {
		return $this->userAchievements;
	}

	/**
	 * @return the $userYoutube
	 */
	public function getUserYoutube() {
		return $this->userYoutube;
	}

	/**
	 * @param field_type $userName
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
	}

	/**
	 * @param field_type $userPassword
	 */
	public function setUserPassword($userPassword) {
		$this->userPassword = $userPassword;
	}

	/**
	 * @param field_type $userFacebook
	 */
	public function setUserFacebook($userFacebook) {
		$this->userFacebook = $userFacebook;
	}

	/**
	 * @param field_type $userXboxLive
	 */
	public function setUserXboxLive($userXboxLive) {
		$this->userXboxLive = $userXboxLive;
	}

	/**
	 * @param field_type $userPsn
	 */
	public function setUserPsn($userPsn) {
		$this->userPsn = $userPsn;
	}

	/**
	 * @param field_type $userGoogleGame
	 */
	public function setUserGoogleGame($userGoogleGame) {
		$this->userGoogleGame = $userGoogleGame;
	}

	/**
	 * @param field_type $userGames
	 */
	public function setUserGames($userGames) {
		$this->userGames = $userGames;
	}

	/**
	 * @param field_type $userAchievements
	 */
	public function setUserAchievements($userAchievements) {
		$this->userAchievements = $userAchievements;
	}

	/**
	 * @param field_type $userYoutube
	 */
	public function setUserYoutube($userYoutube) {
		$this->userYoutube = $userYoutube;
	}
	/**
	 * @return the $userCity
	 */
	public function getUserCity() {
		return $this->userCity;
	}

	/**
	 * @param field_type $userCity
	 */
	public function setUserCity($userCity) {
		$this->userCity = $userCity;
	}


	

}

?>