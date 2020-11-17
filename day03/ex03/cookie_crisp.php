<?php
	$request = $_GET;
	switch ($request['action']) {
		case "get":
			if ($request['name']) {
				if ($_COOKIE[$request['name']]) {
					echo $_COOKIE[$request['name']] . "\n";
				}		
			}
			break ;
		case "del":
			if ($request['name']) {
				// any negative expiration date will destroy a cookie
				setcookie($request['name'], "", time() - 1);
			}
			break;
		case "set":
			if ($request['name']) {
				// I set this cookie to have an expiration date 30 days from now
				setcookie($request['name'], $request['value'], time() + (2592000), '/');
			}
			break ;
	}
?>
