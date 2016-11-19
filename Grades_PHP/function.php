<?php
	function validLogin($username,$password){
		if(strcmp($username, "cmsc298s")==0 and strcmp($password, "terps") ==0){
			echo $password;
			return true;
		}
		return false;
	}
	

?>