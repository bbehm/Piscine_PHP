#!/usr/bin/php
<?php
if ($argc == 4) {
	if (strstr($argv[2], '+')) {
		echo $argv[1] + $argv[3] . "\n";
	} else if (strstr($argv[2], '-')) {
		echo $argv[1] - $argv[3] . "\n";
	} else if (strstr($argv[2], '/')) {
		echo $argv[1] / $argv[3] . "\n";
	} else if (strstr($argv[2], '*')) {
		echo $argv[1] * $argv[3] . "\n";
	} else if (strstr($argv[2], '%')) {
		echo $argv[1] % $argv[3] . "\n";
	}
} else {
	echo "Incorrect Parameters\n";
}
?>