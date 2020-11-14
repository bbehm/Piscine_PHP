<?php
function auth($login, $passwd) {
	// $passwd is plain = prior to hashing
	if ($login && $passwd) {
		$file_path = '../htdocs/private/passwd';
		$user_info = unserialize(file_get_contents($file_path));
		foreach ($user_info as $user) {
			if ($user['login'] == $login && $user['passwd'] == hash('whirlpool', $passwd)) {
				return TRUE;
			}
		}
		return FALSE;
	} else {
		return FALSE;
	}
}
?>