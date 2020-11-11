#!/usr/bin/php
<?php
if ($argc == 2) {
	if (!file_exists($argv[1])) {
		echo "The given file does not exist.\n";
	} else {
		$file = fopen($argv[1], 'r') or exit("Could not open file\n");
		while (!feof($file)) {
			$line = fgets($file);
			$line = preg_replace_callback(
				'/<a.*?title="(.*?)">/',
				function ($line) {
					return str_replace($line[1], strtoupper($line[1]), $line[0]);
				},
				$line
			);
			$line = preg_replace_callback(
				'/<a.*?>(.*?)</',
				function ($line) {
					return str_replace($line[1], strtoupper($line[1]), $line[0]);
				},
				$line
			);
			echo $line;
		}
	}
}
?>