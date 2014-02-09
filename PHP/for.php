<?php

//Starting out
fwrite(STDOUT, "Welcome to my program. I wrote it. You didn't.\n");
//Asking user for input
echo "Select a number with which you'd like to begin counting: ";

//Setting starting variable for user input, making sure it is an integer
$start = intval(fgets(STDIN));

//Setting ending variable for user input, making sure it is an integer
fwrite(STDOUT, "Choose a higher number: ");
$end = intval(fgets(STDIN));

//Setting increment, making sure it is an integer
fwrite(STDOUT, "Select an increment: ");
$increment = intval(fgets(STDIN));



?>