<?php

// Establishing error function
function error($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "\nERROR: Both arguments {$a} and {$b} must be numbers.\n\n";
	} elseif ($b === 0) {
        echo "\nERROR: You cannot divide by 0.\n";
    }
}

// Establishing add function
function add($a, $b) {
    error($a, $b);
    echo $a + $b;
}
// Calling it
	add(50, 25);
	echo "\n";

// Establishing subtract function
function subtract($a, $b) {
    error($a, $b);
    echo $a - $b;
}
// Calling it
	subtract(100, 50);
	echo "\n";

// Establishing multiply function
function multiply($a, $b) {
    error($a, $b);
	echo $a * $b;
}
// Calling it
	multiply(4, 50);
	echo "\n";

// Establishing divide function
function divide($a, $b) {
    error($a, $b);
    echo $a / $b;
}

// Calling it
	divide(1000,20);
	echo "\n";

// Establishing modulus function
function modulus($a, $b) {
    error($a, $b);
    echo $a % $b;
}
// Calling it
	modulus(336, 8);
	echo "\n";

?>