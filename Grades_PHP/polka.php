<?php session_start() ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Submission</title>
	</head>
	<body>
		<h2>Grades Submitted and E-Mail Confirmation Sent</h2>
		<h2>This is Submission #<?= $_SESSION['submissionCounter']?></h2>
		<?php 
			session_destroy();
			header("Refresh: 3; URL=http://leekspin.com");
			$_SESSION['submissionCounter'] = $_SESSION['submissionCounter']+1;
		?>
	</body>
</html>