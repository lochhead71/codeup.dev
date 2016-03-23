<?php

	if (Input::has('name') && Input::get('name')  != ""
		&& Input::has('location') && Input::get ('location') != ""
		&& Input::has('date_established') && Input::get('date_established') != ""
		&& Input::has('area_in_acres') && Input::get('area_in_acres') != ""
		&& Input::has('image_url') && Input::get('image_url') != ""
		&& Input::has('description') && Input::get('description') != "")
	{
		$name = Input::get('name');
		$location = Input::get('location');
		$date_established = Input::get('date_established');
		$area_in_acres = Input::get('area_in_acres');
		$image_url = Input::get('image_url');
		$description = Input::get('description');

		$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, image_url, description) VALUES (:name, :location, :date_established, :area_in_acres, :image_url, :description)');
	    $stmt->bindValue(':name',  $name,  PDO::PARAM_STR);
	    $stmt->bindValue(':location',  $location,  PDO::PARAM_STR);
	    $stmt->bindValue(':date_established',  $date_established,  PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',  $area_in_acres,  PDO::PARAM_STR);
	    $stmt->bindValue(':image_url',  $image_url,  PDO::PARAM_STR);
	    $stmt->bindValue(':description',  $description,  PDO::PARAM_STR);
	    $stmt->execute();
	}

?>

	<!-- The Modal -->
<div id="addModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <form method="POST" action="national_parks.php">
    	<label for="name">Park Name</label>
    	<input type="text" name="name" id="name">
    	<label for="location">Location</label>
    	<input type="text" name="location" id="location">
    	<label for="date_established">Date established</label>
    	<input type="text" name="date_established" id="date_established">
    	<label for="area_in_acres">Area in acres</label>
    	<input type="text" name="area_in_acres" id="area_in_acres">
    	<label for="image_url">URL of image</label>
    	<input type="text" name="image_url" id="image_url">
    	<label for="description">Description</label>
    	<input type="text" name="description" id="description">
    	<button type="submit">Submit</button>	
    </form>
  </div>

</div>