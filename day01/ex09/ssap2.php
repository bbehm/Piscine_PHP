#!/usr/bin/php
<?php

if ($argc > 1) {
	$al = array();
	$num = array();
	$other = array();
	foreach (array_slice($argv, 1) as $input) {
		$str = trim($input);
		while ($str != str_replace('  ', ' ', $str)) {
			$str = str_replace('  ', ' ', $str);
		}
		if ($next) {
			$next = $next.' '.$str;
		} else {
			$next = $str;
		}
	}
	$next = explode(' ', $next);
	$next = array_filter($next);
	foreach ($next as $word) {
		if (($word[0] >= 'A' && $word[0] <= 'Z') || ($word[0] >= 'a' && $word[0] <= 'z'))
			array_push($al, $word);
		else if ($word[0] >= '0' && $word[0] <= '9')
			array_push($num, $word);
		else
			array_push($other, $word);
	}
	sort($num, SORT_STRING);
	natcasesort($other);
	natcasesort($al);
	foreach ($al as $word) {
		echo "$word\n";
	}
	foreach ($num as $word) {
		echo "$word\n";
   	}
   	foreach ($other as $word) {
		echo "$word\n";
	}
}
?>