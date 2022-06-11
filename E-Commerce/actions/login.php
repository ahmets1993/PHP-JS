<?php
$username = $_POST['username'];
$password = $_POST['password'];


$result = $Db->loginUser($username, $password);



if($result === true)

{
	echo "Login successful";
	$user = $Db->getUser($username); 
#	print_r($user);
	$_SESSION['user'] = $user->username; //save the username in session

} else{
	echo "Username and/or password invalid";
}

?>
