<?php
$imagename = $_GET['file'];
if($user->is_admin or $user->username === $Db->getImageUser($imagename)){
$Db->deleteImage($_GET['file']);
		}else{
			echo "You cannot do that!";
		}		

?>