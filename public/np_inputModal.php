<?php
	
	$errors = [];

	if (Input::get('name', '')  != ""
		&& Input::get('location', '') != ""
		&& Input::get('date_established', '') != ""
		&& Input::get('area_in_acres', '') != ""
		&& Input::get('image_url', '') != ""
		&& Input::get('description', '') != "")
	{
		try {
			$name = Input::getString('name');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$location = Input::getString('location');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$date_established = Input::getDate('date_established');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$area_in_acres = Input::getNumber('area_in_acres');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$image_url = Input::getString('image_url');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$description = Input::getString('description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		if (count($errors) == 0)
		{
			$status = true;
			$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, image_url, description) VALUES (:name, :location, :date_established, :area_in_acres, :image_url, :description)');
		    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
		    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
		    $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
		    $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
		    $stmt->bindValue(':image_url', $image_url, PDO::PARAM_STR);
		    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
		    $stmt->execute();
	    }
	} else if ($_POST){
		$errors[] = 'Incomplete information...';
	}

?>

	<!-- The Modal -->
<div id="addModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <form method="POST" action="national_parks.php">
    	<label for="name">Park Name</label>
    	<input type="text" name="name" id="name" value="<?= count($errors) != 0 ? Input::get('name', '') : '' ?>">
    	<label for="location">Location</label>
    	<input type="text" name="location" id="location" value="<?= count($errors) != 0 ? Input::get('location', '') : '' ?>">
    	<label for="date_established">Date established</label>
    	<input type="text" name="date_established" id="date_established" value="<?= count($errors) != 0 ? Input::get('date_established', '') : '' ?>">
    	<label for="area_in_acres">Area in acres</label>
    	<input type="text" name="area_in_acres" id="area_in_acres" value="<?= count($errors) != 0 ? Input::get('area_in_acres', '') : '' ?>">
    	<label for="image_url">URL of image</label>
    	<input type="text" name="image_url" id="image_url" value="<?= count($errors) != 0 ? Input::get('image_url', '') : '' ?>">
    	<label for="description">Description</label>
    	<input type="text" name="description" id="description" value="<?= count($errors) != 0 ? Input::get('description', '') : '' ?>">
    	<button type="submit">Submit</button>	
    </form>
  </div>

</div>