<?php

//update profile
if(isset($_POST['password']) )
{

	if(!empty($_POST['password']) ) {
		if($_POST['password'] === $_POST['passwordRepeat']){
			$oldpassword = $_POST['oldpassword'];

			$result = $Db->loginUser($user->username, $oldpassword);
			if($result === true){
				$Db->updatePassword($user->username, $_POST['password']);
				echo "Password updated. "; 
			}
			else {
				echo "Old password wrong. "; 
				return; 
			}
		} 
		else {
			echo "Passwords dont match. ";
			return;
		}
	}
}

if(!empty($_POST['vorname']) && !empty($_POST['nachname']) && !empty($_POST['email'])){

	$user->vorname = $_POST['vorname'];
	$user->nachname = $_POST['nachname'];
	$user->email = $_POST['email'];

	$result2 = $Db->updateUser($user);


	if($result2 === true)
	{
		echo "Profile updated for " . $user->username ;
	}
	else {  
		echo "ERROR! Couldnt update user with username: " . $user->username . "<br>";
	}
}else {
	echo "Personal data not updated"; 
}
?>
