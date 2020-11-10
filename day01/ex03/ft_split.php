#!/usr/bin/php
<?php

function ft_split($str) {
	$split = explode(" ", "$str");
	$fix = array_filter($split);
	sort($fix);
	return ($fix);
}

?>