<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");
include_once("config/db.conf.php"); 
include_once('lib/Db.php');
include_once('lib/User.php');
include_once('lib/News.php');
$Db = new Db($dbservername, $dbusername, $dbpassword, $dbname);
 
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>My RSS feed</title>';
    $rssfeed .= '<link>http://www.mywebsite.com</link>';
    $rssfeed .= '<description>This is an example RSS feed</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2020 mywebsite.com</copyright>';
 
 
    $allnews = $Db->getAllNews(); 
 
    foreach($allnews as $news) {
 
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $news->headline . '</title>';
        $rssfeed .= '<description>' . $news->message . '</description>';
        $rssfeed .= '<link>' . 'http://localhost/'  . '</link>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 //Searches subject for matches to pattern and replaces them with replacement.
    preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $rssfeed);

    echo $rssfeed;

?>
