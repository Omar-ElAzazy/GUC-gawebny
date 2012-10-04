<?php
// Disallow direct page loads.
if(!defined("GAWEBNY"))
	exit;

$mysqlCon = @mysql_connect("localhost","root","localhostess");
$mysqlDB = @mysql_select_db("gawebny",$mysqlCon);

?>
