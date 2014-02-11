<?php

function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    echo ($a + $b) . "\n";
  } else {
	echo "ERROR: Both arguments must be numbers\n";
  }
}

function subtract($a, $b) {
    // Add code here
    echo ($a - $b) . "\n";
}

function multiply($a, $b) {
    // Add code here
    echo ($a * $b) . "\n";
}

function divide($a, $b) {
    // Add code here
    echo ($a / $b) . "\n";
}

function modulus($a, $b) {
    // Add code here
    echo ($a % $b) . "\n";
}

	add(10,2);
	subtract(10,2);
	multiply(10,2);
	divide(10,2);
	modulus(10,2);

?>