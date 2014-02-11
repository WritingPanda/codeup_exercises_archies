<?php

// Establishing error function
function error($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "\nERROR: Both arguments {$a} and {$b} must be numbers.\n\n";
        return false;
        exit(0);
    } elseif (is_null($a) || is_null($b)) {
        return false;
        echo "ERROR: {$a} or {$b} has been left without a value.";
        exit(0);
    } else {
        return true;
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
$product = multiply(4, 50);
	echo "The product of 4 and 50 is {$product}.\n";

// Establishing divide function
function divide($a, $b) {
    error($a, $b);
    if ($b === 0) {
        echo "ERROR: You cannot divide by 0.\t";
        return false;
        exit(0);
    } else {
        return $a / $b;
    }
}
// Calling it
$quotient = divide(1000, 50);
	echo "The quotient of 1000 and 50 is {$quotient}.\n";

// Establishing modulus function
function modulus($a, $b) {
    error($a, $b);
    return $a % $b;
}
// Calling it
$module = modulus(336, 8);
	echo "The remainder of 336 and 8 is {$module}.\n";
?>