<?php
	// don't open secret.txt
	if (!file_exists($_GET['read'])) {
		header("Location: ./?read=notice.txt");
		exit;
	} else if (dir(realpath($_GET['read'])) != dir(realpath(__FILE__))) {
		header("Location: ./?read=notice.txt");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TDOHacker Wargame 2</title>
	<link rel="stylesheet" type="text/css" href="normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<h1>公告</h1>
<q><pre><?php echo htmlspecialchars(file_get_contents($_GET['read'])); ?></pre></q>
	<form method="post" action="login.php">
		<table>
			<tbody>
				<tr>
					<td class="ar"><label for="user">Username:</label></td>
					<td class="al"><input id="user" type="text" name="user" /></td>
				</tr>
				<tr>
					<td class="ar"><label for="pass">Password:</label></td>
					<td class="al"><input id="pass" type="password" name="pass" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit">Login</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
