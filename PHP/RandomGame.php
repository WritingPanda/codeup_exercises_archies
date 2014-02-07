<?php

if ($argc == 3) {
 	//Get the starting number
	$min = $argv[1];
	 //Get the ending number
	$max = $argv[2];
} else {
	echo "User error. Don't be a jerk.";
	exit(0);
}
	//Checking if the number is numeral
if (!is_numeric($min) || !is_numeric($max)) {
	echo "Please use numbers.";
	exit(0);
}

	//Getting the random number
$number = mt_rand($min, $max);
	//Introducing the game
fwrite(STDOUT, 'Guess the number. ');
	//The starting point
$guess = 0;
	//The user hasn't guessed anything
$number_of_guesses = 0;

while ($guess != $number) {

	$guess = fgets(STDIN);

	if ($guess < $number) {
		fwrite(STDOUT, 'Higher! ');
	} elseif ($guess > $number) {
		fwrite(STDOUT, 'Lower! ');
	}
	$number_of_guesses++;
}

fwrite(STDOUT, "Aww yeah! You guessed the number!\n ");

if ($number_of_guesses == 1) {
	echo "Whoa! You just needed one try!\n";
	} else {
		echo "You guessed it in {$number_of_guesses} guesses.\n";
}
?>