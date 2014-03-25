<?php

require_once ('filestore.php');

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
    echo '(N)ew item, (R)emove item, (Q)uit, (S)ort, Remove (F)irst item, Remove (L)ast item, (O)pen file, S(a)ve file: ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    
    //New item
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $todo_item = get_input();
        //Prompt for add to begining/end, no input=end
        echo 'Add item to the (B)eginning or (E)nd? ' . PHP_EOL;
        $order = get_input(TRUE);
        if ($order == 'B'){
            array_unshift($items, $todo_item);
        }

        else {
            $items[] = $todo_item;
        } 

    //Remove item
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        $key--;
        // Remove from array
        unset($items[$key]);

    //Save item
    } elseif ($input == 'S') {
        //Chose sort order
        echo 'Sort (A)-Z or (Z)-A:? ';
        $input = get_input(TRUE);
        //Sort A-Z
        if ($input == 'A') {
            sort ($items);
         //Sort Z-A
        } elseif ($input == 'Z')  {
                rsort ($items);
        }

    //First item removed
    } elseif ($input == 'F') {
        echo 'First item has been removed ' . PHP_EOL;
       //Shift from array
         array_shift($items);
    } 

    //Last item removed
      elseif ($input == 'L') {
        echo 'Last item has been removed' . PHP_EOL;
        //Pop from array
        array_pop($items);
      }

      //Open file
      elseif ($input == 'O') {
        echo 'Input file name' . PHP_EOL;
        //Take input file name then fopen & fread
        $filename = get_input();
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));
        //Explode with \n then fclose
        $contents_array = explode("\n", $contents);
        fclose($handle);
        foreach ($contents_array as $line)
        {
            //If no data then no new line
            if ($line != ''){

               $items[]=$line;

               if (file_exists($filename)) {
               echo "The file $filename exists" . PHP_EOL;
               } else {
               echo "The file $filename does not exist" . PHP_EOL;
}
            }
        } 
      //Save file
    } elseif ($input == 'A') {
        echo 'Input file name to save' . PHP_EOL;
        //Input file name & fopen $file_name w/ 'w'.
        $file_name = get_input();
        $handle = fopen($file_name, 'w');
        foreach ($items as $line){
            //Don't add extra line            
            if ($line != ''){
                fwrite ($handle, $line . PHP_EOL);
            } 
        }  
        fclose ($handle);
    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);