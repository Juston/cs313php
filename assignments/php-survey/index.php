<?php
session_start();

$file = 'results.json';
$file_content = file_get_contents($file);

$decoded = json_decode($file_content, true);

if(!empty($_POST['submit']) && $_POST['submit'] == 'Submit') {

	// Save results to file

	if(!empty($_POST['car'])) {
		$decoded[$_POST['car']]++;
	}
	if(!empty($_POST['house'])) {
		$decoded[$_POST['house']]++;
	}
	if(!empty($_POST['school'])) {
		$decoded[$_POST['school']]++;
	}
	if(!empty($_POST['debt-free'])) {
		$decoded[$_POST['debt-free']]++;
	}

	if(!empty($_POST['program'])) {
		$decoded[$_POST['program']]++;
	}
	if(!empty($_POST['video-games'])) {
		$decoded[$_POST['video-games']]++;
	}
	if(!empty($_POST['movies'])) {
		$decoded[$_POST['movies']]++;
	}
	if(!empty($_POST['read'])) {
		$decoded[$_POST['read']]++;
	}

	if(!empty($_POST['operating-system'])) {
		$decoded[$_POST['operating-system']]++;
	}
	if(!empty($_POST['languages'])) {
		$decoded[$_POST['languages']]++;
	}

	$content = json_encode($decoded);

	$open_file = fopen($file,"w");
	
	fwrite($open_file, $content);
	fclose($open_file);

	// Set session variable so that when they return they won't vote again
	$_SESSION['form-submitted'] = 'yes';
}
elseif(!empty($_POST['submit']) && $_POST['submit'] == 'View Results') {
	$view_results = 664534;
}

include "view.php";
