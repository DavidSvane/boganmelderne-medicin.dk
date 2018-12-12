<div class="standard_width" id="isbn_search">
	<br /><h1>ISBN</h1>
	<form method="get" action="<?php echo htmlspecialchars(stripslashes(trim($_SERVER["PHP_SELF"])));?>">
		<input type="text" name="isbn" id="isbn" placeholder="Skriv ISBN og klik søg eller enter!" class="userinput" autofocus="true" required />
		<input type="submit" value="SØG" class="submitknap">
	</form>
	<br />
	<?php
		if (!empty($_GET['isbn'])) {
			if (file_exists('files/book/' . $_GET['isbn'] . '.php')) {
				require 'files/book/' . $_GET['isbn'] . '.php';
			} else {
				echo '<p id="error">Bogen blev ikke fundet!<br />Dette kan fx skyldes at den pågældende version ikke er anmeldt.</p>';
			}
		}
	?>
	<br /><br /><br />
</div>