	<!-- Kontakt Section -->
	<div class="container">

		<section id="kontakt">
			<h2>Kontakt</h2>
			<!-- Kontakt Formula -->
			<form action="index.php" method="POST" id="messagebox"> 
				<div class="form-group"> 

					<!-- Geschlecht auswählen -->
					<label for="anrede">Anrede :</label>
					<select name="anrede" id="anrede" class="form-control">
						<option value="Herr">Herr</option>
						<option value="Frau">Frau</option>
					</select>
				</div> 

				<div class="form-group">
					<!-- Absender Name -->
					<label for="name">Name :</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Vorname Nachname">
				</div>

				<div class="form-group"> 
					<!-- Absender Email -->
					<label for="e-mail">E-mail :</label>
					<input type="email" class="form-control" name="e-mail" id="e-mail" placeholder="name@example.com">
				</div>

				<div class="form-group">
					<!-- Inhalt der Nachricht -->
					<label for="nachricht">Nachricht :</label>
					<textarea name="nachricht" class="form-control" id="nachricht"> </textarea>
				</div>
				<!-- Button zum Absenden der Nachricht -->

				<!-- pink button -->
				<button type="submit" class="btn" name="button" id="button" value="Nachricht absenden">Nachricht absenden </button>
			</form>
		</section>
	</div>