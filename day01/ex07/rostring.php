#!/usr/bin/php
<?php
	if ($argv[1]) {
		$array = explode(' ', $argv[1]);
		$clean = array_filter($array);
		foreach (array_slice($clean, 1) as $word) {
			echo "$word"." ";
		}
		echo "$clean[0]"."\n";
	}
?>