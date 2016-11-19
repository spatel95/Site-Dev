<!DOCTYPE html>
	<html>
		<head>
			<title>Order Confirmation</title> 
			 <link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
					</head>
		<body>
			<div>
				<?php 
					$firstName = getPost("firstName");
					$lastName = getPost("lastName");
					$email = getPost("email");
					$delivery = getPost("delivery");

					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  						$email = "Invalid email format"; 
					}	

					if (isset($_POST["softwareList"])) {
						$softwareList = $_POST["softwareList"];
					}else{
						$softwareList[0] = "none";
					}

					if (isset($_POST["description"])) {
						$testBox = $_POST["description"];
					}else{
						$testBox = "";
					}

					function getPost($v){
						if(isset($_POST[$v])){
							return $_POST[$v];
						}else{
							return "No Info Provided";
						}
					}
				?>
			</div>
			<div id="borderProc">
				<h1 id="head">Order Confirmation</h1>


				<p>
					<div id="subTitle"> Lastname: </div> <?=$lastName?>&nbsp;&nbsp;
					<div id="subTitle"> Firstname:</div> <?= $firstName?>
							<br></br>
					<div id="subTitle"> Email:    </div> <?= $email?>&nbsp;&nbsp;
				</p>

				<p>
					<div id="subTitle">Shipping Method:</div> <?= $delivery?>
				</p>

				<p>
					<table>
						<tbody>
							<tr><td id="subNoLine"> Software </td> <td id="subNoLine"> Cost </td></tr>
							<?php 
								include 'softwares.php';
								$total = 0; 
								foreach ($softwareList as $key => $value):
								$total = $total + $softwares [$value]; ?>
								<tr> <td><?=$value?></td> <td>$<?=$softwares[$value]?> </td></tr>
							<?php endforeach; ?>
							<tr><td id="subNoLine">Total</td> <td id="subNoLine">$<?=$total?></td></tr>

						</tbody>

					</table>
				</p>

				<p>
					<div id="subNoLine"> Order Specification: </div>
					<?php echo nl2br($testBox)?>
				</p>
			</div>
		</body>
	</html>