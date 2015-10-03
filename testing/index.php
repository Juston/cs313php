<?php

if(!empty($_POST['submit']) && $_POST['submit'] == "Submit") {


	if(!empty($_POST['visited'])) {
		$list = "<ul>";
		foreach($_POST['visited'] as $checked) {
			$list .= "<li>".$checked."</li>";
		}
		$list .= "</ul>";
	}

	$result = "<p>".$_POST['name']."</p><p>".$_POST['email']."</p><p>".$_POST['major']."</p>".$list."<p>".$_POST['comments']."</p>";

}


include "view.php";