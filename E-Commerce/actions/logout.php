<?php 
if(isset($_SESSION) && isset($_SESSION['user'])) {
	unset($_SESSION['user']);
}

?>
