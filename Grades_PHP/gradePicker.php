<?php session_start();?>
<?php 
	// if (isset($_SESSION['gradesAdded'])) {
		
	// 	$_SESSION['gradesRadioValue'] = $_POST;
	// 	header("Location:confirm.php");
	// } 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
		<title>Grade Submit</title>
	</head>
	<body>
		<h2>Grades Submission Form</h2>

		<?php 
			echo "<h1> Course: {$_SESSION['cName']}, Section: {$_SESSION['cSection']}</h1>";
		?>
		<form action="gradePickerAux.php" method="post">
			<table>
				<?php 	
						$letterGrades = array();
						if (isset($_SESSION['gradesRadioValue'])) {
							$letterGrades = $_SESSION['gradesRadioValue'];
							// print_r($letterGrades);
						}

						$array = $_SESSION['nameArray'];
						$radioValue = "";?>
						<?php
						foreach ($array as $key => $value):

							if(isset($letterGrades[$value])){
								$radioValue = $letterGrades[$value];
								
							}
							
							?>
						<tr><td><?=$value?></td>
							<td><input type="radio" name="<?=$value?>" <?php if($radioValue=="A"){echo'checked="checked"';}  ?> value="A" /> A</td>
							<td><input type="radio" name="<?=$value?>" <?php if($radioValue=="B"){echo'checked="checked"';}  ?> value="B" /> B</td>
							<td><input type="radio" name="<?=$value?>" <?php if($radioValue=="C"){echo'checked="checked"';}  ?> value="C" /> C</td>
							<td><input type="radio" name="<?=$value?>" <?php if($radioValue=="D"){echo'checked="checked"';}  ?> value="D" /> D</td>
						</tr>
				<?php endforeach;?>
			</table>
			<?php $_SESSION['gradesAdded'] = true; ?>
			 <p><input type="submit"></p>
		</form>
	</body>
</html>

