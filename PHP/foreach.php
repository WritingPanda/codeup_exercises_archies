<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $value) {
	if (is_int($value)) {
		echo "\$value is an integer. ";
	} elseif (is_double($value)) {
		echo "\$value is a float. ";
	} elseif (is_bool($value)) {
		echo "\$value is a booleon. ";
	} elseif (is_array($value)) {
		echo "\$value is an array. ";
	} elseif (is_null($value)) {
		echo "\$value is null. ";
	} elseif (is_string($value)) {
		echo "\$value is a string. ";
	}
}

?>