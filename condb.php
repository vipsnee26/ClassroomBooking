<?php
$host = "localhost";
$username = "root";
$password = "abc123**";
$objConnect = mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db("classroombookingdb")
?>
