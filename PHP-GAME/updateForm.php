 



<?php
include "header.php";
?>
<div id="loginForm1">

	<img src="img/fedaration.png">
	<p class="text-center">UNITED FEDERATION OF PLANETS</p>
	<p class="text-center">CRYPTIC UPDATE PROTOCOL</p>
<div id="loginForm2" class="text-center">

	<form action="update.php" method="POST">
		<input type="hidden" name="username" value="<?php echo $_SESSION['user']['username']?> ">
		<table>
			<tr>
			<td>VORNAME: </td><td><input type="text" name="vorname" required></td>	
			</tr>
			<tr>
			<td>NACHNAME: </td><td><input type="text" name="nachname" required></td>	
			</tr>
			 
			<tr>
			<td>PASSWORD: </td><td><input type="password" name="password" required></td>	
			</tr>
			<tr>
			<td>E-MAIL: </td><td><input type="text" name="email" required></td>	
			</tr>
			<tr>
			<td>IS_ADMIN</td><td><input type="text" name="isAdmin" required></td>	
			</tr>
			<tr>
			<td></td><td><input type="submit" id="registerButton" value="UPDATE"></td>	
			</tr>
		</table>
	</form>
</div>	
</div>
</body>
</html>