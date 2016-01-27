<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Second HTML Form</title>
</head>
<body>
	<h2>Please submit the following information:</h2>
	<form method="GET" action="my_second_form.php">
		<div>
			<label for="firstname">First Name</label>
			<input id="firstname" name="firstname" type="text">
		</div>
		<div>
			<label for="lastname">Last Name</label>
			<input id="lastname" name="lastname" type="text">
		</div>
		<div>
			<label for="title">Title</label>
			<input id="title" name="title" type="text">
		</div>
		<div>
			<input type="submit">
		</div>
	</form>
</body>
</html>