<?php

if(!empty($_POST['submit']) && $_POST['submit'] == "Submit") {


	if(!empty($_POST['visited'])) {
		$list = "<ul>";
		foreach($_POST['visited'] as $checked) {
			$list .= "<li>".$checked."</li>";
		}
		$list .= "</ul>";
	}

	$result = "<p>Name:<br>".$_POST['name']."</p><p>Email:<br>".$_POST['email']."</p><p>Major:<br>".$_POST['major']."</p><p>Visited:</p>".$list."<p>Comments:<br>".$_POST['comments']."</p>";

}


include "view.php";