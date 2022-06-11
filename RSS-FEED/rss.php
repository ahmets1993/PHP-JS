<?php include "header.php"; ?>



<div class="titel1 container">
	<form action="rss.php" method="POST">
		<input type="text" name="feed">
		<input type="submit" name="send" value="BRING ME ARTICLES">-
	</form>
</div>
</body>
</html>

<?php 

if($_POST)
{
	$html = $_POST['feed'];
	$xml =simplexml_load_file($html);
	foreach ($xml->channel->item as $itm) {
		$title = $itm->title;
		$description = $itm->description;
		$image = $itm->image->url;
		$link = $itm->link;
		echo "<div class='container'>";
		echo "<h3>$title</h3><p>$description</p><a href='$link'>Zum Artikel</a><hr/>";
		echo "</div>";
	}

}


?>



