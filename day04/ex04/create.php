<?php
if ($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['passwd']) {
	$dir_path = '../htdocs/';
	if (!file_exists($dir_path)) {
		mkdir($dir_path);
	}
	if (!file_exists($dir_path . 'private')) {
		mkdir($dir_path . 'private');
	}
	$file = $dir_path . 'private/passwd';
	if (file_exists($file)) {
		$user_info = unserialize(file_get_contents($file));
	}
	foreach ($user_info as $user) {
		if ($user['login'] == $_POST['login']) {
			exit("ERROR\n");
		}
	}
	$new_user = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
	$user_info[] = $new_user;
	file_put_contents($file, serialize($user_info));
	echo "OK\n";
	header('Location: index.html');

} else {
	exit("ERROR\n");
}
?>