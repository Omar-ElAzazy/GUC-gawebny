<?php

//UNDER CONSTRUCTION
// Session Init
session_start();
// Compression
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
	ob_start("ob_gzhandler");
 else
	ob_start();
// Enable Page Includes.
define("GAWEBNY", true);
// Init
require_once("system/db.php");

include('header.php');
#Page Include
$Page = str_repace(".","",htmlentities($_GET['s']));
$Page = $Page && file_exists("pages/".$Page.".php") ? $Page : "index";
include("pages/".$Page.".php");

include('footer.php');

?>
