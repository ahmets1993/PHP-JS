
<table class="table">
<tr>
<th>News</th>
<th>Message</th>
</tr>

<?php

$array = $Db->getAllNews(); 

foreach ($array as $news){
	echo "<tr>"; 
	echo "<td>$news->headline</td>";
	echo "<td>$news->message</td>";
	echo "</tr>"; 
}

?> 
</table> 



