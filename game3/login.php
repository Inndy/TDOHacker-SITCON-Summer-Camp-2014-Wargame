<?php
	if ($_POST['user'] === 'admin' && $_POST['pass'] === 'h@ck3d') {
		session_start();
		$_SESSION['login'] = 1;
		header("Location: admin.php");
		exit;
	} else {
		header("Location: index.php?read=warn.txt");
		exit;
	}
?>
