<?php

$a = 23;
$b = 10;
$c = '100';

if ($a < $b) {
    echo "$a is less than $b\n";
} else {
	echo "$b is less than $a\n";
}


if ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
} else {
    echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
    echo "$b is equal to $c\n";
} elseif ($b === $c) {
    echo "$b is identical to $c\n";
} elseif ($b != $c) {
    echo "$b is not equal to $c\n";
} else {
    echo "$b is not identical to $c\n";
}

// Omar is a happy panda with coding skills.
?>