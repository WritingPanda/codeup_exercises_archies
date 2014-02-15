<?php

// Create array to hold list of todo items
$items = array();

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

function read_file($filename) {
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    return $contents_array;
}

function save_file($filename, $data_to_save){

    $input = 'Y';

    if (file_exists($filename)) {
        echo "This will overwrite the file. Are you sure? Y or N? ";
        $input = get_input(TRUE);
    }

    if ($input == 'Y') {
        $handle = fopen($filename, 'w');
        $contents = implode("\n", $data_to_save);
        fwrite($handle, $contents);
        fclose($handle);
    } else {
        echo "No changes were made.\n";
    }

}

do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, File (M)anager, (Q)uit: ';

    // Get the input from user
    $input = get_input(true);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $newItem = get_input();
            echo 'Would you like that at the (B)eginning or the (E)nd? ';
            $input = get_input(TRUE);
            if ($input == 'B') {
                array_unshift($items, $newItem);
            } elseif ($input == 'E') {
                array_push($items, $newItem);
            } else {
                array_push($items, $newItem);
            }
    
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

    } elseif ($input == 'F') {
        array_shift($items);

    } elseif ($input == 'L') {
        array_pop($items);

    } elseif ($input == 'M') {

        echo "(O)pen or (S)ave file? ";
        $input = get_input(TRUE);

        echo "Enter filename: ";
        $filename = get_input();

        if($input == 'S'){
            save_file($filename, $items);
            echo "\nSaving file...\n\n";
        } elseif($input == 'O') {
            $new_items = read_file($filename, $items);
            $items = array_merge($items, $new_items);
            echo "\nMerging...\n\n";
        }
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Hold on to your butts... Goodbye!\n";

// Exit with 0 errors
exit(0);
?>