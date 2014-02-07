<?php

if ($argc == 3) {
	$start = intval($argv[1]);
	$end = intval($argv[2]);
}

for (; $start <= $end; $start++) {
	echo "$start\n";
}

?>