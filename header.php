<html>
	<head>
		<title>GUC Gawebny</title>
		<script type='text/javascript' src='javascript/jquery.js'></script>		

		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<script type='text/javascript' src='javascript/index.js'></script>
		
		<?php
		if(file_exists("css/$Page.css"))
			print "<link rel='stylesheet' type='text/css' href='css/$Page.css'>";
		if(file_exists("javascript/$Page.js"))
			print "<script type='text/javascript' src='javascript/$Page.js'></script>";
		?>
	</head>
	
	<body>
		<div class="Main">
	
