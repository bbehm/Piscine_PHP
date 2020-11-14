<?php
session_start();
echo $_SESSION['loggued_on_user'] . "HELLO\n";

if ($_SESSION['loggued_on_user']) {
	$file_path = '../htdocs/private/chat';
	if (file_exists($file_path)) {
		$messages = unserialize(file_get_contents($file_path));
		foreach ($messages as $message) {
			echo "[" . date('h:i', $message['time']) . "] <b>" . $message['login'] . "</b>: " . $message['msg'] . "<br />\n";
		}
	}
} else {
	exit("ERROR\n");
}
?>