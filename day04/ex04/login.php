<?php
include ('auth.php');
session_start();
if (auth($_GET['login'], $_GET['passwd'])) {
	$_SESSION['loggued_on_user'] = $_GET['login'];
	header('Content-type: text/html');
} else {
	$_SESSION['loggued_on_user'] = "";
	header('Location: index.html');
	echo "ERROR\n";
}
?>
<html><body>
	<form>
		<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
		<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
		<input name="logout" type="submit" formaction="logout.php" value="Log out" />
	</form>
</body></html>