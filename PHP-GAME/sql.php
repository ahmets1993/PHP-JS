<?php 
class sql{

	
//-----------------------------------------------Login-------------------------------------
	function login()
	{
		$db = new PDO("mysql:host=localhost;dbname=ue4;charset=utf8","root","");
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		if(!$username || !$password){
			header("location:loginForm.php");
		}else{
			$user = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")->fetch();  
			if($user){
				$_SESSION['user']=$user;				
				$_SESSION['isLogin']="1";				
				header("location:profil.php");				
				var_dump($user);
			}
			else{
				$_SESSION['user']=$user;				
				$_SESSION['isLogin']="0";
				header("location:loginForm.php");
				echo "bilgiler hatali.";
			}
		}	
	}
//-----------------------------------------------Register-------------------------------------
	function register()
	{
		$db = new PDO("mysql:host=localhost;dbname=ue4;charset=utf8","root",""); 
		if($_POST){    
			$vorname = $_POST['vorname'];
			$nachname = $_POST['nachname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$isAdmin = $_POST['isAdmin'];		
			if($vorname == "" || $nachname == "" || $username == "" || $password == "" || $email == "" || $isAdmin == "" ){ 
				echo "Bitte Fühlen Sie die Formular Vollstandigt.";
			}else{
				$add=$db->prepare("INSERT INTO users SET vorname = ?,nachname = ?,username = ?,password = ?,email = ?,isAdmin = ?"); 
				$add->execute([$vorname,$nachname,$username,md5($password),$email,$isAdmin]);
				if($add){
					header("location:loginForm.php"); 
				}else{
					echo "Bir sorun olustu.";
				}
			}
		}
	}
//-----------------------------------------------Update-------------------------------------
	function update()
	{
		try{
			$connect = new PDO("mysql:host=localhost;dbname=ue4;charset=utf8","root","");
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "UPDATE users  SET vorname = :vorname, nachname = :nachname, password = :password, email = :email, isAdmin = :isAdmin WHERE username=:username";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					'vorname'=> $_POST['vorname'],
					'nachname'=> $_POST['nachname'],
					'password'=> md5($_POST['password']),
					'email'=> $_POST['email'],
					'isAdmin'=>$_POST['isAdmin'],
					'username' => $_POST['username']
				)
			);
			
			header("location:profil.php");
		}
		catch(PDOException $error){
			$error->getMessage();
		}
	}
}

?>