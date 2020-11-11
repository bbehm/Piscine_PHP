#!/usr/bin/php
<?php
if ($argc > 2) {
	$key = $argv[1];
	$i = 2;
	foreach ($argv as $input) {
		if ($input) {
			$array = explode(":", $input);
			if (!strcmp($key, $array[0]) && count($array == 2)) {
				$result = $array[1];
			}
			$i++;
		}
	}
	if ($result) {
		echo $result . "\n";
	}
}
?>