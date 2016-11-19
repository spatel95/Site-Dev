<?php  
	if (isset($_POST['adminSubmit'])){
		session_start();
		$_SESSION['previousSession'] = "admin.php";	
		$_SESSION['fields'] = $_POST['toDisplay'];
		$_SESSION['lable'] = $_POST['lable'];
		$_SESSION['condition'] = $_POST['condition'];
		header("Location:review.php");
	}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "../css/style.css" title = "style" type = "text/css"/>
		<title>Application</title>
	</head>
	<body>
		<div class="img"><img src="../image/umd_logo.svg" class="logo" ></div>
		<h1 class="mainTitleA">Application</h1>

		<div class="form">
			<form class="submit" action="" method="post">
				<div class="lableNoLine">Select  Fields to Display</div>

				<select name="toDisplay[]" multiple="miltiple">
					<option name="nameDisplay"> name</option>
					<option name="emailDisplay">email</option>
					<option name="gpaDisplay">gpa</option>
					<option name="yearDisplay">year</option>
					<option name="genderDisplay">gender</option>
				</select>

				<p>
					<div class="lable">Select field to sort application</div>
					<select>
						<option name="nameSort">name</option>
						<option name="emailSort">email</option>
						<option name="gpaSort">gpa</option>
						<option name="yearSort">year</option>
						<option name="genderSort">gender</option>
					</select>
				</p>

				<p>
					<div class="lable">Filter Condition</div>
					<input type="text" name="condition" placeholder="Filter"/> 
				</p>

				<p><input type="submit" name="adminSubmit" value="Display Application"></p>
				<button >Return to Main Menu</button>
			</form>
		</div>
	</body>
</html>