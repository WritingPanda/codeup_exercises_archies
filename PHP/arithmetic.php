<?php

// Establishing error function
function error() {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR: Both arguments {$a} and {$b} must be numbers.\n";
	}
}

// Establishing add function
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
    } else {
    	error();
    }
}
// Calling it
	add(50, 25);
	echo "\n";

// Establishing subtract function
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
    } else {
    	error();
    }
}
// Calling it
	subtract(100, 50);
	echo "\n";

// Establishing multiply function
function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
    } else {
    	error();
    }
}
// Calling it
	multiply(2, 50);
	echo "\n";

// Establishing divide function
function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
    } elseif ($b === 0) {
    	echo "ERROR: You cannot divide by 0.";
    } else {
    	error();
    } 
}
// Calling it
	divide(1000,100);
	echo "\n";

// Establishing modulus function
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b;
    } else {
    	error();
    }
}
// Calling it
	modulus(336, 8);
	echo "\n";

?>