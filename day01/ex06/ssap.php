#!/usr/bin/php
<?php
if ($argc > 1) {
	$array = array();
	$i = 1;
	while ($i < $argc) {
		$interim = explode(" ", $argv[$i]);
		$array = array_merge($array, $interim);
		$i++;
	}
	$fixed = array_filter($array);
	sort($fixed);
	$count = count($fixed);
	for ($x = 0; $x < $count; $x++)
		echo "$fixed[$x]\n";
}
?>