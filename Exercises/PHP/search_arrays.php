<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// array_search(needle, haystack)
$question = array_search('Tina', $names);
var_dump($question);

function check_array($element, $array) {
	$query = array_search($element, $array);
	if ($query !== FALSE) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function count_matches($needles, $haystack) {
	$numberMatches = 0;
	foreach ($needles as $needle) {
		$result = array_search($needle, $haystack);
		if (is_numeric($result)) {
			$numberMatches++;
		}
	}
}

echo check_array('Tina', $names) . PHP_EOL;

echo check_array('Bob', $names) . PHP_EOL;

echo count_matches($compare, $names);

?>