<?php

$start = $argv[1];
$end = $argv[2];
$increment = $argv[3];


if ($start > $end) {
	echo 'Please make sure that the second number is lower than the first one.' . PHP_EOL;
	exit(0);
}

if (is_null($argv[3])) {
	$increment = 1;
}

if (!is_numeric($start) || !is_numeric($end) || !is_numeric($increment)) {
	echo 'Please use numbers.' . PHP_EOL;
	exit(0);
} 

for ($i = $start; $i <= $end; $i+=$increment) {
	echo "$i\n";
}

?>