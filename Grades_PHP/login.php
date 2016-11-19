<?php session_start()?>
<?php 
	// include 'function.php';
	// lo
	if(isset($_POST['username'])&&isset($_POST['password'])){
		
		if (validLogin($_POST['username'],$_POST['password'])) {
			if (!isset($_SESSION['submissionCounter'])) {
				$_SESSION['submissionCounter'] = 1;
			}
			
			echo $_POST['password'];
			header('Location:fileSelect.php');
		}
	}

	function validLogin($username,$password){
		if(strcmp($username, "cmsc298s")==0 and strcmp($password, "terps") ==0){
			echo $password;
			return true;
		}
		return false;
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
		<title>Login</title>
	</head>
	<body>
		<?php 
			if (isset($_SESSION['loggedIn'])) {
				header("Location:fileSelect.php");
			} ?>
		
		<form action = "" method="post">
			<h1>Grade Submission System</h1>
			<div class="textHead">LoginId: &nbsp;</div><input type="text" name="username" required> <br/> <br/>
			<div class="textHead">Password: &nbsp;</div><input type="password" name="password" required> <br/> <br/>
			<input type="submit">
		</form>

		<?php 
			if(isset($_POST['username'])&&isset($_POST['password'])){
		
				if (!validLogin($_POST['username'],$_POST['password'])) {
					echo "<h1> Invalid Login Information Provided.</h1>";
				}else{
					$_SESSION['loggedIn'] = "true";
				}
			}
		 ?>
	</body>
</html>

