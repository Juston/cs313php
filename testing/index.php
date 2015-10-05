<?php

// if form is submitted
if(!empty($_POST['submit']) && $_POST['submit'] == "Submit") {

	// Build list of checked values
	if(!empty($_POST['visited'])) {
		
		$list = "<ul>";
		// Loop through checked values and add to list
		foreach($_POST['visited'] as $checked) {
			$list .= "<li>".$checked."</li>";
		}
		$list .= "</ul>";
	}

	// Build form values to display
	$result = "<p>Name:<br>".$_POST['name']."</p><p>Email:<br>".$_POST['email']."</p><p>Major:<br>".$_POST['major']."</p><p>Visited:</p>".$list."<p>Comments:<br>".$_POST['comments']."</p>";

}

// Include the view
include "view.php";