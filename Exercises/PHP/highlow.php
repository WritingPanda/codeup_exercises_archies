<?php

    // Get starting number
    fwrite(STDOUT, "Give me a number: ");
    $min = (int) fgets(STDIN);

    // Get starting number
    fwrite(STDOUT, "Give me a larger number: ");
    $max = (int) fgets(STDIN);

    // Checking if the number is numeral
    if (!is_numeric($min) || !is_numeric($max)) {
    	echo "Please use numbers." . PHP_EOL;
    	exit(0);
    }

    // Getting the random number
    $number = mt_rand($min, $max);

    // Introducing the game
    fwrite(STDOUT, "Now, guess the random number! Because it is fun! ");

    // The starting point
    $guess = 0;

    // The user hasn't guessed anything
    $number_of_guesses = 0;

    // Begin program
    while ($guess != $number) {
    	$guess = fgets(STDIN);
    	// Checking if the guess is less than or greater than the random number
    	if ($guess < $number) {
    		fwrite(STDOUT, "Higher! ");
    	} elseif ($guess > $number) {
    		fwrite(STDOUT, "Lower! ");
    	}
    	$number_of_guesses++;
    }

    // Victory!
    fwrite(STDOUT, "You guessed the number! Congratulations!" . PHP_EOL);

    // Ultimate guesser message
    if ($number_of_guesses == 1) {
    	echo "You just needed one try!" . PHP_EOL;
    } else {
    	echo "You guessed it in {$number_of_guesses} guesses." . PHP_EOL;
    }
    
?>