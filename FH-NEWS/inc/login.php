<?php

session_start();

# Read XML File
if (file_exists('config/user.xml')) {
	$userxml = simplexml_load_file('config/user.xml');
} else {
	exit('Konnte test.xml nicht öffnen.');
}

# Check Logout Button was clicked
if (!empty($_GET['menu']) && $_GET['menu'] == 'logout' ) {
	logout();
}


# Check login cookie
if(!empty($_COOKIE['logincookie'])){
	$_SESSION['user'] = $_COOKIE['logincookie'];
}


	# restore user details 
if(!empty($_SESSION['user'])){
	foreach($userxml->children() as  $xuser) {
		$user = trim($xuser->username); 

		if($user == $_SESSION['user']){
			$user_name = $user; 
			$user_last =  trim($xuser->lastname);
			$user_first =  trim($xuser->firstname);
			$user_type =  trim($xuser['type']);
		}
	}
}


	# authenticate user
if(!empty($_POST['user']) && !empty($_POST['password'])){
	$password = $_POST['password']; 

	foreach($userxml->children() as  $xuser) {
		$user = trim($xuser->username); 

		if($user == $_POST['user']){
			$userpass = trim($xuser->password);	
			if($userpass == $_POST['password']) {	
				$_SESSION['user'] = $user;
			  // echo '<h1>Login successful</h1>';
				$user_name = $user; 
				$user_last =  trim($xuser->lastname);
				$user_first =  trim($xuser->firstname);
				$user_type =  trim($xuser['type']);
				header('Location: index.php');
			}
		}
	}
	if(!empty($_POST['stayloggedin']) && $_POST['stayloggedin'] == true){
		setcookie( "logincookie", $user, strtotime( '+1 year' ) );
	}

} 


function logout() {
	$menu = null;
	setcookie( "logincookie", null, strtotime( '+1 year' ) );
	$_SESSION['user'] = null;
	session_destroy();
}

?> 
