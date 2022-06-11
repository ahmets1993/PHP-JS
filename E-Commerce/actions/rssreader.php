<?php

if(isset($_POST['link'])) {//if link is set
	$link = $_POST['link']; 
	$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml'))); //Creates and returns a stream context

	$content = file_get_contents($link, false, $context); //loads the content from the url

	$xml = simplexml_load_string($content);//parse the content
	//print_r($xml->channel->item);

if($xml->channel) // RSS if there is a channel
{
	    echo "<table class =table-hover><tr><td>Title</td><td>Content</td> </tr>"; 

    foreach( $xml->channel->item as $item) { //for each item
    	echo "<tr>";
    	echo "<td><a href='$item->link'>" . $item->title . "</td></a>";  //the title is the link
      	echo "<td>"  . $item->description . "</td>"; //desciption
    	echo "</tr>";
  }
  echo "</table>";
}
else{ //Atom if ther is an entry
   echo "<table class =table-hover><tr><td>Title</td><td>Content</td> </tr>";

    foreach( $xml->entry as $entry) { //for each entry
      echo "<tr>";
      echo "<td><a href='$entry->link'>" . $entry->title . "</td></a>";  //entry is the link
        echo "<td>"  . $entry->content . "</td>";  //content
        echo "";
      echo "</tr>";
  }
  echo "</table>";
}

}

//sleep(10);
?> 
