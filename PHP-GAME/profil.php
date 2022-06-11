
<?php
include "header.php";
?>
	

<?php
 
 
if(isset($_SESSION['user'])){						//session user dan gelen bilgileri aliyor assadada yazdiriyor iste anlarsin onu

	?>


<div id="loginForm1">

	<img src="img/fedaration.png">
	<p class="text-center">UNITED FEDERATION OF PLANETS</p>
	<p class="text-center">CRYPTIC MEMBER INFOS</p>
<div id="loginForm2" class="text-center">

<form>
	<table> 
		
<tr><?php echo "Username: ".$_SESSION['user']['username'].'</br>'?></tr>  
<tr><?php echo "Vorname: ".$_SESSION['user']['vorname'].'</br>'?></tr>
<tr><?php echo "Nachname: ".$_SESSION['user']['nachname'].'</br>'?></tr>
<tr><?php echo "E-Mail: ".$_SESSION['user']['email'].'</br>'?></tr>
<tr><?php echo "IsAdmin: ".$_SESSION['user']['isAdmin'].'</br>'?></tr>



	</table> 



</form>
<form action="logout.php" method="POST" class="logButton">
		<table>
			<tr>
			<td></td><td><input  type="submit" id="registerButton" value="LOGOUT"></td>	
		</table>
	</form>
	<form action="updateForm.php" method="POST" class="updateButton">
		<table>
			<tr>
			<td></td><td><input  type="submit" id="updateButton" value="UPDATE PROFILE"></td>	
		</table>
	</form>
</div>	
</div>

<?php

}else{


echo '<p style="color: white;"> PLEASE LOGIN OR REGISTER</p>'; // eger giris yapilmamis ise profil sayfasinda bu yazi yazcak..

}
?>





