#!/usr/bin/php
<?php

function check($number) {
	if($number % 2 == 0) {
		echo ("The number $number is even\n");
	}
	else {
		echo ("The number $number is odd\n");
	}
}

while (true) {
	echo "Enter a number: ";
	$input = trim(fgets(STDIN));
	if (feof(STDIN))
		break ;
	if (is_numeric($input))
		check($input);
	else
		echo "'$input' is not a number\n";
}
echo "\n";

?>