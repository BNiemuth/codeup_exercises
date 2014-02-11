<?php

function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    echo ($a + $b) . "\n";
  } else {
	echo "ERROR: Both arguments must be numbers\n";
  }
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    echo ($a - $b) . "\n";
  } else {
  	echo "ERROR: Both arguments must be numbers\n";
  }
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    echo ($a * $b) . "\n";
  } else {
  	echo "ERROR: Both arguments must be numbers\n";
  }
 }

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    echo ($a / $b) . "\n";
  }	elseif  ($b == 0) {
  	echo "ERROR: Division by 0 isn't permitted :(\n";
  }	else {
   	echo "ERROR: Both arguments must be numbers\n";
   }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    echo ($a % $b) . "\n";
  }  else {
    echo "ERROR: Both arguments must be numbers\n";	
    }
}

	add(10,2);
	subtract(10,2);
	multiply(10,2);
	divide(10,2);
	modulus(10,2);

?>