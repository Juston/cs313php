<form action="." method="post">
	<label for="name">Name</label><br>
	<input type="text" name="name" id="name">

	<br><br>

	<label for="email">Email</label><br>
	<input type="text" name="email" id="email">

	<br><br>

	<label for="major">Major</label><br>
	<input type="radio" name="major" value="Computer Science" require> Computer Science<br>
	<input type="radio" name="major" value="Web Development and Design"> Web Development and Design<br>
	<input type="radio" name="major" value="Computer information Technology"> Computer information Technology<br>
	<input type="radio" name="major" value="Computer Engineering"> Computer Engineering

	<br><br>

	<label>Have Visited</label><br>
	<input type="checkbox" name="visited[]" value="North America"> North America <br>
	<input type="checkbox" name="visited[]" value="South America"> South America <br>
	<input type="checkbox" name="visited[]" value="Europe"> Europe <br>
	<input type="checkbox" name="visited[]" value="Asia"> Asia <br>
	<input type="checkbox" name="visited[]" value="Austalia"> Austalia <br>
	<input type="checkbox" name="visited[]" value="Africa"> Africa <br>
	<input type="checkbox" name="visited[]" value="Antartica"> Antartica

	<br><br>

	<label for="comments">Comments</label><br>
	<textarea id="comments" name="comments"></textarea>

	<br><br>

	<input type="submit" name="submit" value="Submit">
	
</form>