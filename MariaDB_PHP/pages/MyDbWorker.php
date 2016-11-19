<?php  
	/**
	* 
	*/
	class myDbWorker{
		private $servername;
		private $username;
		private $password;
		private $dbName;
		private $tableName;
		private $conn;

		function __construct($pserver,$pUn,$pPass,$pDB,$pTbl){
			$this->servername = $pserver; 
			$this->username = $pUn;
			$this->password = $pPass;
			$this->dbName = $pDB;
			$this->tableName = $pTbl;
			$this->conn = new mysqli($this->servername,$this->username,$this->password, $this->dbName);

			if ($this->conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}

			// $this->	
			// $this->
		}

		public function insert($pname,$pemail,$pgpa,$pyear,$pgender,$ppass){
			$query = "insert into {$this->tableName} values(\"{$pname}\",
					 \"{$pemail}\",{$pgpa},{$pyear},\"{$pgender}\",\"{$ppass}\")";

			$result = $this->conn->query($query);
			return $result;
		}

		public function getOneElement($pemail){
			$query = "select * from {$this->tableName} where email=\"{$pemail}\"";
			echo $query;
			return $this->conn->query($query);
		}

		public function getQuery($fieldArray,$condition){
			$fields = implode(",",$fieldArray);
			$query = "select {$fields} from {$this->tableName} where {$condition}";
			return $this->conn->query($query);
		}

		public function closeConnection(){	
			$this->conn->close();
		}

		function deleteRowByEmail($emailToDelete){
			$query = "delete from {$this->tableName} where email = \"{$emailToDelete}\"";
			echo $query;
			return $this->conn->query($query);
		}

		//LOOK AT FUNC ARG!!!!




	}





?>