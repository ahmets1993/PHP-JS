<h1 class="text-center" style="margin-top: 50px;">USER ADMINISTRATION</h1>
<div class="container user_administration">

<table class ="table">
<tr>
<th>username</th>
<th>vorname</th>
<th>nachname</th>
<th>delete</th>
<th>Admin</th>
<th>Reset Password</th>
</tr>

<?php

if($user->is_admin ===1) {//only admin can access
	if(isset($_GET['deleteUser'])){
		$Db->deleteUser($_GET['deleteUser']);
	}
	if(isset($_GET['makeadmin'])){
		$Db->makeAdminUser($_GET['makeadmin'], 1);
	}
	if(isset($_GET['makeuser'])){
		$Db->makeAdminUser($_GET['makeuser'], 0 );
	}
	if(isset($_GET['resetPw'])){
		$password_string = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
		$newpassword = substr(str_shuffle($password_string), 0, 12);
		$Db->updatePassword($_GET['resetPw'], $newpassword );

		$u = $Db->getUser($_GET['resetPw']); 

		$headers = "From: password@pic-service.com";
		mail($u->email, "new password", "Your new password is: $newpassword", $headers); 
    
	}


	$users = $Db->getUsers(); 

	foreach ( $users as  $u ) {
		echo "<tr>"; 
		echo "<td>$u->username</td>";
		echo "<td>$u->vorname</td>";
		echo "<td>$u->nachname</td>";
		echo "<td><a href=\"?page=useradmin&deleteUser=$u->username\">delete</a></td>"; 
		if($u->is_admin === 1){
			echo "<td><a href=\"?page=useradmin&makeuser=$u->username\">Remove Admin Permission</a></td>"; 
		} else {
			echo "<td><a href=\"?page=useradmin&makeadmin=$u->username\">Add Admin Permission</a></td>"; 
		}
		echo "<td><a href=\"?page=useradmin&resetPw=$u->username\">Send new Password</a></td>"; 
		echo "</tr>";  
	}
} else {
	echo "Computer says no"; 
}

?> 
</table> 
</div>