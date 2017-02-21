<html>

	<head>
		<title>Information Gathered</title>
	</head>

	<body>
		
				<form action="myphp.php" method="post">

		<table border="0">

		<tr>
			<td>First Name</td>
			<td align="center"><input type="text" name="firstname" size="30" /> </td>
		</tr>

		<tr>
			<td>Last Name</td>
			<td align="center"><input type="text" name="lastname" size="30" /></td>
		</tr>

		<tr>
			<td>Student ID</td>
			<td align="center"><input type="text" name="studentid" size="30" /></td>
		</tr>

		<tr>
		<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
		</tr>

		</table>
		</form>
		
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
