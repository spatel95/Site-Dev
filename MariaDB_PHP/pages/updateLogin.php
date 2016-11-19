<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "../css/style.css" title = "style" type = "text/css"/>
		<title>Login Info</title>
	</head>
	<body>
		<div class="img"><img src="../image/umd_logo.svg" class="logo" ></div>
		
		<div class="form">
			<form class="submit" action="" method="post">
				<p>
					<div class="lable">Email associated with  application: &nbsp;</div> <input type="text" name="emailApp" placeholder="tyrion@little.lannister.com">
				</p>
				<p>
					<div class="lable">Password associated with application:&nbsp;</div> <input type="password" name="passApp" placeholder="whereRmyWench3s">
				</p>
				<p>
					<input type="submit" name="subApp">
				</p>
				<p> 
					<button class="back">Return to Main Menu</button>
				</p>
			</form>
		
			<div class="submit">
				<?php
					if (isset($_POST['back'])) {
						header('Location:../main.php');
					}elseif (isset($_POST['subApp'])) {
						include_once('mediate.php');
						session_start();
						
						$_SESSION['previousSession'] = "updateLogin.php";
						$_SESSION['updateEmail'] = $_POST['emailApp'];
						$person = getPersonByEmail($_POST['emailApp']);
						
						if($person->matchPassword($_POST['passApp'])){
							$_SESSION['personReviewLogin'] = $person;
							header('Location:update.php');
						}
					}

				?>
			</div>

		</div>

	</body>
</html>