<?php

// Establishing error function
function error($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "\nERROR: Both arguments {$a} and {$b} must be numbers.\n\n";
        return true;
    } else {
        return false;
    }
}
// Establishing add function
function add($a, $b) {
    if (!error($a, $b)) {
        return $a + $b;
    } 
}
// Calling it
$sum = add(50, 25);
    echo $sum . PHP_EOL;;
	

// Establishing subtract function
function subtract($a, $b) {
    if (!error($a, $b)) 
    return $a - $b;
}
// Calling it
$diff =	subtract(100, 50);
	echo $diff . PHP_EOL;;

// Establishing multiply function
function multiply($a, $b) {
    if (!error($a, $b)){
	return $a * $b;
    }
}
// Calling it
$product = multiply(4, 50);
	echo $product . PHP_EOL;

// Establishing divide function
function divide($a, $b) {
    if (!error($a, $b)){
        return $a / $b;
    } elseif ($b === 0) {
        echo "ERROR: You cannot divide by 0.\t";
        return false;
    }
}

// Calling it
$quotient = divide(1000, 50);
	echo $quotient . PHP_EOL;

// Establishing modulus function
function modulus($a, $b) {
    if (!error($a, $b)){
        return $a % $b;
    }   
}
// Calling it
$module = modulus(336, 8);
	echo $module . PHP_EOL;;
?>