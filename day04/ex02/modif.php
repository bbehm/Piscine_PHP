<?php
$file_path = '../htdocs/private/passwd';
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == "OK" && file_exists($file_path)) {
	$user_info = unserialize(file_get_contents($file_path));
	$done = false;
	$old_pw = hash('whirlpool', $_POST['oldpw']);
	$new_pw = hash('whirlpool', $_POST['newpw']);
	foreach ($user_info as $key => $value) {
		if ($value['login'] == $_POST['login'] && $old_pw == $new_pw) {
			$user_info[$key]['passwd'] = $new_pw;
			$done = true;
		}
	}
	if ($done) {
		file_put_contents($file_path, serialize($user_info));
		echo "OK\n";
		exit;
	} else {
		exit("ERROR\n");
	}
} else {
	exit("ERROR\n");
}
?>