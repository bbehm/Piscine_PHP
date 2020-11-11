#!/usr/bin/php
<?php
if ($argc == 2) {
	$input = trim(preg_replace('/\s+/', '', $argv[1]));
	if (!preg_match('/^[%*+\-\/\ 0-9]/', $input)) {
		exit("Syntax Error\n");
	}
	$operator = strpbrk($input, "+-*/%");
	$numbers = preg_split('/[%*+\/\-\\\\]/', $input);
	if (count($numbers) != 2) {
		exit("Syntax Error\n");
	}
	if ($operator[0] == '+') {
		echo $numbers[0] + $numbers[1] . "\n";
	} else if ($operator[0] == '-') {
		echo $numbers[0] - $numbers[1] . "\n";
	} else if ($operator[0] == '/') {
		echo $numbers[0] / $numbers[1] . "\n";
	} else if ($operator[0] == '*') {
		echo $numbers[0] * $numbers[1] . "\n";
	} else if ($operator[0] == '%') {
		echo $numbers[0] % $numbers[1] . "\n";
	}
} else {
	echo "Incorrect Parameters\n";
}
?>