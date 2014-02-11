<?php

// Establishing error function
function error($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "\nERROR: Both arguments {$a} and {$b} must be numbers.\n\n";
	} elseif ($b === 0) {
        return false;
    } elseif (is_null($a) || is_null($b)) {
        return false;
        echo "ERROR: {$a} or {$b} has been left without a value.";
    }
}

// Establishing add function
function add($a, $b) {
    error($a, $b);
    return $a + $b;
}
// Calling it
$sum = add(50, 25);
	echo "The sum of 50 and 25 is {$sum}.\n";

// Establishing subtract function
function subtract($a, $b) {
    error($a, $b);
    return $a - $b;
}
// Calling it
$diff =	subtract(100, 50);
	echo "The difference of 100 and 50 is {$diff}.\n";

// Establishing multiply function
function multiply($a, $b) {
    error($a, $b);
	return $a * $b;
}
// Calling it
	multiply(4, 50);
	echo "\n";

// Establishing divide function
function divide($a, $b) {
    error($a, $b);
    return $a / $b;
}

// Calling it
	divide(1000, 50);
	echo "\n";

// Establishing modulus function
function modulus($a, $b) {
    error($a, $b);
    return $a % $b;
}
// Calling it
	modulus(336, 8);
	echo "\n";

?>