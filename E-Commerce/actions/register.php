<?php

//register request

$newUser = new User(); 
if(isset($_POST['register-submit'])){ // submit


	if($_POST['password'] != $_POST['passwordRepeat'])
	{
		echo "Passwords are not same";
		return;
	}
	$newUser->vorname = $_POST['vorname'];
	$newUser->nachname = $_POST['nachname'];
	$newUser->username = $_POST['username'];
	$newUser->password = $_POST['password'];
	$newUser->email = $_POST['email'];
	$newUser->plz = $_POST['plz'];
	$newUser->ort = $_POST['ort'];
	$newUser->adresse  = $_POST['adresse'];
	$newUser->anrede = $_POST['anrede'];
	$newUser->profileImage = time(). '_' .$_FILES['profileImage']['name'];

	$target = 'profile_pics/'.$newUser->profileImage;	
	move_uploaded_file($_FILES['profileImage']['tmp_name'],$target); // save function for uploaded user profil image

	if(empty($newUser->vorname ) || empty($newUser->nachname) || empty($newUser->username) || empty($newUser->password) || empty($newUser->email) || empty($newUser->anrede)){
		echo "Mandatory fields not set"; 
	}
	else {
		$result = $Db->insertUser($newUser);
		if($result === true)
		{
			echo "You successfully create a user with username " . $newUser->username ;
		}
		else {
			echo "Couldnt create user with username: " . $newUser->username . "<br>";
		}
	}
}

?>

