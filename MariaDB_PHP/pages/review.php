<?php
	if (isset($_POST['back'])) {
		header("Location:../main.php");
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "../css/style.css" title = "style" type = "text/css"/>
		<title>Review</title>
	</head>
	<body>
		<div class="img"><img src="../image/umd_logo.svg" class="logo" ></div>
		<div class="form">
			<div class="submit">
				<?php
					include_once('mediate.php');
					session_start();


					if($_SESSION['previousSession']==="submitApp.php"){
						submitApp($_SESSION['personAdded']);
					}elseif ($_SESSION['previousSession']==="reviewLogin.php") {
						reviewLogin($_SESSION['personReviewLogin']);
					}elseif ($_SESSION['previousSession'] === "update.php") {
						update($_SESSION['updateApp']);
					}elseif ($_SESSION['previousSession']==="admin.php") {
						adminSes();
					}

					else{
						echo "<h1>FUCK</h>";
					}

					function submitApp($personAdded){
						echo addPerson($personAdded);
						echo "<div><strong> The Following Entry has been Added to the Database</strong></div>";
						echo $personAdded->printApp();
					}

					function reviewLogin($personAdded){
						echo "<p><div><strong> Application Found in the Database with the Following Values</strong></div></p>";
						echo $personAdded->printApp();
					}

					function update($upPerson){
						echo addPerson($upPerson);
						echo "<p><div><strong> The Entry has been Updated in the Database and the New Values are:</strong></div></p>";
						echo $upPerson->printApp();
					}

					function adminSes(){
						echo "<h1>Application</h1>";
						// echo $_SESSION['fields'];
						echo queryTable($_SESSION['fields'],$_SESSION['condition']);
					}
				?>
				<form action="" method="post">
					<p><button name="back">Return To Main Menu</button></p>
				</form>
			</div>
		</div>
	</body>
</html>