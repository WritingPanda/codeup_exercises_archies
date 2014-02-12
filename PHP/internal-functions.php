<?php

// Ignore step 3

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setEmpty($checkvar) {
	if (isset($checkvar)) {
		echo "\$variable_name is SET.";
	} elseif (empty($checkvar)) {
		echo "\$variable_name is EMPTY.";
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'

isEmpty($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

?>