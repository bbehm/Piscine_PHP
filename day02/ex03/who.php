#!/usr/bin/php
<?php
date_default_timezone_set('Europe/helsinki');
$user = get_current_user();
$file = file_get_contents("/var/run/utmpx");
$str = substr($file, 1256);
$result = array();
$format = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
while ($str != NULL) {
	$formatted = unpack($format, $str);
	if (strcmp(trim($formatted['user']), $user) == 0 && $formatted['type'] == 7) {
		$line = trim($formatted['line']);
		$timestamp = date("M j H:i", $formatted['time1']);
		$user = trim($formatted['user']);
		$entry = array($user . " " . $line . "  " . $timestamp);
		$result = array_merge($result, $entry);
	}
	$str = substr($str, 628);
}
sort($result);
foreach ($result as $row) {
	echo $row . "\n";
}
?>