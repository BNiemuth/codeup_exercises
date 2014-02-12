<?php

$nothing = "BARRY";
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

if (isset ($nothing)) 
{
	echo "$nothing is SET\n";
}
else
{
	echo "$nothing is EMPTY\n";
}

// TEST: If var $nothing is set, display '$nothing is SET'

// if ();
// {
// 	echo "$nothing is SET\n";
// }
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (empty ($nothing))
{
	echo "$nothing is EMPTY\n";
}
// TEST: If var $something is set, display '$something is SET'



// Serialize the array $array, and output the results



// Unserialize the array $array, and output the results