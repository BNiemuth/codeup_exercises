<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list)
{
    $result = '';

    // foreach

    foreach ($list as $key => $value) {
        $key++;
        echo "[{$key}] {$value}\n";
    }

    return $result;

    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{    
    if ($upper == TRUE) {
   return strtoupper(trim(fgets(STDIN))); 

        # code...
    }else { return trim(fgets(STDIN));

    }

    // Return filtered STDIN input
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit, (S)ort, (F)irst item, (L)ast item: ';


    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
        echo 'Add item to the (B)eginning or (E)nd ' . PHP_EOL;
        if ($input == 'B')
        array_unshift();
        elseif ($input == 'E')
        array_push();

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key]);

    } elseif ($input == 'S') {
        //Chose sort method
        echo 'Sort (A)-Z or (Z)-A: ';
        $input = get_input();
        if ($input == 'A') {
            sort ($items);
        } elseif ($input == 'Z')  {
                rsort ($items);
        }
        
    } elseif ($input == 'F') {
        echo 'First item has been removed ' . PHP_EOL;
       //Shift from array
         array_shift($items);
    } 

      elseif ($input == 'L') {
        echo 'Last item has been removed' . PHP_EOL;
        //Pop from array
        array_pop($items);
      }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);