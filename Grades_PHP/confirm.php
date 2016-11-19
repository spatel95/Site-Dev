<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
		<title>Grade Confirmation</title>
	</head>
	<body>
		<?php //error_reporting(E_ALL ^ E_WARNING); ?>
		<h2>Grades to Submit</h2>
		<table>
			<tr> <td class="heading"> Name </td><td class="heading"> Grade </td></tr>
			<?php $gradeArray = $_SESSION['gradesRadioValue'] ?>

			<?php foreach ($gradeArray as $key => $value):?>
				<tr><td><?=$key?></td> <td><?=$value?></td></tr>
			<?php endforeach; ?>
		</table>

		<form action="polka.php">
			<p> <input type="submit" value="Submit Grades"/> </p> 
			
		</form>
		<form action="gradePicker.php">
			<!-- <input type="button" value="Back" /> -->
			<button onclick="location.href='gradePicker.php';">Back</button>
		</form>

	</body>
</html>