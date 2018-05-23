<?php

require_once ('application/libraries/MY_Model.php');

class Games extends MY_Model {
	var $name;
	var $coverImageSmall;
	var $coverImageLarge;
	
	function __construct(){
		parent::__construct();
	}
}

?>