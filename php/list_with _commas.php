<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($input) {
  // My awesome solution goes here!
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);


$last_item = array_pop($physicists_array);


array_push($physicists_array, "and $last_item");

$famous_fake_physicists=implode(', ', $physicists_array).PHP_EOL;

//Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";


?>