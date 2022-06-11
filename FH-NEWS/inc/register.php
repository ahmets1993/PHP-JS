<?php

if(isset($_POST['login'])){
	
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$email = $_POST['email'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	
	if(file_exists('users/' . $username .'.xml')){
		$errors[] = 'Username already exists';
		
	}
	if($username == ''){
		$errors[] = 'Username is blank';
	}
	
	if($email == ''){
		$errors[] = 'Email is blank';
	}
	if($password == '' || $c_password == ''){
		$errors[] = 'Password are blank';
	}
	if($password != $c_password){
		$errors[] = 'Passwords do not match';
	}
	if(count($errors) ==0){
		$xml = new SimpleXMLElement('<user></user>');
		$xml->addChild('password', md5($password));
		$xml->addChild('email', $email);
		$xml->asXML('users/' . $username .'.xml');
		header('Location: index.php');
		die;
	}
}








?>






<!DOCTYPE html>

<html>

<head>
	<title>Register</title>
	<style>
		
		.container {

			margin-top: 200px;
			
		}




	</style>
	
</head>
<body>
	<section id="login">
		<div class="container">
			<div class="login-top">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-sm-4">
						<h1>Register</h1>

						<form method="post" action="">
							


							
							<p>Username <input type="text" name="username" size="20" /></p>
							<p>Email <input type="text" name="email" size="20" /></p>
							<p>Password <input type="password" name="password" size="20" /></p>
							<p>Confirm Password <input type="password" name="c_password" size="20" /></p>
							<p><input type="submit" name="login" value="Register" /></p>
						</div>


					</div>
				</div>
			</div>
		</section>
		
	</body>
	</html>





