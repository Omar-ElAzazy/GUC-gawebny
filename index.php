<?php

//UNDER CONSTRUCTION
// Session Init
session_start();
error_reporting(0);
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
$Page = str_replace(".","",htmlentities($_GET['s']));
$Page = $Page && file_exists("pages/$Page.php") ? $Page : "index";
// Component Version Check
if(file_exists("version/$Page.php")) {
	// Retrieve Version File
	include("version/$Page.php");
	// Check Locally Installed Version
	$Query = mysql_query("SELECT version FROM components WHERE compid = $ComponentID");
	$InstalledVersion = mysql_result($Query,0,"version");
	// Update if needed
	if($InstalledVersion < $ComponentVersion)
		updateLocalComponent();
	mysql_query("UPDATE components SET version = '$ComponentVersion' WHERE compid = $ComponentID");
}
include("pages/".$Page.".php");

include('footer.php');

?>
