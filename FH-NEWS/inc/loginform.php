	<!-- Login Section -->
	<div class="container">

		<section id="login">
			<h2>Login</h2>
			<!-- Kontakt Formula -->
			<form action="index.php" method="POST" id="loginform"> 
				
				<div class="form-group">
					<!-- User  -->
					<label for="user">User</label>
					<input type="text" class="form-control" name="user" id="user" placeholder="User">
				</div>
				<div class="form-group">
					<!-- Password-->
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>

				<div class="form-group form-check">
					<input type="checkbox" name="stayloggedin" class="form-check-input" id="stayloggedin">
					<label class="form-check-label" for="stayloggedin">Angemeldet bleiben</label>
				</div>
				<!-- Button for log in -->

				<!-- pink button -->
				<button type="submit" class="btn btn-pink" name="button" id="button" value="login">Login </button>
			</form>
		</section>
	</div>
