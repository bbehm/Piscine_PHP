#!/usr/bin/php
<?php
	$amount = count($argv);
	for ($i = 1; $i < $amount; $i++)
		echo "$argv[$i]\n";
?>