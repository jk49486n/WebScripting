<html>

	<head>
		<title>Information Gathered</title>
	</head>

	<body>

		<?php

		echo "<p>Data processed</> </br>";

		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$studentID = $_POST['studentid'];

		echo $firstName . "</br>";
		echo $lastName . "</br>";
		echo $studentID . "</br>";

		?>

	</body>
</html>