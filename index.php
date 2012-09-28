<?php

//UNDER CONSTRUCTION

session_start();

$dhost = "localhost"; // DB Server
$duser = "root"; // DB User
$dpass = ""; // DB Password
$dbname = ""; // DB Name

$con = @mysql_connect($dhost,$duser,$dpass);
$selectdb = @mysql_select_db($dbname,$con);

$type = $_GET['s'];
include('header.php');
switch($type)
{
	case 'add': include('add.php');break;
	case 'search': include('search.php');break;
	default: include('home.php');
}
include('footer.php');

?>
