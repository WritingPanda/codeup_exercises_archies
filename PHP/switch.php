<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

//$day_of_week = rand(1,7);

switch($day_of_week) {
    case 1:
        // Output Monday
    	echo "Monday\n";
    	break;
    case 2: 
        // Output Tuesday
    	echo "Tuesday\n";
    	break;
    case 3:
    	//Output Wednesday
    	echo "Wednesday\n";
    	break;
    case 4:
    	//Output Thursday
    	echo "Thursday\n";
    	break;
    case 5:
    	//Output Friday
    	echo "Friday\n";
    	break;
    default:
    	echo "It's the weekend!";
}

?>