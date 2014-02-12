<?php

// Ignore step 3

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setEmpty($checkvar) {
	if (isset($checkvar)) {
		return true;
	} elseif (!empty($checkvar)) {
		return true;
	} else {
		return false;
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'

if (setEmpty($nothing)) {
	echo "\$nothing is SET.\n";
} else {
	echo "\$nothing is not SET.\n";
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (setEmpty($nothing)) {
	echo "\$nothing is not EMPTY.\n";
} else {
	echo "\$nothing is EMPTY.\n";
}

// TEST: If var $something is set, display '$something is SET'

if (setEmpty($something)) {
	echo "\$something is SET.\n";
} else {
	echo "\$something is not SET.\n";
}

// Serialize the array $array, and output the results

$serial = serialize($array);
var_dump($serial);

// Unserialize the array $array, and output the results

$unserial = unserialize($serial);
var_dump($unserial);

?>