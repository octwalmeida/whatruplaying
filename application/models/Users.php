<?php
require APPPATH.'/libraries/MY_Model.php';
class Users extends MY_Model{
	private $userName;
	private $userLastName;
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
	
	function createUser($userName, $userLastName, $userCity, $userPassword, $userFacebook, $userXboxLive, $userPsn, $userGoogleGame, $userYoutube){
		$this->setUserName($userName);
		$this->setUserLastName($userLastName);
		$this->setUserCity($userCity);
		$this->setUserPassword(md5($userPassword));
		$this->setUserFacebook($userFacebook);
		$this->setUserXboxLive($userXboxLive);
		$this->setUserPsn($userPsn);
		$this->setUserGoogleGame($userGoogleGame);
		$this->setUserYoutube($userYoutube);
	}
	
	function getUserActivityByLiveOrPsn($userId){
		/**
		 * @todo get the rest api for live and psn activities
		 */
	}
	
	
	function saveUser($user){
		/**
		 * @todo Create a noSQL method that will insert the object on the data base
		 */
		
	}
	
	/**
	 * @return the $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @return the $userCity
	 */
	public function getUserCity() {
		return $this->userCity;
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
	 * @param field_type $userCity
	 */
	public function setUserCity($userCity) {
		$this->userCity = $userCity;
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
	 * @return the $userLastName
	 */
	public function getUserLastName() {
		return $this->userLastName;
	}

	/**
	 * @param field_type $userLastName
	 */
	public function setUserLastName($userLastName) {
		$this->userLastName = $userLastName;
	}


}

?>