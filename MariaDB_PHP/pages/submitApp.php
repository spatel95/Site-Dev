
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "../css/style.css" title = "style" type = "text/css"/>
		<title>Home Page</title>
	</head>
	<body>
		<div class="img"><img src="../image/umd_logo.svg" class="logo" ></div>
		<h1 class="mainTitleA">Application Submition</h1>

		<div class="form">
			<form class="submit" action="" method="post" >
				<p> <div class="lable">Name:&nbsp;</div><input type="text" name="name" placeholder="John Snow"> </p>
				<p> <div class="lable">E-Mail:&nbsp;</div><input type="email" name="emailApp" placeholder="nedystark@winter.is.coming.com"> </p>
				<p> <div class="lable">GPA:&nbsp;</div><input type="number" step=".1" name="GPA" placeholder="0.0" min="0.0" max="4.0"> </p>

				<input type="radio" name="year" value="10"> <div class="lable">10 &nbsp;</div>
				<input type="radio" name="year" value="11"> <div class="lable">11 &nbsp;</div>
				<input type="radio" name="year" value="12"> <div class="lable">12 &nbsp;</div>

				<br/>

				<input type="radio" name="gender" value="M"> <div class="lable"> M</div>
				<input type="radio" name="gender" value="F"> <div class="lable"> F</div>

				<br/>

				<p><div class="lable">Password:</div> <input type="password" name="password"> <br/></p>
				<p><div class="lable">Comfirm Password:</div><input type="password" name="confirmPassword"><br/></p>

				<p><input type="submit" name="submitAppSubmit"></p>
				<p><button>Return to main menu</button> </p>

			</form>
			<?php 
			include_once('mediate.php');
			session_start();
			$_SESSION['previousSession'] = "submitApp.php";
			if(isset($_POST['submitAppSubmit'])){
				if (confirmPass($_POST['password'],$_POST['confirmPassword'])) {
					
			
					$applicant = new Person($_POST['name'],$_POST['emailApp'],
											1.0+$_POST['GPA']-1.0,intval($_POST['year']),
											$_POST['gender'],$_POST['password']);

					$_SESSION['personAdded'] = $applicant;

					header('Location:review.php');
				}else{
					echo "<div> Passwords do not match. TRY AGAIN! TRY HARDER! </div>";
				}
			}
		?>
		</div>	
	</body>
</html>