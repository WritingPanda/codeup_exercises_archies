<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael']

// array_search(needle, haystack)

function check_array($array, $element) {
	$query = array_search($array, $element);
	if ($query !== FALSE) {
		return TRUE;
	} else {
		return FALSE;
	}
}


?>