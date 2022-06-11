<<?php 


session_start();


session_destroy();

header("location:loginForm.php");
		$_SESSION['isLogin']="0";


 ?>