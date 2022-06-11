<?php

//news request

$news = new News(); 
if(isset($_POST['news-submit'])){


	$news->headline = $_POST['headline'];
	$news->message = $_POST['message'];


	if(empty($news->headline ) || empty($news->message)){
		echo "Mandatory fields not set"; 
	}
	else {
		$result = $Db->createNews($news);
		if($result === true)
		{
			echo "You successfully created a news" ;
		}
		else {
			echo "Couldnt create news";
		}
	}
}

?>

