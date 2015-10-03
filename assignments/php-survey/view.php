<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/styles.css">
	<script type="text/javascript" src="graphing.js"></script>
</head>
<body>
	<header>
		<a href="/" title="assignements">Home</a>
		<a href="/assignments/" title="assignements">Assignments</a>
	</header>
	<section class="page">
		<h1>Php Survey Assignment</h1>
		<hr>
		<?php 

			if(!empty($_SESSION['form-submitted']) && $_SESSION['form-submitted'] == 'yes') {
				include "results.php";
			}
			else {
				include "form.php"; 
			}

		?>

	</section>
</body>
</html>