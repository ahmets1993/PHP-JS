

<?php
include "header.php";
?>
<div id="loginForm1">

	<img src="img/fedaration.png">
	<p class="text-center">UNITED FEDERATION OF PLANETS</p>
	<p class="text-center">CRYPTIC REGISTER PROTOCOL</p>
<div id="loginForm2" class="text-center">

	<form action="register.php" method="POST">
		
		<table>
			<tr>
			<td>VORNAME: </td><td><input type="text" name="vorname" required></td>	
			</tr>
			<tr>
			<td>NACHNAME: </td><td><input type="text" name="nachname" required></td>	
			</tr>
			<tr>
			<td>USERNAME: </td><td><input type="text" name="username" required></td>	
			</tr>
			<tr>
			<td>PASSWORD: </td><td><input type="password" name="password" required></td>	
			</tr>
			<tr>
			<td>E-MAIL: </td><td><input type="email" name="email" required></td>	
			</tr>
			<tr>
			<td>IS_ADMIN</td><td><input type="text" name="isAdmin" required></td>	
			</tr>
			<tr>
			<td></td><td><input type="submit" id="registerButton" value="REGISTER"></td>	
			</tr>
		</table>
	</form>
</div>	
</div>
</body>
</html>