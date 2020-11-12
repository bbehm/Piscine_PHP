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
		case "delete":
			if ($request['name']) {
				setcookie($vars["name"], "", time() - 3600);
			}
			break;
		case "set":
			if ($request['name']) {
				setcookie($request['name'], $request['value'], time() + (2592000), '/');
			}
			break ;
	}
?>