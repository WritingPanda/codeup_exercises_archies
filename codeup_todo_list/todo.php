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
        $newKey = $key + 1;
        $place .= "[" . $newKey . "]" . " " . $item . PHP_EOL;
    // Display each item and a newline
    }
    return $place;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = false) {
    // Return filtered STDIN input
    if($upper == TRUE) {
        return strtoupper(trim(fgets(STDIN)));
    } else {
        return trim(fgets(STDIN));
    }
}

// Establishing the sorting function
// function sort_menu($arrayList) {
//     if (TRUE) {
//         sort($arrayList);
//     } else {
//         rsort($arrayList);
//     }
// }

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit: ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(true);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[--$key]);
        // Adding sort input
    } elseif ($input == 'S') {
        // Alphabetical or Reverse alphabet?
        echo '(A)-Z or (Z)-A?: ';
        // Getting input
        $sortOption = get_input(TRUE);
        // Evaluating input 
        if ($sortOption == 'A') {
            // Sort function
            sort($items);
        } elseif ($sortOption == 'Z') {
            rsort($items);
        }
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Hold on to your butts... Goodbye!\n";

// Exit with 0 errors
exit(0);

?>