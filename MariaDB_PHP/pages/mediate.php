<?php
	include_once('MyDbWorker.php');
	include_once('info.php');
	/**
	* 
	*/
	class Person{
		private $name;
		private $email;
		private $GPA;
		private $year;
		private $gender;
		private $password;

		
		public function __construct($pName,$pEmail,$pGpa,$pYear,$pGender,$pPassword){
			$this->name = $pName;
			$this->email = $pEmail;
			$this->GPA = $pGpa;
			$this->year = $pYear;
			$this->gender = $pGender;
			$this->password = crypt($pPassword,'@uRa$!0n');
		}

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getGPA(){
			return $this->GPA;
		}

		public function getYear(){
			return $this->year;
		}

		public function getGender(){
			return $this->gender;
		}

		public function matchPassword($pass){

			return crypt(crypt($pass,'@uRa$!0n'),$this->password)===$this->password;
		}

		public function getPassword(){
			return $this->password;
		}

		public function printApp(){
			$body = <<<TOSTRING
			<div style="font-weight:bold; display: inline-block;">Name:&nbsp;</div> $this->name <br/>
			<div style="font-weight:bold; display: inline-block;">Email:&nbsp;</div> $this->email <br/>
			<div style="font-weight:bold; display: inline-block;">GPA: &nbsp;</div> $this->GPA <br/>
			<div style="font-weight:bold; display: inline-block;">Year:&nbsp;</div> $this->year</br>
			<div style="font-weight:bold; display: inline-block;">Gender:&nbsp;</div> $this->gender<br/>
TOSTRING;
		return $body;
		}
	}
	function makeConnection(){
		global $hostdb;
		global $userdb;
		global $passworddb;
		global $databasedb;
		global $tabledb;

		return new MyDbWorker($hostdb,$userdb,$passworddb,$databasedb,$tabledb);
	}
	function addPerson($person){
		$db = makeConnection();
		$db->insert($person->getName(),$person->getEmail(),
					$person->getGPA(),$person->getYear(),
					$person->getGender(),$person->getPassword());
		$db->closeConnection();
	}

	function getPersonByEmail($pEmail){
		$db = makeConnection();
		$result = $db ->getOneElement($pEmail);
		if (!$result) {
			echo "<h3>QUERY FAILED</h3>";
		}
		$db->closeConnection();
		// return $result;
		$element = $result->fetch_array();

		return new Person(	$element['name'],$element['email'],
							$element['gpa'],$element['year'],
							$element['gender'],$element['password']);

	}

	function deleteByEmail($pEmail){
		$db = makeConnection();
		$result = $db->deleteRowByEmail($pEmail);
		if (!$result) {
			echo "<h3>QUERY FAILED</h3>";
		}

		return $result;
	}
	
	function queryTable($fieldArray,$condition){
		// print_r($fieldArray);
		// echo implode(",",$fieldArray);
		// echo "<h1>AAAAAAAAAAAAAAAAAAAA</h1>";
		$db = makeConnection();
		$result = $db->getQuery($fieldArray,$condition);
		
		if (!$result) {
			die("Retrieval failed: ". $db->error);
		} else {
			/* Number of rows found */
			$num_rows = $result->num_rows;
			if ($num_rows === 0) {
				echo "Empty Table<br>";
			} else {
				echo "<table>";
				echo fieldColumn($fieldArray);
				for ($row_index = 0; $row_index < $num_rows; $row_index++) {
					$result->data_seek($row_index);
					$row = $result->fetch_array(MYSQLI_ASSOC);
					
					echo queryColumn($row,$fieldArray);
					// echo "Name: {$row['name']}, Id: {$row['id']} <br>";
				}

				echo "<table>";
			}
		}
	}

	function queryColumn($row,$fieldArray){
		$str = "";
		$str .="<tr>";
		foreach ($fieldArray as $value) {
			$str.="<td>{$row[$value]}</td>";
		}

		$str.="</tr>";
		return $str;
	}

	function fieldColumn($fieldArray){
		$str = "<tr>";

		foreach ($fieldArray as $value) {
			$str.="<td>{$value}</td>";
		}

		$str.="</tr>";
		return $str;
	}

	 function confirmPass($pass,$cPass){
		return $pass===$cPass;
	}

	// if (get_magic_quotes_gpc()) {
	// 	echo "<h2>Magic Quotes ON</h2>";	
	// } else {
	// 	echo "<h2>Magic Quotes OFF</h2>";
	// }

	// if (get_magic_quotes_gpc()) {
	// 	echo "<h2>Magic Quotes ON</h2>";	
	// } else {
	// 	echo "<h2>Magic Quotes OFF</h2>";
	// }
?>