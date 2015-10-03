<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>
	<header>
		<a href="/" title="assignements">Home</a>
		<a href="/assignments/" title="assignements">Assignments</a>
	</header>
	<section class="page">
		<?php 
			if(!empty($result)) {
				echo $result;
			} else {
				include "form.php";
			} 
		?>
	</section>
</body>
</html>