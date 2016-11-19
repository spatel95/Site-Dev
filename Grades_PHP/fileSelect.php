<?php 
		if (isset($_POST['className'])&&isset($_POST['classSection'])) {
			session_start();
			include 'function.php';

			$cls = $_POST['className'];
			$section = $_POST['classSection'];
			$filename = $cls.$section.".txt";
			$_SESSION['cName'] = $cls;
			$_SESSION['cSection'] = $section;
			$_SESSION['filename'] = $filename;

			echo "<h1>".$_SESSION['fileURL']."</h1>";
			$fp = fopen($filename, "r") or die("Could not open file");
			$nameArray = array();
			while (!feof($fp)) {
				array_push($nameArray, trim(fgets($fp)));
			}
			print_r($nameArray);
			$_SESSION['nameArray'] = $nameArray;
			header("Location:gradePicker.php");
			// print_r($nameArray);	
		}
		?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
		<title>Login</title>
	</head>
	<body>
		<form action = "" method="post">
			<h2>Select Information</h2>
			<div class="textHead">Course Name(e.g., cmsc128): &nbsp;</div>
				<input type="text" name="className" required> <br/> <br/>
			<div class="textHead">Section(e.r., 0101): &nbsp;</div>
				<input type="text" name="classSection" required> <br/> <br/>
			<input type="submit">
		</form>
		 		
	</body>
</html>

<!-- idea
		create fun that will validate login
				also as param ask URL 
					header with URL -->