<?php

for ($i=1; $i <= 100; $i++) { 
	echo $i . "\t";
	if ($i % 2 == 0){
		echo "Even.\n";
		continue;
	}
	
}

for ($i=1; $i <= 100 ; $i++) { 
	echo $i . PHP_EOL;
	if ($i == 10) {
		break 1;
	}
}

?>