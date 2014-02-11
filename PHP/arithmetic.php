<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
    } else {
    	echo "ERROR: Both arguments must be numbers.\n";
    }
}

add(50, 100);
echo "\n";

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
    } else {
    	echo "ERROR: Both arguments ($a and $b) must be numbers.\n";
    }
}

subtract(100, 50);
echo "\n";

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
    } else {
    	echo "ERROR: Both arguments ($a and $b) must be numbers.\n";
    }
}

multiply(2, 50);
echo "\n";

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
    } elseif ($b == 0) {
    	echo "ERROR: You cannot divide by 0.";
    } else {
    	echo "ERROR: Both arguments ($a and $b) must be numbers.\n";
    }
}

divide(1000, 50);
echo "\n";

// Modulus function

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b;
    } else {
    	echo "ERROR: Both arguments ($a and $b) must be numbers.\n";
    }
}

modulus(336, 8);
echo "\n";

?>