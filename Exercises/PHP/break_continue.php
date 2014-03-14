<?php

//Working with continue
for ($i=1; $i <= 100; $i++) { 
	if ($i % 2 !== 0){
		continue;
	} echo "$i\n";
	
}

//Working with break
for ($i=1; $i <= 100 ; $i++) { 
	echo $i . PHP_EOL;
	if ($i == 10) {
		break 1;
	}
}

?>