<?php
class Db 
{
	private $conn;

	function __construct($dbservername, $dbusername, $dbpassword, $dbname) {
		$this->connect($dbservername, $dbusername, $dbpassword, $dbname);
	}

	private function connect($dbservername, $dbusername, $dbpassword, $dbname)
	{
		// Create connection
		//pseudo-variable $this is available when a method is called from within an object context. $this is a reference to the calling object (usually the object to which the method belongs
		$this->conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}

	public function getUser($username)
	{
		//Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?")
		$sql = "SELECT username, vorname, nachname, email, is_admin, anrede, ort, plz, adresse,profileImage  FROM user WHERE username=?"; 
		$stmt = $this->conn->prepare($sql);

		//The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
		//the application binds the values to the parameters, and the database executes the statement
		$stmt->bind_param("s", $username);

		//Executes a query that has been previously prepared using the mysqli_prepare() function

		$stmt->execute();
		$result =  $stmt->get_result();
		//print_r($result);


		if ($result->num_rows == 1) {
			// output data of each row
			$row = $result->fetch_assoc(); //result is array- get the first line

			$user = new User(); 
			$user->username = $row["username"];
			$user->vorname = $row["vorname"];
			$user->nachname = $row["nachname"];
			$user->is_admin = $row["is_admin"];
			$user->email = $row["email"];
			$user->anrede = $row["anrede"];
			$user->ort = $row["ort"];
			$user->plz = $row["plz"];
			$user->adresse = $row["adresse"];
			$user->profileImage = $row["profileImage"];


				//Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?")
			$sql = "SELECT pic_name,name,preis,tags FROM picture WHERE username_fk=?"; 
			$stmt = $this->conn->prepare($sql);

		//The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
		//the application binds the values to the parameters, and the database executes the statement
			$stmt->bind_param("s", $username);

		//Executes a query that has been previously prepared using the mysqli_prepare() function

			$stmt->execute();
			$result =  $stmt->get_result();
		//print_r($result);



			// output data of each row
			while($row = $result->fetch_assoc()) {
				//print_r($row);


				$image = new Image();
				$image->filename = $row["pic_name"];
				$image->name = $row["name"];
				$image->preis = $row["preis"];
				$image->tag = $row["tags"];


			array_push($user->images,$image); //we put one object to user object
				//print_r($user_details);	
			}

		return $user;

	}
	return null;

}


public function updateUser($user)
{

		// insert user into database
	$sql = "update user set vorname=?, nachname=?, email=? where username =? " ;
		#echo $sql; 


	$stmt = $this->conn->prepare($sql);
	$stmt->bind_param("ssss",  $user->vorname, $user->nachname, $user->email, $user->username);

		//if there was no error
	$status = $stmt->execute(); 
	if ( $status === TRUE) {
		return true ;
	} else {
		return false;
	}
}


public function updatePassword($username, $password)
{

		// update user password into database
	$sql = "UPDATE user SET pwd=? where username=?" ;

	$hashed_password = $this->hashPassword($password); 

	$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
	$stmt->bind_param("ss",  $hashed_password, $username);

		//if there was no error
	$status = $stmt->execute(); 
	if ( $status === TRUE) {
		return true ;
	} else {
		return false;
	}
}

private function hashPassword($password){

		//hashoptions
		//11 iteration because of security
		$options = [
			'cost' => 11
		];
		//PASSWORD_BCRYPT is used to create new password hashes using the CRYPT_BLOWFISH algorithm. 60char long
		//
		#		echo "setting password : $user->password <br>" ; 
		$hashed_password =  password_hash($password, PASSWORD_BCRYPT, $options) ;
		#		echo "hash pw: '$hashed_password'<br>";
		return $hashed_password; 
	}

public function insertUser ($user)
{

	$hashed_password = $this->hashPassword($user->password); 

		// insert user into database
		$sql = "INSERT INTO user (username, pwd,vorname, nachname, email, anrede, plz, ort, adresse, profileImage) VALUES (?,?,?, ?, ?,?,?,?,?,?)" ;//, $vorname, $nachname, false)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("ssssssssss", $user->username,$hashed_password,$user->vorname, $user->nachname, $user->email, $user->anrede, $user->plz, $user->ort, $user->adresse, $user->profileImage);
		if ($stmt->execute() === TRUE) {
			return true;
		} else {
			return false;
		}

	}

	public function insertImage ($username, $imagename,$imagecommnet,$imagepreis,$imagetags)
	{


		// insert user into database
		$sql = "INSERT INTO picture (username_fk,pic_name,name,preis,tags) VALUES (?,?,?,?,?)" ;//, $vorname, $nachname, false)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("sssss", $username, $imagename,$imagecommnet,$imagepreis,$imagetags);
		if ($stmt->execute() === TRUE) {
			return true;
		} else {
			echo "error  $stmt->error";
			return false;
		}
	}

	public function getImageUser($imagename)
	{
		// insert user into database

		$sql = "SELECT username_fk from picture WHERE pic_name=?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("s",$imagename);
		$stmt->execute();
		$result =  $stmt->get_result();
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$username = $row['username_fk'];
		return $username;
		}else {
			return null;
		}
	}

	public function deleteImage ($imagename)
	{
		// insert user into database

		$sql = "DELETE from picture where pic_name =?" ;//, $vorname, $nachname, false)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("s",$imagename);

		if ($stmt->execute() === TRUE) {
			unlink("gallery/$imagename");
			unlink("upload_thumb/$imagename");
			return true;
		} else {
			echo "error  $stmt->error";
			return false;
		}
	}

	public function getPostFilter($tagName){ 
 
		  $search='gondor'; 
		$sql = "SELECT pic_name,name,preis,tags FROM picture WHERE tags LIKE '%".$tagName."%'";

		$stmt = $this->conn->prepare($sql);  
  
 

		$stmt->execute();
		$result =  $stmt->get_result();
		$row = $result->fetch_assoc();
		
		print_r($row);
}

	public function loginUser($username, $password)
	{

		$sql = "SELECT pwd from user WHERE username=?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("s", $username);


		//row contain password
		$stmt->execute();
		$result =  $stmt->get_result();
		if ($result->num_rows == 1) {
			// output data of each row
			//Fetch a result row as an associative array:
			$row = $result->fetch_assoc();
				//  	echo "row: " . $row["pwd"];
				//if find the actual password inside of $row["pwd"]
				if(password_verify($password, $row["pwd"])){
					return true;
				} else{
					return false;
				}
			
		}  else{

			// user not found
			return false;
		}
	}


	public function closeConnection()
	{
		$this->conn->close();

	}

	public function getUsers(){
		$array=array();
		$sql = "Select username, vorname, nachname, is_admin from user order by username ";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result =  $stmt->get_result();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$o = new User(); 
				$o->username = $row['username'];
				$o->vorname = $row['vorname']; 
				$o->nachname = $row['nachname'];
				$o->is_admin = $row['is_admin']; 

				array_push($array, $o);
			}
		} 
		return $array; 
	}	

	public function deleteUser($username)
	{

		$sql = "DELETE from user WHERE username=?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("s", $username);
		$stmt->execute();
	}


	public function makeAdminUser($username, $is_admin)
	{

		// update user password into database
		$sql = "UPDATE user SET is_admin=? where username=?" ;

		$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
		$stmt->bind_param("is",  $is_admin, $username);

		//if there was no error
		$status = $stmt->execute(); 
		if ( $status === TRUE) {
			return true ;
		} else {
			return false;
		}
	}

	public function createNews($news)
	{
		$sql = "insert into news (headline, message) values(?,?)" ;

		$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
		$stmt->bind_param("ss",  $news->headline, $news->message);

		//if there was no error
		$status = $stmt->execute();
		if ( $status === TRUE) {
			return true ;
		} else {
			return false;
		}
	}

	public function getAllNews(){
		$array=array();
		$sql = "Select id, headline, message from news order by id ";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result =  $stmt->get_result();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$o = new News(); 
				$o->id = $row['id'];
				$o->headline = $row['headline'];
				$o->message = $row['message']; 

				array_push($array, $o);
			}
		} 
		return $array; 
	}	

	public function getNews($id){
		$sql = "Select id, headline, message from news where id = ? ";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("s", $id); 
		$stmt->execute();
		$result =  $stmt->get_result();
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$o = new News(); 
			$o->id = $row['id'];
			$o->headline = $row['headline'];
			$o->message = $row['message']; 
			return $o; 
		}
	} 
}	

?>
