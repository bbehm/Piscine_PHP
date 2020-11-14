<?php
session_start();
if ($_SESSION['loggued_on_user']) {
	$login = $_SESSION['loggued_on_user'];
	$file_path = '../htdocs/private/chat';
	if (!file_exists($file_path)) {
		file_put_contents($file_path, null);
	}
	if ($_POST[['msg']]) {
		$message = $_POST['msg'];
		$fp = fopen($filename, "r+");
		flock($fp, LOCK_EX);
		$info_array = unserialize(file_get_contents($file_path));
		$new_info['login'] = $login;
		$new_info['time'] = time();
		$new_info['msg'] = $message;
		$info_array[] = $new_info;
		file_put_contents($file_path, serialize($info_array));
		fclose($fp);
	}
} else {
	exit("ERROR\n");
}
?>
<html>
	<head>
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<body>
		<form action="speak.php" method="POST">
			<input type="text" name="msg" value="" />
			<input type="submit" name="submit" value="Send" />
		</form>
	</body>
</html>