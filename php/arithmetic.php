<?php

function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b . "\n";
  } else {
	return NULL;
  }
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    return $a - $b . "\n";
  } else {
  	return NULL;
  }
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    return $a * $b . "\n";
  } else {
  	return NULL;
  }
 }

function divide($a, $b) {
  	if  ($b == 0) {
  	return "Not divisable by 0";	
  }	elseif (is_numeric($a) && is_numeric($b)) {
    return $a / $b . "\n";
  } else {
   	return FALSE;
   }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    return $a % $b . "\n";
  }  else {
    return NULL;	
    }
}

	add(10,2);
	subtract(10,2);
	multiply(10,2);
	divide(10,2);
	modulus(10,2);

?>