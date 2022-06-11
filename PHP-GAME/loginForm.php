<?php
include "header.php";
?>
<div id="loginForm1">
	<img src="img/fedaration.png">
	<p class="text-center">UNITED FEDERATION OF PLANETS</p>
	<p class="text-center">CRYPTIC LOGIN PROTOCOL</p>
<div id="loginForm2" class="text-center">
	<form action="login.php" method="POST">
		
		<table>
			<tr>
			<td>USERNAME: </td><td><input type="text" name="username" required></td>	
			</tr>
			<tr>
			<td>PASSWORD: </td><td><input type="password" name="password" required></td>	
			</tr>
			<tr>
			<td></td><td><input type="submit" id="loginButton" value="LOGIN"></td>	
			</tr>
			<tr>
			<td>
			</td>	
			</tr>
		</table>
	</form>
</div>	
</div>
</body>
</html>