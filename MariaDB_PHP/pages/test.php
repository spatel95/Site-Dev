<?php
	// include 'info.php';
	// include_once('mediate.php');
	// // require 'info.php';
	// echo "TEST";

	// echo $hostdb;

	// $per = new Person('sam','email','4.0','12','M','Pass');
	// echo $per->printApp();

	// $db = new MyDbWorker($hostdb,$userdb,$passworddb,$databasedb,$tabledb);

	// echo "AAAAAAAAAAAAAAAAAAAAAAAAaa";
	// echo true;
	
	// echo $db->getOneElement('lukej@fat.from.here ');

	$arr = array();

	$arr['a'] = "1";
	$arr['b'] = "2";
	$arr['c'] = "3";
	$arr['d'] = "4";
	$arr['e'] = "5";
	$arr['f'] = "6";

	$arr2 = array();

	$arr2[0] = "a";
	$arr2[2] = "b";
	$arr2[3] = "c";
	$arr2[4] = "d";
	$arr2[5] = "e";
	$arr2[6] = "f";

	foreach ($arr2 as $value) {
		echo $arr[$value];
		echo "<br/>";
	}


?>