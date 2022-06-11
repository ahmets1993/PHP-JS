<?php

//Init session and load user with every request
session_start(); 

include_once "config/db.conf.php"; //configuration of DB connection

//$user ; 
//we need to check for logout page in the beginning.
if(isset($_GET['page']) && ($_GET['page'] == 'logout')) { //otherwise user can see the logged in navigation bar
echo "LOGOUT"; 
	include "actions/logout.php";
	unset($_GET['page'] );  //unset the parameter to display home for anonymous user
}

include_once('lib/Db.php');
include_once('lib/User.php');
include_once('lib/News.php');
include_once('lib/Image.php');

$Db = new Db($dbservername, $dbusername, $dbpassword, $dbname);

if(isset($_SESSION['user'])){
$user = $Db->getUser($_SESSION['user']);
	
}
if (isset($_GET['action'])) {
	$action = $_GET['action'];
	if($action == 'login')
	{
		include "actions/login.php";
	}
	else if($action == 'register'){
		include "actions/register.php"; 
	}
	else if($action =='updateProfile'){
		include "actions/update.php"; 
	}	
	else if($action =='createNews'){
		include "actions/addnews.php"; 
	}	
	else if($action == 'upload'){
		include "actions/upload.php"; 
	} 
	else if($action == 'removeImage'){
		include "actions/deleteImage.php";
	}

	else if($action == 'mybag'){
		include "actions/mybag.php";
	}


}

include "inc/header.php";
include "inc/navbar.php";


if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if($page == 'home')
	{
		include "inc/home.php";
	}else if ($page == 'gallery')
	{
		include "inc/gallery.php";
	}
	else if ($page == 'profil')
	{
		include "inc/profil.php";
	}
	else if ($page == 'help')
	{
		include "inc/help.php";
	}
	else if ($page == 'mybag')
	{
		include "inc/mybagform.php";
	}
	else if ($page == 'aboutus')
	{
		include "inc/aboutus.php";
	}

	else if ($page == 'login')
	{
		include "inc/loginForm.php";
	}

	else if ($page == 'register')
	{
		include "inc/registerForm.php";
	}

	else if ($page == 'update')
	{
		include "inc/updateForm.php";
	}
	else if ($page == 'useradmin')
	{
		include "inc/useradmin.php";
	}
else if ($page == 'impressum')
	{
		include "inc/impressum.php";
	}
	
else if ($page == 'news')
	{
		include "inc/news.php";
	}
else if ($page == 'createNews')
	{
		include "inc/createNews.php";
	}
	else if ($page == 'feed')
	{
		include "inc/feed.php";
	}


} else {
	include "inc/home.php";
}

include "inc/footer.php";
$Db->closeConnection(); //close the connection
?>




