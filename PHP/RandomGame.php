<?php
if ($argc == 3) {
	//Get the starting number
	$start = $argv[1];
	//Get the ending number
	$end = $argv[2];
}

$number = mt_rand($start, $end);

fwrite(STDOUT, 'Guess the number. ');

$guess = 0;

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