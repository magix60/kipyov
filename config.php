<?php 
	function dbcon($host, $db, $user, $pass){
		mysql_connect("$host","$user","$pass");
		@mysql_select_db($db) or die("Unable to select database");
	}
?>