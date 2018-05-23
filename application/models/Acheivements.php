<?php
require APPPATH.'/libraries/MY_Model.php';
class Acheivements extends MY_Model{
	var $description;
	var $gameId;
	function __construct(){
		parent::__construct();
	}
}

?>