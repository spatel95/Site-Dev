<?php
	if (isset($_POST['clicked'])) {
		redirectPage($_POST['clicked']);
	}

	function redirectPage($page){
		if ($page=="submit") {
			header("Location:pages/submitApp.php");
		}elseif ($page=="review") {
			header("Location:pages/reviewLogin.php");
		}elseif ($page=="update") {
			header("Location:pages/updateLogin.php");
		}elseif ($page=="admin") {
			header("Location:pages/adminAuthenticate.php");
		}
	}
	
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "css/style.css" title = "style" type = "text/css"/>
		<title>Home Page</title>
	</head>
	<body>
		<div class="img"><img src="image/umd_logo.svg" class="logo" ></div>
		<h1 class="mainTitleA">Welcome to UMCP</h1>
		<h1 class="mainTitleB">Application System</h1>

		<div class="mainButton">
			<form action="main.php" method="post">
				<br/>
				<p>
					<p><button name="clicked" value="submit">Submit Application</button></p><br/>
					<p><button name="clicked" value="review">Review Application</button></p><br/>
					<p><button name="clicked" value="update">Update Application</button></p><br/>
					<p><button name="clicked" value="admin">Administrative</button></p><br/>
				</p>
			</form>
		</div>

		<div class="footerContainer">
			<div >
				<hr/> 
				<h5 class="footerText">If you have any questions about our program please contact the system administrator at <a class="lable" href="mailto:johnsnow@crows.before.hoes.com">johnsnow@crows.before.hoes.com</a></h5>
			</div>
		</div>
	</body>
</html>