<?php

$x = 0;
$y = 5;
$z = 10;

if (($x < $y) && ($y < $z)) {
	echo "{$x} < {$y} < {$z}\n";
}

if (($x >= 0) || ($x < 10)) {
	echo "$x is greater than 0 OR less than 10\n";
}

if (($y >= 0) || ($y < 10)) {
	echo "$y is greater than 0 OR less than 10\n";
}

if (($z >= 0) || ($z < 10)) {
	echo "$z is greater than 0 OR less than 10\n";
}

if (($x > 0) && ($x < 10)) {
	echo "$x is greater than 0 and less than 10";
}

if (($y > 0) && ($y < 10)) {
	echo "$y is greater than 0 and less than 10";
}

if (($z > 0) && ($z < 10)) {
	echo "$z is greater than 0 and less than 10";
}

//Here is a comment that you cannot see! Hooray for me!
?>