<form id="php-results-form" action="." method="post">
	<div class="section_title">Which of the following apply?</div>
	<div class="checking">
		<input type="checkbox" name="car" id="car" value="car" />
		<label for="car"></label>
	  <div class="real_label">I own a car</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="house" id="house" value="house" />
		<label for="house"></label>
	  <div class="real_label">I own a house</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="school" id="school" value="school" />
		<label for="school"></label>
	  <div class="real_label">I'm going to school</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="debt-free" id="debt-free" value="debt-free" />
		<label for="debt-free"></label>
	  <div class="real_label">I am debt free</div>
	</div>

	<div class="section_title">Which of the following do you do with your free time?</div>
	<div class="checking">
		<input type="checkbox" name="program" id="program" value="program" />
		<label for="program"></label>
	  <div class="real_label">Program</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="video-games" id="video-games" value="video-games" />
		<label for="video-games"></label>
	  <div class="real_label">Video Games</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="movies" id="movies" value="movies" />
		<label for="movies"></label>
	  <div class="real_label">Movies</div>
	</div>
	<div class="checking">
		<input type="checkbox" name="read" id="read" value="read" />
		<label for="read"></label>
	  <div class="real_label">Read</div>
	</div>

	<div class="section_title">What operating system are you running?</div>
	<div class="checking">
		<input type="radio" name="operating-system" id="windows" value="windows" required/>
		<label for="windows"></label>
	  <div class="real_label">Windows</div>
	</div>
	<div class="checking">
		<input type="radio" name="operating-system" id="osx" value="osx" />
		<label for="osx"></label>
	  <div class="real_label">OSX</div>
	</div>
	<div class="checking">
		<input type="radio" name="operating-system" id="linux" value="linux" />
		<label for="linux"></label>
	  <div class="real_label">Linux</div>
	</div>
	<div class="checking">
		<input type="radio" name="operating-system" id="other" value="other" />
		<label for="other"></label>
	  <div class="real_label">Other</div>
	</div>

	<div class="section_title">Which of the following do you feel MOST comfortable with?</div>
	<div class="checking">
		<input type="radio" name="languages" id="htmlcss" value="htmlcss" required/>
		<label for="htmlcss"></label>
	  <div class="real_label">HTML and CSS</div>
	</div>
	<div class="checking">
		<input type="radio" name="languages" id="javascript" value="javascript" />
		<label for="javascript"></label>
	  <div class="real_label">JavaScript</div>
	</div>
	<div class="checking">
		<input type="radio" name="languages" id="php" value="php" />
		<label for="php"></label>
	  <div class="real_label">PHP</div>
	</div>
	<div class="checking">
		<input type="radio" name="languages" id="java" value="java" />
		<label for="java"></label>
	  <div class="real_label">Java</div>
	</div>

	<input name="submit" type="submit" value="Submit">
</form>

<form action="." method="post">
	<input name="submit" type="submit" value="View Results">
</form>