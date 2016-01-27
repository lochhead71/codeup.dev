<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Multiple Choice Test</title>
	<style>
		h1 {
			background-color: salmon;
			text-transform: 			
		}

	</style>
</head>
<body>
	<h2>Multiple Choice Test</h2>
	<form method="POST" action="multipl_choice_test.php">
		<p>How many cohorts has CodeUp already graduated?</p>
		<label><input type="radio" name="no_grad" value="1">One</label>
		<label><input type="radio" name="no_grad" value="2">Two</label>
		<label><input type="radio" name="no_grad" value="3">Three</label>
		<label><input type="radio" name="no_grad" value="4">Four</label>
		<br>
		<hr>
		<p>How many are currently enrolled?</p>
		<label><input type="radio" name="no_enroll" value="1">One</label>
		<label><input type="radio" name="no_enroll" value="2">Two</label>
		<label><input type="radio" name="no_enroll" value="3">Three</label>
		<label><input type="radio" name="no_enroll" value="4">Four</label>
		<br>
		<hr>
		<p>What coding languages are you interested in?</p>
		<label><input type="checkbox" id="lang1" name="lang[]" value="linux">Linux</label>
		<label><input type="checkbox" id="lang2" name="lang[]" value="apache">Apache</label>
		<label><input type="checkbox" id="lang3" name="lang[]" value="mysql">MySQL</label>
		<label><input type="checkbox" id="lang4" name="lang[]" value="php">PHP</label>
		<br>
		<hr>
		<button type:"submit">Submit</button>
	</form>
	<br>
	<hr>
	<h2>Select Testing</h2>
	<form>
		<label for="happy">Are you happy?</label>
		<select id="happy" name="happy">
			<option value="1">yes</option>
			<option value="0"selected>no</option>
		</select>
		<br>
		<label for="knowit">Do you know it?</label>
		<select id="knowit" name="knowit">
			<option value="1">yes</option>
			<option value="0" selected>no</option>
		</select>
		<br>
		<label for="showit">Do you really want to show it?</label>
		<select id="showit" name="showit">
			<option value="1">yes</option>
			<option value="0" selected>no</option>
		</select>
		<br> 
		<p>
		</p>
		<button type="submit">Clap Your Hands</button>
		<br>
		<label for="languages">What coding languages are you interested in?</label>
		<select id="languages" name="languages[]" multiple>
			<option selected disabled>Pick One</option>
			<option value="1">Linux</option>
			<option value="2">Apache</option>
			<option value="3">MySQL</option>
			<option value="4">PHP</option>
		</select>
	</form>
</body>
</html>