<?php

// Ignore step 3

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setEmpty($checkvar) {
	if (isset($checkvar)) {
		echo "\$checkvar is SET.";
	} elseif (empty($checkvar)) {
		echo "\$checkvar is EMPTY.";
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'

setEmpty($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

setEmpty($nothing);

// TEST: If var $something is set, display '$something is SET'

setEmpty($something);

// Serialize the array $array, and output the results

$serial = serialize($array);
var_dump($serial);

// Unserialize the array $array, and output the results

?>