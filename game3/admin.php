<?php
	session_start();
	if (!$_SESSION['login']) {
		header("Location: index.php?read=warn.txt");
		exit;
	}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Adminstrator Land</title>
	<link rel="stylesheet" type="text/css" href="normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<h1>Administrator Only!!!!</h1>
	<hr />
	<ul class="menu">
		<li><a href="index.php">Back</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h3>You got it...</h3>
</body>
</html>
