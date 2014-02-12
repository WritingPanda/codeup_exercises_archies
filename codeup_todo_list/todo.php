<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN

function list_items($list) {
    $place = '';
    // Iterate through list items
    foreach ($list as $key => $item) {
        $place .= "[" . ++$key . "]" . " " . $item . PHP_EOL;
    // Display each item and a newline
    }
    return $place;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
    // Return filtered STDIN input
    if($upper == TRUE) {
        return strtoupper(trim(fgets(STDIN)));
    } else {
        return trim(fgets(STDIN));
    }
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(true);

    // Check for actionable input
    if ($input == 'N' || $input == 'n') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R' || $input == 'r') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[--$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q' && $input != 'q');

// Say Goodbye!
echo "Hold on to your butts... Goodbye!\n";

// Exit with 0 errors
exit(0);

?>