#!/usr/bin/php
<?php
if ($argc > 1) {

	$format = preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]|1[0-9]|2[0-9]|3[0-1]) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) (([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]))$/', $argv[1], $matches);
	if (!$format) {
		echo "Wrong Format\n";
		exit ;
	}

	$months = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];
	if ($month = array_search(strtolower($matches[3]), $months)) {
		$month = $month + 1;
	} else if (!$month) {
		echo "Wrong Format\n";
		exit ;
	}

	$time = $matches[4].'-'.$month.'-'.$matches[2].' '.$matches[5];
	$time = strtotime($time);
	if (!$time) {
		echo "Wrong Format\n";
		exit ;
	}
	echo $time."\n";
}
exit;
?>


